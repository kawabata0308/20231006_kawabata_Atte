<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
     <link rel="stylesheet" href="{{ asset('css/index02.css') }}" />
</head>
<body>
    <header class="header">
        <a class="header_logo" href="">Atte</a>
        <nav class="header_nav">
            <ul class="header_nav-list">
                <li class="header_nav_item"><a href="#">ホーム</a></li>
                <li class="header_nav_item"><a href="/index">日付一覧</a></li>
                <li class="header_nav_item"><a href="#">ログアウト</a></li>
            </ul>
        </nav>
    </header>
    <div class="btn">
      <button type="button" @click="moveDate(-1)">&lt;</button>
      日付
      <button class="button_second"@click="moveDate(1)">&gt;</button>
    </div>
    <table class="user">
      <tr class="user_list">
        <th class="user_list-item">名前</th>
        <th class="user_list-item">勤務開始</th>
        <th class="user_list-item">勤務終了</th>
        <th class="user_list-item">休憩時間</th>
        <th class="user_list-item">勤務時間</th>
      </tr>
    </table>
    <ol class="pagination">
      <li class="prev"><a href="#">&lt;</a></li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
       <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
         <li><a href="#">5</a></li>
         <li class="next"><a href="#">&gt;</a></li>
    </ol>
    <footer>Atte,inc.</footer>
</body>
</html>