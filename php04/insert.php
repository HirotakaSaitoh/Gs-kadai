<?php
//1. POSTデータ取得
// $name   = $_POST["name"];
// $email  = $_POST["email"];
// $naiyou = $_POST["naiyou"];

$bookname   = $_POST["bookname"];
$category   = $_POST["category"];
$bookurl    = $_POST["bookurl"];
$comment    = $_POST["comment"];

//2. DB接続します
include("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
// $stmt = $pdo->prepare("INSERT INTO gs_an_table(name,email,naiyou,indate)VALUES(:name,:email,:naiyou,sysdate())");
// $stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':email', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(bookname,category,bookurl,comment,indate)VALUES(:bookname,:category,:bookurl,:comment,sysdate())");
$stmt->bindValue(':bookname', $bookname, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':category', $category, PDO::PARAM_STR);
$stmt->bindValue(':bookurl',  $bookurl,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment',  $comment,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error();
}else{
  redirect("index.php");
}
?>
