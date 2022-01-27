<?php

namespace App\Http\Controllers\Admin\Reports;

use App\Http\Controllers\Controller;
use App\Models\SentCofluence;
use App\Models\Signal;
use App\Models\Strategy;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CofluenceController extends Controller
{
    public function form()
    {
        return view('admin.reports.cofluence.form', [
            'strategies' => Strategy::pluck('name', 'id'),
        ]);
    }

    public function report(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'strategy_id' => 'required|exists:strategies,id',
                'start' => 'required|date|before:end',
                'end' => 'required|date|after:start',
            ],
            [
                'strategy_id.required' => 'A estratégia deve ser informada',
                'strategy_id.exists' => 'A estratégia informada não existe',
                'start.required' => 'A data inicial deve ser informada',
                'end.required' => 'A data final deve ser informada',
                'start.date' => 'A data inicial deve ser uma data válida',
                'end.date' => 'A data final deve ser uma data válida',
                'start.before' => 'A data inicial deve ser menor que a data final',
                'end.after' => 'A data final deve ser maior que a data inicial',
            ]
        );

        if ($validator->fails()) {
            return '<h1>' . $validator->errors()->first() . '</h1>';
        }

        $sentcofluence = SentCofluence::with('strategy')
            ->where('strategy_id', $request->strategy_id)
            ->whereBetween('created_at', [$request->start, $request->end])
            ->get()
            ->each(function ($sentCofluence) {
                $sentCofluence->signals = $this->getSteps($sentCofluence);
            });

        return view('admin.reports.cofluence.report', [
            'sentCofluence' => $sentcofluence,
        ]);
    }

    public function getSteps($sentCofluence)
    {
        $strategy = $sentCofluence->strategy;
        foreach (json_decode($strategy->signal_types) as $signalType) {
            $types[$signalType] = 0;
        }

        $signals = Signal::where('side', $sentCofluence->side)
            ->where('symbol', $sentCofluence->symbol)
            ->whereIn('sinal', json_decode($sentCofluence->strategy->signal_types))
            ->whereBetween('created_at', [Carbon::create($sentCofluence->created_at)->subMinute($strategy->minutes), $sentCofluence->created_at])
            ->orderby('created_at', 'desc')
            ->get()->filter(function ($signal) use (&$types, $strategy) {
                $types[$signal->sinal]++;
                return $this->checkRules($strategy, $types);
            });
        return  $signals;
    }

    public function checkRules($strategy, $current)
    {
        foreach ($current as $type) {
            if ($type < 1) {
                return true;
            }
        }

        if (array_sum($current) > $strategy->signals) {
            return false;
        }

        return true;
    }
}
