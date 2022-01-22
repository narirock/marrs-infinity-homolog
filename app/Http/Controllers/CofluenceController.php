<?php

namespace App\Http\Controllers;

use App\Models\Signal;
use App\Models\Strategy;
use App\Models\Cofluence;
use Illuminate\Http\Request;
use App\Models\Configuration;
use App\Models\SentCofluence;
use App\Models\StrategyCofluence;
use Illuminate\Support\Facades\Redis;

class CofluenceController extends Controller
{
    public function handle(Request $request)
    {

        //varrer configuralções
        //verificar se existe cofluencia na tabela
        //verificar validade da cofluencia
        //verificar se cofluencia foi atendida
        //criar cofluencia caso não exista na tabela
        //reiniciar cocluencia caso esteja fora da validade

        $strategies = Strategy::where('symbol', $request->symbol)->get();
        foreach ($strategies as $strategy) {
            if (in_array($request->sinal, json_decode($strategy->signal_types))) {

                $cofluence = StrategyCofluence::firstOrCreate(
                    [
                        'strategy_id' => $strategy->id,
                        'side' => $request->side,
                    ],
                    [
                        'symbol' => $request->symbol,
                        'expiry' => now()->addMinutes($strategy->minutes),
                        'signal_types' => $this->format_signals($strategy->signal_types),
                    ]
                );

                if ($cofluence->expiry < now()) {
                    //reset cocfluence
                    $cofluence = $this->resetStrategyCofluence($cofluence, $strategy);
                }

                $cofluence = $this->incrementStrategyCofluence($cofluence, $request->sinal);

                if ($this->validateCofluence($cofluence, $strategy)) {
                    //dump($strategy->name . ' - atendida');
                    $cofluence = $this->resetStrategyCofluence($cofluence, $strategy);
                } else {
                    //dump($strategy->name . ' - não atendida');
                }
            } else {
                //dump($strategy->name . ' - nao tem sinal');
            }
        }

        //salvando requisiçao na tabela de sinais
        Signal::create($request->all());

        return response()->json(['success' => true, 'message' => 'Signal received', 'data' => []]);
    }

    public function resetStrategyCofluence($cofluence, $strategy): StrategyCofluence
    {
        $cofluence->expiry = now()->addMinutes($strategy->minutes);
        $cofluence->signal_types = $this->format_signals($strategy->signal_types);
        $cofluence->save();

        return $cofluence;
    }

    public function incrementStrategyCofluence($cofluence, $signal): StrategyCofluence
    {
        $signal_types = json_decode($cofluence->signal_types);
        $signal_types->{$signal}++;
        $cofluence->signal_types = json_encode($signal_types);
        $cofluence->save();
        return $cofluence;
    }

    public function validateCofluence($cofluence, $strategy)
    {
        $count = 0;
        $signal_types = json_decode($cofluence->signal_types);
        foreach ($signal_types as $signal) {
            if ($signal < 1) {
                return false;
            }
            $count += $signal;
        }

        if ($count < $strategy->signals) {
            return false;
        }

        $this->notify($cofluence);
        return true;
    }

    public function format_signals($signals)
    {
        $signals = json_decode($signals);
        $signals_formated = [];
        foreach ($signals as $signal) {
            $signals_formated[$signal] = 0;
        }
        return json_encode($signals_formated);
    }

    public function increment_signals($signals, $signal)
    {
        $signals = json_decode($signals);
        $signals[$signal]++;
        return json_encode($signals);
    }


    public function notify($cofluence)
    {
        $data = array(
            'sinal' => $cofluence->sinal,
            'side' => $cofluence->side,
            'symbol' => $cofluence->symbol,
            'strategy_id' => $cofluence->strategy_id,
            'color' => $cofluence->side == 'sell' ? 'red' : 'green',
        );

        Redis::publish('-chanel', json_encode($data));

        SentCofluence::create($data);
    }
}
