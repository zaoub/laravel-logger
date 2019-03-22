<?php

namespace Zaoub\Laravel\App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use LogReader;

class LoggerAllController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $data['logs'] = LogReader::includeRead()->get();
        // return $data;
        return view('ZLL::all.index', $data);
    }

    public function show($id)
    {
        $data = [];
        $data['log'] = LogReader::includeRead()->find($id);
        // return $data;
        return view('ZLL::all.show', $data);
    }

    public function delete($id)
    {
        LogReader::includeRead()->find($id)->delete();
        return redirect()->route('zlogger.all.index');
    }
}