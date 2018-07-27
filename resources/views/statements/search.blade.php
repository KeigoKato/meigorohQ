@extends('layouts.master')
@section('title', 'indexページ')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">名語録一覧 （検索文字列 : {{$keyword}}）</div>
                <div class="panel-body">
                    <p>
                        表のメニューをクリックすると、その順番にソートされます。<br>
                        行をクリックすると、その名語録のページにジャンプします。
                    </p>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="col-md-3 text-center">作品タイトル</th>
                            <th class="col-md-2 text-center">発言者</th>
                            <th class="col-md-7 text-center">名語録</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($results as $result)
                        <tr>
                            <th scope="row" class="text-center">{{$loop->index + 1}}</th>
                            <td class="text-center">{{$result->title}}</td>
                            <td class="text-center">{{$result->who}}</td>
                            <td>{{$result->statement}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
