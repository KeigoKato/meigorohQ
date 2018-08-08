@extends('layouts.master')
@section('title', 'indexページ')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron" style="padding: 48px 110px;">
                <h2 style="margin-bottom: 60px;">
                    {!! nl2br($item->statement) !!}
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
                @if(count($errors))
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">{{$error}}</div>
                @endforeach
                @endif
                @include('modals.reviewAddModal')
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel heading</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>レビュワー</th>
                            <th>スター</th>
                            <th>コメント</th>
                            <th>編集・削除</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reviews as $review)
                        <tr>
                            <td>名無し</td>
                            <td>{{$review->star}}</td>
                            <td>{{$review->comment}}</td>
                            <td>
                                <!-- @include('modals.masterModal') -->
                                <button type="button" class="btn" data-toggle="modal" data-target=".bs-example-modal-sm-{{$review->id}}">修正する</button>
                                <div class="modal fade bs-example-modal-sm-{{$review->id}}" tabindex="-1" role="dialog" aria-labelledby="mysmallmodallabel">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="padding:10px;">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">レビューの修正または削除</h4>
                                            </div>
                                            <div class="modal-body">

                                                <form class="form-horizontal" action="/reviews/update" method="post">
                                                    {{csrf_field()}}
                                                    <fieldset>
                                                        <div class="form-group">
                                                            <label for="select" class="col-lg-2 control-label">スター</label>
                                                            <div class="col-lg-10">
                                                                <select class="form-control" id="select" name="star">
                                                                    <option value="1" @php echo($review->star == 1 ? "selected" : "") @endphp >1 ★☆☆☆☆</option>
                                                                    <option value="2" @php echo($review->star == 2 ? "selected" : "") @endphp >2 ★★☆☆☆</option>
                                                                    <option value="3" @php echo($review->star == 3 ? "selected" : "") @endphp >3 ★★★☆☆</option>
                                                                    <option value="4" @php echo($review->star == 4 ? "selected" : "") @endphp >4 ★★★★☆</option>
                                                                    <option value="5" @php echo($review->star == 5 ? "selected" : "") @endphp >5 ★★★★★</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputComment" class="col-lg-2 control-label">コメント</label>
                                                            <div class="col-lg-10">
                                                                <input type="text" name="comment" class="form-control" id="inputComment" placeholder="コメント(10文字以内)" value="{{$review->comment}}">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="id" value="{{$review->id}}">
                                                            <input type="hidden" name="statement_id" value="{{$item->id}}">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">キャンセル</button>
                                                            <input type="submit" class="btn btn-primary" value="更新">
                                                        </div>
                                                    </fieldset>
                                                </form>
                                                <form class="form-horizontal" action="/reviews/delete" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="statement_id" value="{{$item->id}}">
                                                    <input type="hidden", name="id", value="{{$review->id}}">
                                                    <input type="submit" class="btn btn-danger" value="削除">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
