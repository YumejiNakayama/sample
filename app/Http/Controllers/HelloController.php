<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data = ['one', 'two', 'three', 'four ', 'five', 'six'];
        // $data2 = ['data1' => $data];
        // var_dump($data2);
        return view('hello.index', ['data' => $data]);
    }

    public function post(Request $request)
    {
        $msg = $request->msg;
        // var_dump($msg);
        $data = [
            'msg' => $msg,
        ];
        return view('hello.index', $data);
    }
    //
}
