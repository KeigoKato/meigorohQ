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
                            <button type="submit" onclick="location.href='statements/create'" class="btn btn-primary">投稿</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>


@endsection
