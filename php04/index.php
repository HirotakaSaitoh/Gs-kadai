<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ブックマーク登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="insert.php">
  <div class="jumbotron">
   <fieldset>
   <legend>ブックマーク</legend>
     <label>書籍名：<input type="text" name="bookname"></label><br>
     <div class="category">カテゴリー
          <!-- <select id="category" name="category"> -->
          <select name="category">  
            <option value="文学・評論">文学・評論</option>
            <option value="ノンフィクション">ノンフィクション</option>
            <option value="ビジネス・経済">ビジネス・経済</option>
            <option value="歴史・地理">歴史・地理</option>
            <option value="芸能・エンターテイメント">芸能・エンターテイメント</option>
            <option value="アート・建築・デザイン">アート・建築・デザイン</option>
            <option value="人文・思想・宗教">人文・思想・宗教</option>
            <option value="暮らし・健康・料理">暮らし・健康・料理</option>
            <option value="サイエンス・テクノロジー">サイエンス・テクノロジー</option>
            <option value="趣味・実用">趣味・実用</option>
            <option value="教育・自己啓発">教育・自己啓発</option>
            <option value="スポーツ・アウトドア">スポーツ・アウトドア</option>
            <option value="辞典・ことば">辞典・ことば</option>
            <option value="音楽">音楽</option>
            <option value="旅行">旅行</option>
            <option value="絵本">絵本</option>
            <option value="コミック">コミック</option>
          </select>
        </div><br>
     <!-- <label>カテゴリー：<input type="text" category ="category"></label><br> -->
     <label>書籍URL：<input type="text" name="bookurl"></label><br>
     <label>コメント<br><textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    <!-- <legend>フリーアンケート</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>Email：<input type="text" name="email"></label><br>
     <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信"> -->
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
