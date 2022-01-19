<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Configuration;
use App\Models\ValidationTime;

class ConfigurationController extends Controller
{
    public function index()
    {
        $configurations = array(); //\App\Models\Configuration::all();
        return view('admin.configuration', [
            'configurations' => $configurations,
            'validationtimes' => ValidationTime::all(),
        ]);
    }

    public function store(Request $request)
    {
        try {
            foreach ($request->except('_token') as $key => $value) {

                $configuration = Configuration::where('var', $key)->first();
                if ($configuration) {
                    $configuration->value = $value;
                    $configuration->save();
                } else {
                    Configuration::create([
                        'var' => $key,
                        'value' => $value,
                    ]);
                }
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->route('admin.configurations.index')->with('success', 'Configurações salvas com sucesso');;
    }
}
