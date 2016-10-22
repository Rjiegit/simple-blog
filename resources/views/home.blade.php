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
    <div class = "container">
        <p class = "text-right"><a href="post/create" class="btn btn-default">新增</a></p>
        @if (isset($posts))
            <table class = "table table-striped table-hover">
                <thead>
                    <tr>
                        <th>名稱</th>
                    </tr>
                </thead>
            @foreach ($posts as $post)                
                <tr>
                    <td width="90%"><a href="post/{{ $post->id }}" class="text-left">{{ $post->title }}</a></td>
                    <td width="5%"><a href="post/{{ $post->id }}/edit" class = "btn btn-default">編輯</a></td>
                    <td width="5%">                    
                    {{ Form::open(['url'=>'post/'.$post->id, 'method'=>'delete']) }}                    
                         {{ Form::submit('刪除', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </table>
            {{ $posts->links() }}
        @endif
    </div>


    <!-- 最新編譯和最佳化的 JavaScript -->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>-->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>