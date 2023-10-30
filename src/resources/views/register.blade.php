<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
     <link rel="stylesheet" href="{{ asset('css/register01.css') }}" />
</head>
<body><div class="account_text">
    <h2>会員登録</h2>
    </div>
    <form class="form" method='POST' action="{{route('register')}}">
    @csrf
    <div class="account_box">
    <input type="text" name="account_name" value="{{ old('account_name') }}" placeholder="名前">
    <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
    </div>
    <input type="text" name="account_email" value="{{ old('account_email') }}"placeholder="メールアドレス">
    <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
    </div>
    <input type="text" name="account_password" value="{{ old('account_password') }}" placeholder="パスワード">
    <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
    </div>
    <input type="text" name="account_password-confirmation" value="{{ old('account_password-confirmation') }}" placeholder="確認用パスワード">
    <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
    </div>
    <button class="account_blue">会員登録
        </button>
    <div class="account_box-sub">アカウントをお持ちの方はこちらから</div>
       <a class="account_blue" href="/login">ログイン</a>
    </div>
    </form>

</body>
</html>