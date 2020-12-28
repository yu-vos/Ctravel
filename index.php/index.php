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
     <link rel="manifest" href="manifest.json">
    
<body>
<header>
     
     <div id="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
        <ul id="menu">
            <li ><a  href="../Login/html/login.html">ログイン</a></li>
          <li><a href="index.php">ホーム</a></li>
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


<script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-app.js"></script>
  <!-- TODO: Add SDKs for Firebase products that you want to use https://firebase.google.com/docs/web/setup#available-libraries -->
  <script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-analytics.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-firestore.js"></script>




<script>
    <!-- service workerの登録関係 -->
    if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('service_worker.js').then(function(registration) {
        console.log('ServiceWorker registration successful with scope: ', registration.scope);
    }).catch(function(err) {
        console.log('ServiceWorker registration failed: ', err);
    });
    }
   

</body>

<!--    <script src="index.js"></script>-->
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="../Login/js/firebaseauth.js"></script>
<script src="../Login/js/login.js"></script>
</html>