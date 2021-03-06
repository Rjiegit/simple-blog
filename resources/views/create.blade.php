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
        {{Form::open(['url'=>'post', 'method'=>'post'])}}
        {{Form::label('標題')}}<br>
        {{Form::text('title','', ['class' =>'form-control'])}}<br>
        {{Form::label('content', '內容')}}<br>
        {{Form::textarea('content', '', ['class' =>'form-control'])}}<br>
        {{Form::submit('發表文章',['class' =>'btn btn-default'])}}
        <a href="{{ URL::previous() }}" class = "btn btn-default">回上一頁</a>
        {{Form::close()}}

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
    </div>

    <!-- 最新編譯和最佳化的 JavaScript -->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>-->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>
</body>
</html>