<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
     <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
     <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>
<body>
    <div class="text">
        <h2>ログイン</h2>
    </div>
    <form class="form" action="/attendance" method="post">
        @csrf
    <div class="text_box">
        <input type="text" name="email" placeholder="メールアドレス"
        value="">
        <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
        <input type="text" name="password" placeholder="パスワード"
        value="">
        <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
        <button onclick="location.href='/attendance'" class="blue" >ログイン
        </button>
        <div class="text_box-sub">アカウントをお持ちでない方はこちらから</div>
        <a class="blue" href="/register">会員登録</a>
    </div>
</body>
</html>
