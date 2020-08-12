@extends('layouts.helloapp')

@section('title','index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<p>ここが本文</p>
<p>必要なだけ記述</p>

@endsection

@section('footer')
copyright 2017 tuyano
@endsection