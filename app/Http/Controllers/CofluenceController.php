<?php

namespace App\Http\Controllers;

use App\Models\Cofluence;
use App\Models\Signal;
use Illuminate\Http\Request;

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
            }
        } else {
            //nao existe cofluencia anterior, criar nova cofluencia
            $this->newCofluence($request);
        }

        //salvar dados recebidos
        Signal::create($request->all());

        return response()->json(['success' => true]);
    }

    public function newCofluence($request)
    {
        $cofluence = new Cofluence();
        $cofluence->counter = $request->counter;
        $cofluence->sinal = $request->sinal;
        $cofluence->side = $request->side;
        $cofluence->symbol = $request->symbol;
        $cofluence->expiry = now()->addMinutes($this->getMinutes($request->sinal));
        $cofluence->save();
    }
}
