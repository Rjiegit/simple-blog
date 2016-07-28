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
    <div class = "container">
        <a href="post/create"><div class="btn btn-default">新增文章</div></a>
        @if (isset($posts))
            <ul class = "list-group">
            @foreach ($posts as $post)                
                <li class = "list-group-item">
                    <a href="post/{{ $post->id }}/edit" class = "btn btn-default">編輯</a>
                    <a href="post/{{ $post->id }}">{{ $post->title }}</a>
                </li>
            @endforeach
            </ul>
        @endif
    </div>


    <!-- 最新編譯和最佳化的 JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>