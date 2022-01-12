<?php

namespace App\Http\Controllers;

use App\Models\Cofluence;
use App\Models\Signal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CofluenceController extends Controller
{

    public function getMinutes($sinal)
    {
        switch ($sinal) {
            case '1M':
                return 1;
            default:
                return 15;
        }
    }



    public function handle(Request $request)
    {

        //verificar se existe cofluencia anterior
        $cofluence = Cofluence::where('symbol', $request->symbol)
            ->where('side', $request->side)
            ->where('sinal', $request->sinal)
            ->first();

        if ($cofluence) {
            //verificar se expirou
            if ($cofluence->expiry < now()) {
                //expirou, criar nova cofluencia
                $cofluence->counter = 1;
                $cofluence->expiry = now()->addMinutes($this->getMinutes($request->sinal));
                $cofluence->save();
            } else {
                //nao expirou, atualizar cofluencia
                $cofluence->counter++;
                $cofluence->save();
                if ($cofluence->counter == 5) {
                    $this->notify($cofluence);
                }else if($cofluence->counter > 5){
                    //verificar se apos o sinal deve atualizar o expiry
                    $cofluence->counter = 1;
                    $cofluence->save();
                }

            }
        } else {
            //nao existe cofluencia anterior, criar nova cofluencia
            $cofluence = $this->newCofluence($request);
        }

        //salvar dados recebidos
        Signal::create($request->all());

        return response()->json(['success' => true, 'message' => 'Signal received', 'data' => $cofluence->counter ." / 5"]);
    }

    public function newCofluence($request)
    {
        $cofluence = new Cofluence();
        $cofluence->counter = 1;
        $cofluence->sinal = $request->sinal;
        $cofluence->side = $request->side;
        $cofluence->symbol = $request->symbol;
        $cofluence->expiry = now()->addMinutes($this->getMinutes($request->sinal));
        $cofluence->save();

        return $cofluence;
    }

    public function notify($cofluence)
    {
        $data = array(
            'sinal' => $cofluence->sinal,
            'side' => $cofluence->side,
            'symbol' => $cofluence->symbol,
            'color' => $cofluence->side == 'sell' ? 'red' : 'green',
        );

        Redis::publish('-chanel', json_encode($data));
    }
}
