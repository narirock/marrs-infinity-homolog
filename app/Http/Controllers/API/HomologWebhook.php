<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomologWebhook extends Controller
{
    public function handle(Request $request)
    {
        $requestObject = json_encode($request);
        $requestData = json_encode($request->all());

        Log::info('Request: ' . $requestObject);
        Log::info('DATA: ' . $requestData);

        return response()->json(['success' => true]);
    }
}
