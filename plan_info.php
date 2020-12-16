<?php
require_once 'functions.php';

$pdo = connectDB();
// 画像を取得
$sql = 'SELECT * FROM images WHERE image_id = 20';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$images = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cトラベル</title>
        <h1>Cトラベル</h1>
    </head>
    <body>
        <div style="position:absolute; top:120px; left:50px;">
        <?php 
            foreach ($images as $row) {
                // データベースのフィールド名で出力
                echo $row['title'];
            }
        ?></div>
        <div style="position:absolute; top:120px; left:700px;">
        <?php 
            foreach ($images as $row) {
                // データベースのフィールド名で出力
                echo $row['plan1'];
            }
        ?></div>
        <div style="position:absolute; top:200px; left:700px;">
        <?php 
            foreach ($images as $row) {
                // データベースのフィールド名で出力
                echo $row['plan2'];
            }
        ?></div>
        <div style="position:absolute; top:280px; left:700px;">
        <?php 
            foreach ($images as $row) {
                // データベースのフィールド名で出力
                echo $row['plan3'];
            }
        ?></div>
        <div style="position:absolute; top:360px; left:700px;">
        <?php 
            foreach ($images as $row) {
                // データベースのフィールド名で出力
                echo $row['plan4'];
            }
        ?></div>
        <div style="position:absolute; top:440px; left:700px;">
        <?php 
            foreach ($images as $row) {
                // データベースのフィールド名で出力
                echo $row['plan5'];
            }
        ?></div>
        <div style="position:absolute; top:520px; left:700px;">
        <?php 
            foreach ($images as $row) {
                // データベースのフィールド名で出力
                echo $row['plan6'];
            }
        ?></div>
        <div style="position:absolute; top:600px; left:700px;">
        <?php 
            foreach ($images as $row) {
                // データベースのフィールド名で出力
                echo $row['plan7'];
            }
        ?></div>
    <style>
        h1 {
            font-weight: normal;
            padding-bottom: 10px;
            text-align: center;
            position: relative;
            margin: 0 0 30px 0;
            letter-spacing: 5px;
            position: relative;
        }

        html {
            background-color: #f0f8ff;
            overflow: hidden scroll;
        }
        body {
            background-color: #fff;
            padding: 30px 30px 30px;
            height: 1100px;
            max-width: 1000px;
            margin: 20px auto;
            box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.18);
            border-radius: 3px;
            position: relative;
        }
        .title {
            margin-left: 70px;
        }
        #preview img {
          float: left;
          width: 400px;
          height:400px;
          border: solid 1px silver;
        }
        #map{
          height: 400px;
          width: 400px;
            /* 下の1文を追加 */
          background-color: red;
        }
    </style>
    </body>
<!--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt8VOq7z8BwfdOaghYgQ7_WffuyYk-yxk&callback=initMap" async defer></script>-->
</html>