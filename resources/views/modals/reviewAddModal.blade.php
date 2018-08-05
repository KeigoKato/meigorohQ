@extends('modals.masterModal')

@section('modalButtonValue')
評価する
@endsection

@section('modalTitle')
評価せよ
@endsection

@section('modalContainer')

<div class="modal-body">
    <p>※ あとで修正または削除ができます</p>
    <form class="form-horizontal" action="/reviews/add" method="post">
        {{csrf_field()}}
        <fieldset>
            <div class="form-group">
                <label for="select" class="col-lg-2 control-label">スター</label>
                <div class="col-lg-10">
                    <select class="form-control" id="select" name="star">
                        <option value="1" @if(old('star') == "1") selected @endif>1 ★☆☆☆☆</option>
                        <option value="2" @if(old('star') == "2") selected @endif>2 ★★☆☆☆</option>
                        <option value="3" @if(old('star') == "3") selected @endif>3 ★★★☆☆</option>
                        <option value="4" @if(old('star') == "4") selected @endif>4 ★★★★☆</option>
                        <option value="5" @if(old('star') == "5") selected @endif>5 ★★★★★</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputComment" class="col-lg-2 control-label">コメント</label>
                <div class="col-lg-10">
                    <input type="text" name="comment" class="form-control" id="inputComment" placeholder="コメント(15文字以内)" value='{{old("comment")}}'>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">キャンセル</button>
                <input type="hidden" name="statement_id" value="{{$item->id}}">
                <input type="submit" class="btn btn-primary" value="完了" onclick="location.href='statements/create'">
            </div>
        </fieldset>
    </form>
</div>
@endsection