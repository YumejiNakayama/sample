@extends('layouts.helloapp')

@section('title','index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<p>ここが本文</p>
<ul>
    @each('components.item', $data, 'item', '')
</ul>

@include('components.message',['msg_title'=>'OK','msg_content'=>'サブビューです。'])
@endsection

@section('footer')
copyright 2017 tuyano
@endsection