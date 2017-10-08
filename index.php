<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="./style.css" rel="stylesheet" type="text/css">
</head>

<body>
<!-- Head[Start] -->
  <header>
  <h1><a class="navbar-brand" href="select.php">データ一覧</a></h1>
  </header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
   <fieldset>
    <legend>お気に入り本</legend>
     <label>書籍名：<input type="text" name="name"></label><br>
     <label>URL：<input type="text" name="url"></label><br>
     <label>コメント<textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
</form>
<!-- Main[End] -->
</body>
</html>
