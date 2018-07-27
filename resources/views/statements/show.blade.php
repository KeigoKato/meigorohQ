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
        </div>
    </div>
</div>


@endsection
