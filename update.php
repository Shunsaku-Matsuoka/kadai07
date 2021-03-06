<?php
//1.POSTでParamを取得
$id     = $_POST["id"];
$name   = $_POST["name"];
$url  = $_POST["url"];
$comment = $_POST["comment"];

//2.DB接続など
try {
  $pdo = new PDO('mysql:dbname=gs_db_40;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//3.UPDATE gs_an_table SET ....; で更新(bindValue)
//　基本的にinsert.phpの処理の流れです。
$stmt = $pdo->prepare("UPDATE gs_bm_table SET name=:name,url=:url,comment=:comment WHERE id=:id");
$stmt->bindValue(':name', $name);
$stmt->bindValue(':url', $url);
$stmt->bindValue(':comment', $comment);
$stmt->bindValue(':id', $id);
$status = $stmt->execute();

if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: select.php");
  exit;
}

?>
