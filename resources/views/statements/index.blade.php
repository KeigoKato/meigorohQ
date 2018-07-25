<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Indexページ</title>
</head>
<body>
    <h1>Indexページ</h1>
    <table>
        <tr>
            <th>title</th>
            <th>who</th>
            <th>statement</th>
        </tr>
        @foreach($params as $param)
        <tr>
            <td>{{$param->title}}</td>
            <td>{{$param->who}}</td>
            <td>{{$param->statement}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>