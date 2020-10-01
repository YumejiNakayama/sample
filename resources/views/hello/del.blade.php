@extends('layouts.helloapp')

@section('title','Delete')

@section('menubar')
@parent
削除ページ
@endsection

@section('content')
<table>
    <form action="/hello/del" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr>
            <th>name:</th>
            <td><input type="text" name="name" id="" value="{{$form->name}}"></td>
        </tr>
        <tr>
            <th>mail</th>
            <td><input type="text" name="mail" id="" value="{{$form->mail}}"></td>
        </tr>
        <tr>
            <th>age</th>
            <td><input type="text" name="age" id="" value="{{$form->age}}"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </form>

</table>
@endsection