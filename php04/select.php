<?php
include("funcs.php");
session_start();
sschk();
$pdo = db_conn();


//２．データ登録SQL作成
//$stmt = $pdo->prepare("SELECT * FROM gs_an_table");
//$status = $stmt->execute();
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$date = $pdo->prepare("SELECT category FROM gs_bm_table");
$status = $stmt->execute();
$category = $date->execute();

//３．データ表示
$view="";
if($status==false) {
  sql_error();
}else{
  while( $r = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view .= '<p>';
    //$view .= '<a href="detail.php?id='.$r["id"].'">';
    //$view .= $r["id"]."|".$r["name"]."|".$r["email"];
    $view .='<a href="detail.php?id='.$r["id"].'">';     //PHPとHTMLの文字列をくっつけることが多い
    $view .= $r["id"]."| ".$r["bookname"]."| ".$r["category"]."| ".$r["bookurl"]."| ".$r["comment"];
    $view .= '</a>';
    $view .= "　";
    if($_SESSION["kanri_flg"]=="1"){
      $view .='<a class="btn btn-danger" href="delete.php?id='.$r["id"].'">';
      $view .= '[<i class = "glyphicon glyphicon-trash"></i>削除]';  // Bootstrap css でアイコンが使える
      //$view .= '<a class="btn btn-danger" href="delete.php?id='.$r["id"].'">';
      //$view .= '[<i class="glyphicon glyphicon-remove"></i>削除]';
      $view .= '</a>';
    }
    $view .= '</p>';
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ブックマーク表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <?=$_SESSION["name"]?>
      <div>さん、こんにちは。</div><br>
      <a class="navbar-brand" href="index.php">ブックマーク登録</a>
      <a class="navbar-brand" href="logout.php">ログアウト</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->

</body>
</html>
