@extends('layouts.master')
@section('title', 'indexページ')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron" style="padding: 48px 110px;">
                <h2 style="margin-bottom: 60px;">
                    {{$item->statement}}
                </h2>
                <h4 style="text-align: right;">
                    {{$item->title}} : {{$item->who}}
                </h4>
                <h6 style="text-align: right;">
                    スター合計 : {{$num_star}}
                </h6>
                <h6 style="text-align: right;">
                    レビュー合計: {{$num_comment}}
                </h6>
                <!-- <p>
                    <a href="#" class="btn btn-primary btn-lg" role="button">Learn more</a>
                </p> -->




                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bs-example-modal-sm">評価する</button>
                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                    <div class="modal-dialog">
                        <div class="modal-content" style="padding:10px;">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">語録の評価</h4>
                            </div>
                            <div class="modal-body">

                                <p>※ あとで修正または削除ができます</p>

                                <form class="form-horizontal" action="/reviews/add" method="post">
                                    {{csrf_field()}}
                                    <fieldset>
                                        <div class="form-group">
                                            <label for="select" class="col-lg-2 control-label">スター</label>
                                            <div class="col-lg-10">
                                                <select class="form-control" id="select" name="star">
                                                    <option value="1">1 ★☆☆☆☆</option>
                                                    <option value="2">2 ★★☆☆☆</option>
                                                    <option value="3">3 ★★★☆☆</option>
                                                    <option value="4">4 ★★★★☆</option>
                                                    <option value="5">5 ★★★★★</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputComment" class="col-lg-2 control-label">コメント</label>
                                            <div class="col-lg-10">
                                                <input type="text" name="comment" class="form-control" id="inputComment" placeholder="コメント(10文字以内)">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">キャンセル</button>
                                            <input type="hidden" name="statement_id" value="{{$item->id}}">
                                            <input type="submit" class="btn btn-primary" value="完了">
                                        </div>
                                    </fieldset>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>






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
