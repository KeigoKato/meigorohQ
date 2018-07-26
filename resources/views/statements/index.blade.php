<!DOCTYPE html>

<html lang="ja">

@extends('layouts.master')

@section('title', 'indexページ')

@section('container')
<h1>Indexページ</h1>
<table>
    <tr>
        <th>title</th>
        <th>who</th>
        <th>statement</th>
    </tr>
    @foreach($items as $item)
    <tr>
        <td>{{$item->title}}</td>
        <td>{{$item->who}}</td>
        <td>{{$item->statement}}</td>
    </tr>
    @endforeach
</table>
@endsection



</html>