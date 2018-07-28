@extends('layouts.master')
@section('title', 'indexページ')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron" style="padding: 48px 110px;">
                <h2 style="margin-bottom: 60px;">
                    {{$item->statement}}
                </h2>
                <p style="text-align: right;">
                    {{$item->title}} : {{$item->who}}
                </p>
                <p>
                    <a href="#" class="btn btn-primary btn-lg" role="button">Learn more</a>
                </p>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Panel heading</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>レビュワー</th>
                            <th>スター</th>
                            <th>コメント</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($item->reviews as $review)
                        <tr>
                            <td>名無し</td>
                            <td>{{$review->star}}</td>
                            <td>{{$review->comment}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
