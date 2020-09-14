<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            ['name' => '山田たろう', 'mail' => 'taro@yamada'],
            ['name' => '田中はなこ', 'mail' => 'hanako@flower'],
            ['name' => '鈴木さちこ', 'mail' => 'sachiko@yamada'],
        ];
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
