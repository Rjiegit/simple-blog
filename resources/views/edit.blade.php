<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <!-- 最新編譯和最佳化的 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- 選擇性佈景主題 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
</head>
<body>
    <div class="container">
        <div class="nav-header"><h1>{{ $title }}</h1></div>
    </div>
    <div class="container">
        {{Form::open(['url'=>'post/'.$post->id, 'method'=>'put'])}}
        {{Form::label('title', '標題')}}<br>
        {{Form::text('title', $post->title)}}<br>
        {{Form::label('content', '內容')}}<br>
        {{Form::textarea('content', $post->content)}}<br>
        {{Form::submit('儲存')}}
        {{Form::close()}}
        {{ Form::open(['url'=>'post/'.$post->id, 'method'=>'delete']) }}
            <button type="submit">刪除</button>
        {{ Form::close() }}

        <a href="{{ URL::previous() }}" class = "btn btn-default">回上一頁</a>
    </div>
    <!-- 最新編譯和最佳化的 JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>