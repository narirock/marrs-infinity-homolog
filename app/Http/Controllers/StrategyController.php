<?php

namespace App\Http\Controllers;

use App\Http\Requests\StrategyRequest;
use App\Models\Coin;
use App\Models\SignalTypes;
use App\Models\Strategy;
use Illuminate\Http\Request;

class StrategyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $strategies = Strategy::all();

        return view('admin.cruds.strategies.index', compact('strategies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cruds.strategies.create', [
            'coins' => Coin::pluck('description', 'code'),
            'signal_types' => SignalTypes::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StrategyRequest $request)
    {
        $strategy = new Strategy();
        $strategy->fill($request->all());
        $strategy->save();

        return redirect()->route('admin.strategies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Strategy  $strategy
     * @return \Illuminate\Http\Response
     */
    public function show(Strategy $strategy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Strategy  $strategy
     * @return \Illuminate\Http\Response
     */
    public function edit(Strategy $strategy)
    {
        return view('admin.cruds.strategies.edit', [
            'strategy' => $strategy,
            'signal_types' => SignalTypes::all(),
            'coins' => Coin::pluck('description', 'code')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Strategy  $strategy
     * @return \Illuminate\Http\Response
     */
    public function update(StrategyRequest $request, Strategy $strategy)
    {
        $strategy->fill($request->all());
        $strategy->save();

        return redirect()->route('admin.strategies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Strategy  $strategy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Strategy $strategy)
    {
        $strategy->delete();
        return redirect()->route('admin.strategies.index');
    }
}
