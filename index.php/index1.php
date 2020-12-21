<?php
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
     <title>>Cトラベル | あなたの旅行をサポートします！</title>
     <meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Cトラベル | あなたの旅行をサポートします！">  
     <link rel="stylesheet" href="index.css">
</head>
 
<body>
<header>
     
     <div id="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
        <ul id="menu">
            <li><a href="../Login/html/login.html">ログイン</a></li>
            <li><a href="index.php/index1.php">ホーム</a></li>
            <li><a href="/Login/login.html">プラン作成</a></li>
            <li><a href="../Login/html/user_create.html">ユーザ設定</a></li>
        </ul></div>
       
  </div>
</header>
<div id="hero">
    <img src="image/heder.jpeg" alt=" hikouki" width="950" height="400">
    <!--<video src="video/yozora2.mp4" loop autoplay muted  ></video>-->
     <p>Cトラベル</p>
     
</div><!-- /#hero -->
<div class="kensaku">
<form action="index_search.php" method="GET">
キーワード入力<input type="text" name='image_id'>
<input type=SUBMIT value="表示">
</form>
</div>

<div id="wrapper">


<section id="projects">
     <h1>人気プラン</h1>
     <ul>
     <li><a href="image/ryokou1.jpg"><img src="image/ryokou1.jpg" width="200" height="130"></a></li>
     <li><a href="image/ryokou2.jpg"><img src="image/ryokou2.jpg" width="200" height="130"></a></li>
     <li><a href="image/ryokou3.jpg"><img src="image/ryokou3.jpg" width="200" height="130"></a></li>
     <li><a href="image/yakei.jpg"><img src="image/yakei.jpg" width="200" height="130"></a></li>
     <li><a href="image/yakei1.jpg"><img src="image/yakei1.jpg" width="200" height="130"></a></li>
     <li><a href="image/hokouki.png"><img src="image/hokouki.png" width="200" height="130"></a></li>
     
     </ul>
</section><!-- /#projects -->
 
<section id="about">
          <h1>今週のおすすめ</h1>
          <h2>みんなのが興味を持った場所</h2>
          
          <a href="image/hokouki.png"><img src="image/hokouki.png" width="150" height="100"></a>

               
         
     </section><!-- /#about -->
<footer>
     <p>
         <!--コピーライト-->
         Copyright (c) Ctravel All Rights Reserved. 無断転載禁止

     </p>
</footer>
</div>
<script src=".js"></script>
</body>
</html>