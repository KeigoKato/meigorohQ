@extends('modals.masterModal')

@section('modalButtonValue')
編集・削除
@endsection

@section('modalTitle')
編集または削除を行います
@endsection

@section('modalContainer')

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
                <label for="inputcomment" class="col-lg-2 control-label">コメント</label>
                <div class="col-lg-10">
                    <input type="text" name="comment" class="form-control" id="inputcomment" placeholder="コメント(10文字以内)" value="{{$review->comment}}">
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
@endsection