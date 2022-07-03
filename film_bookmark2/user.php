<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/sample.css">
  <style>div{padding: 10px;font-size:16px;}</style>

</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="menu.php">戻る</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="user_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend></legend>
     <label>ユーザー名：<input type="text" name="name"></label><br>
     <label>ユーザーID：<input type="text" name="lid"></label><br>
     <label>パスワード：<input type="text" name="pw"></label><br>
     <label>管理者権限：<input type="radio" name="kanri_flg" value="1">有り<input type="radio" name="pw" value="0">無し</label><br>
     <label>アクティブ：<input type="radio" name="life_flg" value="0">はい<input type="radio" name="pw" value="1">いいえ</label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->



</body>
</html>