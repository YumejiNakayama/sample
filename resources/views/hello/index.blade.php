@extends('layouts.helloapp')

@section('title','index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<p>{{$msg}}</p>
@if (count($errors)>0)
<p>入力に問題があります。再入力してください。</p>
@endif
<table>
    <form action="/hello" method="post">
        @if ($errors->has('name'))
        <tr class="error">
            <th>ERROR</th>
            <td>{{$errors->first('name')}}</td>
        </tr>
        @endif
        <tr>
            <th>name:</th>
            <td><input type="text" name="name" id="" value="{{old('name')}}"></td>
        </tr>
        @if ($errors->has('mail'))
        <tr class="error">
            <th>ERROR</th>
            <td>{{$errors->first('mail')}}</td>
        </tr>
        @endif
        <tr>
            <th>mail:</th>
            <td><input type="text" name="mail" id="" value="{{old('mail')}}"></td>
        </tr>
        @if ($errors->has('age'))
        <tr class="error">
            <th>ERROR</th>
            <td>{{$errors->first('age')}}</td>
        </tr>
        @endif
        <tr>
            <th>age:</th>
            <td><input type="text" name="age" id="" value="{{old('age')}}"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </form>
</table>
@endsection

@section('footer')
copyright 2017 tuyano
@endsection