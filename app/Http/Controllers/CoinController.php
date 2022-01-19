<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoinRequest;
use App\Models\Coin;
use Illuminate\Http\Request;

class CoinController extends Controller
{
    public function index()
    {
        return view('admin.cruds.coins.index', [
            'coins' => \App\Models\Coin::all()
        ]);
    }

    public function create()
    {
        return view('admin.cruds.coins.create');
    }

    public function store(CoinRequest $request)
    {
        $coin = new \App\Models\Coin();
        $coin->code = $request->code;
        $coin->description = $request->description;
        $coin->save();

        return redirect()->route('admin.coins.index');
    }

    public function show()
    {
    }

    public function edit(Coin $coin)
    {
        return view('admin.cruds.coins.edit', [
            'coin' => $coin
        ]);
    }

    public function update(Coin $coin, CoinRequest $request)
    {
        $coin->code = $request->code;
        $coin->description = $request->description;
        $coin->save();

        return redirect()->route('admin.coins.index');
    }

    public function destroy(Coin $coin)
    {
        $coin->delete();

        return redirect()->route('admin.coins.index');
    }
}
