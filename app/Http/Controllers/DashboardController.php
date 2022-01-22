<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard', [
            'strategy_id' => Configuration::where('var', 'strategy')->first()->value,
        ]);
    }
}
