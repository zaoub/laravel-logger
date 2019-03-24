<?php

namespace Zaoub\Laravel\App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $data['logs_new'] = \LogReader::get()->count();
        $data['logs_all'] = \LogReader::includeRead()->get()->count();
        // return $data;
        return view('ZLL::dashboard', $data);
    }
}