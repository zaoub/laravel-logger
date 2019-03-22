<?php

namespace Zaoub\Laravel\App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LoggerController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $data['logs'] = \LogReader::get();
        // return $data;
        return view('ZLL::index', $data);
    }

    public function indexRead()
    {
        $data = [];
        $data['logs'] = \LogReader::includeRead()->get();
        // return $data;
        return view('ZLL::index', $data);
    }

    public function show($id)
    {
        // return 5/0;
        $data = [];
        $data['log'] = \LogReader::find($id);
        // return $data;
        return view('ZLL::show', $data);
    }

    public function markread($id)
    {
        \LogReader::find($id)->markRead();
        return redirect()->route('zlogger.index');
    }

    public function delete($id)
    {
        \LogReader::includeRead()->find($id)->delete();
        return redirect()->route('zlogger.index');
    }
}