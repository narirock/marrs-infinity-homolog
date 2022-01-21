<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignalTypeRequest;
use App\Models\SignalTypes;
use Illuminate\Http\Request;

class SignalTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.cruds.signaltypes.index', [
            'signalTypes' => SignalTypes::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cruds.signaltypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SignalTypeRequest $request)
    {
        $signalTypes = SignalTypes::create($request->all());
        return redirect()->route('admin.signaltypes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SignalTypes  $signalTypes
     * @return \Illuminate\Http\Response
     */
    public function show(SignalTypes $signalTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SignalTypes  $signalTypes
     * @return \Illuminate\Http\Response
     */
    public function edit(SignalTypes $signaltype)
    {
        return view('admin.cruds.signaltypes.edit', [
            'signaltype' => $signaltype
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SignalTypes  $signalTypes
     * @return \Illuminate\Http\Response
     */
    public function update(SignalTypeRequest $request, $signalTypes)
    {
        SignalTypes::find($signalTypes)->update($request->all());
        return redirect()->route('admin.signaltypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SignalTypes  $signalTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy($signaltypes)
    {
        SignalTypes::find($signaltypes)->delete();
        return redirect()->route('admin.signaltypes.index');
    }
}
