@extends('layouts.master')
@section('title', 'indexページ')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    名語録一覧  （@php echo($total != 0 ? $total." 件中 ".$startCount." 〜 ".$endCount." を表示" : "検索結果0件")@endphp  @php echo(!empty($keyword) ? " : 検索文字列 : $keyword ）" : "）") @endphp
                </div>
                <div class="panel-body">
                    <p>
                        表のメニューをクリックすると、その順番にソートされます。<br>
                        行をクリックすると、その名語録のページにジャンプします。
                    </p>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-md-2 text-center"><a style="text-decoration: none;" href=@php echo(!empty($keyword)) ? "/statements/search?sort=title&order=".$order."&keyword=".$keyword."&page=1" : "/statements/index?sort=title&order=".$order @endphp>作品タイトル</a></th>
                            <th class="col-md-1 text-center"><a style="text-decoration: none;" href=@php echo(!empty($keyword)) ? "/statements/search?sort=who&order=".$order."&keyword=".$keyword."&page=1" : "/statements/index?sort=who&order=".$order @endphp>発言者</a></th>
                            <th class="col-md-6 text-center"><a style="text-decoration: none;" href=@php echo(!empty($keyword)) ? "/statements/search?sort=statement&order=".$order."&keyword=".$keyword."&page=1" : "/statements/index?sort=statement&order=".$order @endphp>名語録</a></th>
                            <th class="col-md-3 text-center"><a style="text-decoration: none;" href=@php echo(!empty($keyword)) ? "/statements/search?sort=created_at&order=".$order."&keyword=".$keyword."&page=1" : "/statements/index?sort=created_at&order=".$order @endphp>投稿日</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                        <tr>
                            <td class="text-center">{{$item->title}}</td>
                            <td class="text-center">{{$item->who}}</td>
                            <td>
                                <a href="/statements/show?id={{$item->id}}" style="text-decoration: none">
                                    {{$item->statement}}
                                </a>
                            </td>
                            <td class="text-center">{{$item->created_at->format('Y年m月d日 H時m分')}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="paginate-links" style="text-align: center;">
                {{--?page=piyoのクエリパラメータに&sort=hogeが連結される--}}
                @if (!empty($keyword))
                {{ $items->appends(['sort' => $sort, 'keyword' => $keyword])->links() }}
                @else
                {{ $items->appends(['sort' => $sort])->links() }}
                @endif
            </div>
        </div>
    </div>
</div>
@endsection