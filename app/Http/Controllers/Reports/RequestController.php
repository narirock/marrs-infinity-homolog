<?php

namespace App\Http\Controllers\Reports;

use App\Models\DataIn;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Signal;

class RequestController extends Controller
{
    public function index()
    {
        $signals = Signal::orderby('created_at', 'desc')->paginate(10);
        return view('reports.request.index', compact('signals'));
    }
}
