@extends('modals.masterModal')

@section('modalButtonValue')
投稿する
@endsection

@section('modalTitle')
新規投稿せよ
@endsection

@section('modalContainer')
<p>投稿した語録は編集や削除ができません。</p>
<p>間違いがないかもう一度確認してください。</p>
<p>ヒント↓</p>
<p>・すでに投稿された作品タイトル、人物名、語録がないか。</p>
<p>・人物名はフルネームか。</p>
<p>・誤字がないか。</p>
<button type="button" class="btn btn-default" data-dismiss="modal">キャンセル</button>
<button type="submit" onclick="location.href='statements/create'" class="btn btn-primary">投稿</button>
@endsection