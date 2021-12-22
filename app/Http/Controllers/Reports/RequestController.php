<?php

namespace App\Http\Controllers\Reports;

use App\Models\DataIn;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestController extends Controller
{
    public function index()
    {
        $dataIns = DataIn::orderby('created_at', 'desc')->paginate(1);
        return view('reports.request.index', compact('dataIns'));
    }
}
