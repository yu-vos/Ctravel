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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />

</head>
 
<body>
<header>
     
     <div id="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
        <ul id="menu">
            <li class="logged-out" style="display: none"><a class="modal-trigger signbutton" data-toggle="modal" data-target="modal-acmenu" href="../">ログイン</a></li>
          <li class="logged-in" style="display: none"><a class="modal-trigger signbutton" data-toggle="modal" data-target="modal-acmenu" href="#">ログアウト</a></li>
          <li><a href="index1.php">ホーム</a></li>
          <li class="logged-in" style="display: none"><a href="../plan_add/plan_add.php">プラン作成</a></li>
          <li class="logged-in" style="display: none"><a href="../Login/html/user_create.html">ユーザ設定</a></li>
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
キーワード入力<input type="text" name='title'>
<input type=SUBMIT value="表示">
</form>
</div>

<div id="wrapper">


<section id="projects">
     <h1>人気プラン</h1>
     <ul>
         
     <li> <?php try{
        $pdo = connectDB();
        $stmt = $pdo->prepare("SELECT * FROM images where image_id != '' and title != '' ORDER BY RAND() limit 1");
        $stmt->execute();
            $images = $stmt->fetchAll();
        } catch (PDOException $e) {
                echo $e->getMessage();
        }
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['image_id'] = $row['image_id'];
        $_SESSION['title'] = $row['title'];

             for($i = 0; $i < count($images); $i++): ?>
        <a href="index_search.php?title=<?=  $images[$i]['title']; ?> ">
        <img src="image.php?id=<?= $images[$i]['image_id']; ?>" width="200" height="130" class="mr-3"></a>
            <?php endfor; ?></li>
    <li> <?php try{
        $pdo = connectDB();
        $stmt = $pdo->prepare("SELECT * FROM images where image_id != '' and title != '' ORDER BY RAND() limit 1");
        $stmt->execute();
            $images = $stmt->fetchAll();
        } catch (PDOException $e) {
                echo $e->getMessage();
        }
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['image_id'] = $row['image_id'];
        $_SESSION['title'] = $row['title'];
        

            for($i = 0; $i < count($images); $i++): ?>
        <a href="index_search.php?title=<?=  $images[$i]['title']; ?> ">
        <img src="image.php?id=<?= $images[$i]['image_id']; ?>" width="200" height="130" class="mr-3"></a>
            <?php endfor; ?></li>
     <li> <?php try{
        $pdo = connectDB();
        $stmt = $pdo->prepare("SELECT * FROM images where image_id != '' and title != '' ORDER BY RAND() limit 1");
        $stmt->execute();
            $images = $stmt->fetchAll();
        } catch (PDOException $e) {
                echo $e->getMessage();
        }
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['image_id'] = $row['image_id'];
        $_SESSION['title'] = $row['title'];

            for($i = 0; $i < count($images); $i++): ?>
         <a href="index_search.php?title=<?=  $images[$i]['title']; ?> ">
             <img src="image.php?id=<?= $images[$i]['image_id']; ?>" width="200" height="130" class="mr-3"></a>
            <?php endfor; ?></li>
     <li> <?php try{
        $pdo = connectDB();
        $stmt = $pdo->prepare("SELECT * FROM images where image_id != '' and title != '' ORDER BY RAND() limit 1");
        $stmt->execute();
            $images = $stmt->fetchAll();
        } catch (PDOException $e) {
                echo $e->getMessage();
        }
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['image_id'] = $row['image_id'];
        $_SESSION['title'] = $row['title'];

            for($i = 0; $i < count($images); $i++): ?>
         <a href="index_search.php?title=<?=  $images[$i]['title']; ?> ">
             <img src="image.php?id=<?= $images[$i]['image_id']; ?>" width="200" height="130" class="mr-3"></a>
            <?php endfor; ?></li>
     <li> <?php try{
        $pdo = connectDB();
        $stmt = $pdo->prepare("SELECT * FROM images where image_id != '' and title != '' ORDER BY RAND() limit 1");
        $stmt->execute();
            $images = $stmt->fetchAll();
        } catch (PDOException $e) {
                echo $e->getMessage();
        }
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['image_id'] = $row['image_id'];
        $_SESSION['title'] = $row['title'];

            for($i = 0; $i < count($images); $i++): ?>
         <a href="index_search.php?title=<?=  $images[$i]['title']; ?> ">
             <img src="image.php?id=<?= $images[$i]['image_id']; ?>" width="200" height="130" class="mr-3"></a>
            <?php endfor; ?></li>
     <li> <?php try{
        $pdo = connectDB();
        $stmt = $pdo->prepare("SELECT * FROM images where image_id != '' and title != '' ORDER BY RAND() limit 1");
        $stmt->execute();
            $images = $stmt->fetchAll();
        } catch (PDOException $e) {
                echo $e->getMessage();
        }
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['image_id'] = $row['image_id'];
        $_SESSION['title'] = $row['title'];

            for($i = 0; $i < count($images); $i++): ?>
         <a href="index_search.php?title=<?=  $images[$i]['title']; ?> ">
             <img src="image.php?id=<?= $images[$i]['image_id']; ?>" width="200" height="130" class="mr-3"></a>
            <?php endfor; ?></li>
     
     </ul>
</section><!-- /#projects -->
 
<section id="about">
          <h1>今週のおすすめ</h1>
          <h2>みんなのが興味を持った場所</h2>
          
          <a href="image/hokouki.png"><img src="image/hokouki.png" width="150" height="100"></a>
    <a href="image/hokouki.png"><img src="image/hokouki.png" width="150" height="100"></a>

               
         
     </section><!-- /#about -->
<footer>
     <p>
         <!--コピーライト-->
         Copyright (c) Ctravel All Rights Reserved. 無断転載禁止

     </p>
</footer>
</div>
<div class="modal" id="modal-acmenu" tabindex="-1">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">アカウント</h4>
      </div>
      <div class="modal-body">
        <!-- NAVBAR -->
        <nav class="z-depth-0 grey lighten-4">
          <div class="nav-wrapper container">
            <ul id="nav-mobile" class="hide-on-med-and-down">
              <li class="logged-in" style="display: none">
                <a href="#" class="grey-text modal-trigger" data-target="modal-account">アカウント</a>
              </li>
              <li class="logged-in" style="display: none">
                <a href="#" class="grey-text" id="logout">ログアウト</a>
              </li>
              <li class="logged-out" style="display: none">
                <a href="#" class="grey-text modal-trigger" data-target="modal-login">ログイン</a>
              </li>
              <li class="logged-out" style="display: none">
                <a href="#" class="grey-text modal-trigger" data-target="modal-signup">アカウント登録</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="modal-footer"></div>
    </div>
  </div>

  <!-- SIGN UP MODAL -->
  <div id="modal-signup" class="modal">
    <div class="modal-content">
      <h4>サインアップ</h4>
      <br />
      <form id="signup-form">
        <div class="input-field">
          <input type="email" id="signup-email" required />
          <label for="signup-email">Eメール アドレス</label>
        </div>
        <div class="input-field">
          <input type="password" id="signup-password" required />
          <label for="signup-password">パスワードの入力</label>
        </div>
        <div class="input-field">
          <input type="text" id="signup-name" required />
          <label for="signup-name">あなたの名前</label>
        </div>
        <button class="btn blue darken-2 z-depth-0">Sign up</button>
        <p class="error pink-text center-align"></p>
      </form>
    </div>
  </div>

  <!-- LOGIN MODAL -->
  <div id="modal-login" class="modal">
    <div class="modal-content">
      <h4>ログイン</h4>
      <br />
      <form id="login-form">
        <div class="input-field">
          <input type="email" id="login-email" required />
          <label for="login-email">あなたのEメール</label>
        </div>
        <div class="input-field">
          <input type="password" id="login-password" required />
          <label for="login-password">あなたのパスワード</label>
        </div>
        <button class="btn blue darken-2 z-depth-0">Login</button>
        <p class="error pink-text center-align"></p>
      </form>
    </div>
  </div>

  <!-- ACCOUNT MODAL -->
  <div id="modal-account" class="modal">
    <div class="modal-content center-align">
      <h4>アカウント情報</h4>
      <br />
      <div class="account-details"></div>
      <div class="account-extras"></div>
    </div>
  </div>

  <!-- The core Firebase JS SDK is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-app.js"></script>
  <!-- TODO: Add SDKs for Firebase products that you want to use https://firebase.google.com/docs/web/setup#available-libraries -->
  <script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-analytics.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-firestore.js"></script>

  <script>
    // Initialize Firebase
    var config = {
      apiKey: "AIzaSyC9KcYrMwFoR7VASRqKzEVz-Gb3y3H4hoc",
      authDomain: "ctravel-ss2h.firebaseapp.com",
      databaseURL: "https://ctravel-ss2h.firebaseio.com",
      projectId: "ctravel-ss2h",
      appId: "1:586418241988:web:1fec8ae8a0347ed6c12491",
    };
    firebase.initializeApp(config);

    // make auth and firestore references
    const auth = firebase.auth();
    const db = firebase.firestore();
  </script>

</body>

<!--    <script src="index.js"></script>-->
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="../Login/auth.js"></script>
<script src="../Login/login.js"></script>
</html>