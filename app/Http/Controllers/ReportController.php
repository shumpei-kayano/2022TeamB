<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function index(Request $request)
    {
        return view('MyPage.report');
    }

    public function report(Request $request)
    {
        return view('MyPage.complete_report');
    }
}
