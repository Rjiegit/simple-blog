<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <!-- 最新編譯和最佳化的 CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- 選擇性佈景主題 -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="navbar-brand">{{ $title }}</div>
            </div>
        </div>
    </nav>
	<div class="container">
    @if (isset($post))
        <h1>{{ $post->title }}</h1>
        <hr>
        {!! $post->content !!}        
        <hr>
    @endif
    <a href="{{ URL::previous() }}" class = "btn btn-default">回上一頁</a>
    </div>

    <!-- 最新編譯和最佳化的 JavaScript -->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>-->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>