<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
     <link rel="stylesheet" href="{{ asset('css/attendance1.css') }}" />
</head>
<body>
    <header class="header">
        <a class="header_logo" href="">Atte</a>
        <nav class="header_nav">
            <ul class="header_nav-list">
                <li class="header_nav_item"><a href="">ホーム</a></li>
                <li class="header_nav_item"><a href="/index">日付一覧</a></li>
                <li class="header_nav_item"><a href="/login">ログアウト</a></li>
            </ul>
        </nav>
    </header>
     <div class="time">
        @if($user)
        <h2><?php $user = Auth::user(); ?>{{ $user->name }}</h2>
    <div class="time_btn">
        <form class="form" action="/attendance" method="post">
            @csrf
        <button class="start_btn">勤務開始</button>・
        <button class="end_btn">勤務終了</button>
    </div>
    <div class="break_btn">
        <button class="break_btn-start">休憩開始</button>
        <button class="break_btn-end">休憩終了</button>
    </div>n
    </div>
</body>
</html>
