<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
</head>
<body>
    <div class="container">
        <div class="nav-header"><h1>{{ $title }}</h1></div>
    </div>
    <div class="container">
        {{Form::open(['url'=>'post', 'method'=>'post'])}}
        {{Form::label('title', '標題')}}<br>
        {{Form::text('title')}}<br>
        {{Form::label('content', '內容')}}<br>
        {{Form::textarea('content')}}<br>
        {{Form::submit('發表文章')}}
        {{Form::close()}}
        <a href="{{ URL::previous() }}" class = "btn btn-default">回上一頁</a>
    </div>
    <!-- 最新編譯和最佳化的 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- 選擇性佈景主題 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <!-- 最新編譯和最佳化的 JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>