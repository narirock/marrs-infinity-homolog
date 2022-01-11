<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DataIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomologWebhook extends Controller
{
    public function handle(Request $request)
    {

        $headers = collect($request->header())->transform(function ($item) {
            return $item[0];
        });

        $requestHeader = json_encode($headers);
        $requestData = json_encode($request->all());

        //Log::info('Request: ' . $requestObject);
        //Log::info('DATA: ' . $requestData);

        DataIn::create([
            'data' => $requestData,
            'header' => $requestHeader
        ]);

        return response()->json(['success' => true]);
    }
}
