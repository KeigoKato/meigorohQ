@extends('layouts.master')
@section('title', '語録を投稿')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form class="form-horizontal" method="post">
                {{csrf_field()}}
                <fieldset>
                    <legend>語録を投稿</legend>
                    <div class="form-group">
                        <label for="inputTitle" class="col-lg-2 control-label">作品タイトル</label>
                        <div class="col-lg-10">
                            <input type="text" name="title" class="form-control" id="inputTitle" placeholder="作品タイトル">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputWho" class="col-lg-2 control-label">誰の言葉？</label>
                        <div class="col-lg-10">
                            <input type="text" name="who" class="form-control" id="inputWho" placeholder="誰の言葉？">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textStatement" class="col-lg-2 control-label">名語録</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name="statement" rows="3" id="textStatement"></textarea>
                            <span class="help-block">30文字以内で入力してください。</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" onclick="location.href='/statements/index'" class="btn btn-default">キャンセル</button>
<<<<<<< HEAD
                            <button type="submit" onclick="location.href='statements/create'" class="btn btn-primary">投稿</button>
=======
                            <!-- <button type="submit" onclick="location.href='statements/create'" class="btn btn-primary">投稿</button> -->

                            <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-sm">投稿する</button>
                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                <div class="modal-dialog">
                                    <div class="modal-content" style="padding:10px;">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">投稿の前の注意</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>投稿した語録は編集や削除ができません。</p>
                                            <p>間違いがないかもう一度確認してください。</p>
                                            <p>ヒント↓</p>
                                            <p>・すでに投稿された作品タイトル、人物名、語録がないか。</p>
                                            <p>・人物名はフルネームか。</p>
                                            <p>・誤字がないか。</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">キャンセル</button>
                                            <button type="submit" onclick="location.href='statements/create'" class="btn btn-primary">投稿</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

>>>>>>> f/008
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>


@endsection
