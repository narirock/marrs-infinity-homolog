<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationTimeRequest;
use App\Models\ValidationTime;
use Illuminate\Http\Request;

class ValidationTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cruds.validationtimes.index', [
            'validationTimes' => ValidationTime::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cruds.validationtimes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Models\ValidationTime $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationTimeRequest $request)
    {
        ValidationTime::create($request->all());

        return redirect()->route('admin.validationtimes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ValidationTime  $validationTime
     * @return \Illuminate\Http\Response
     */
    public function show(ValidationTime $validationTime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ValidationTime  $validationTime
     * @return \Illuminate\Http\Response
     */
    public function edit(ValidationTime $validationtime)
    {
        return view('admin.cruds.validationtimes.edit', [
            'validationtime' => $validationtime,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\ValidationTime  $request
     * @param  \App\Models\ValidationTime  $validationTime
     * @return \Illuminate\Http\Response
     */
    public function update(ValidationTimeRequest $request, ValidationTime $validationtime)
    {
        $validationtime->update($request->all());
        return redirect()->route('admin.validationtimes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ValidationTime  $validationTime
     * @return \Illuminate\Http\Response
     */
    public function destroy(ValidationTime $validationtime)
    {
        $validationtime->delete();
        return redirect()->route('admin.validationtimes.index');
    }
}
