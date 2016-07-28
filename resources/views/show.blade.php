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
    @if (isset($post))
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
    @endif
    <a href="{{ URL::previous() }}" class = "btn btn-default">回上一頁</a>
    </div>

    <!-- 最新編譯和最佳化的 JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>