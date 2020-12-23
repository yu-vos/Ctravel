<?php
require_once 'functions.php';

$pdo = connectDB();
// 画像を取得
$sql = 'SELECT * FROM images WHERE image_id = 26';
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
            <input id="address" type="hidden" value="<?php foreach ($images as $row) {
                                                            // データベースのフィールド名で出力
                                                            echo $row['plan1'];
                                                        } ?>">
        <?php 
            foreach ($images as $row) {
                // データベースのフィールド名で出力
                echo $row['plan1'];
            }
        ?></div>
        <div style="position:absolute; top:200px; left:700px;">
            <input id="address2" type="hidden" value="<?php foreach ($images as $row) {
                                                            // データベースのフィールド名で出力
                                                            echo $row['plan2'];
                                                        } ?>">
        <?php 
            foreach ($images as $row) {
                // データベースのフィールド名で出力
                echo $row['plan2'];
            }
        ?></div>
        <div style="position:absolute; top:280px; left:700px;">
            <input id="address3" type="hidden" value="<?php foreach ($images as $row) {
                                                            // データベースのフィールド名で出力
                                                            echo $row['plan3'];
                                                        } ?>">
        <?php 
            foreach ($images as $row) {
                // データベースのフィールド名で出力
                echo $row['plan3'];
            }
        ?></div>
        <div style="position:absolute; top:360px; left:700px;">
            <input id="address4" type="hidden" value="<?php foreach ($images as $row) {
                                                            // データベースのフィールド名で出力
                                                            echo $row['plan4'];
                                                        } ?>">
        <?php 
            foreach ($images as $row) {
                // データベースのフィールド名で出力
                echo $row['plan4'];
            }
        ?></div>
        <div style="position:absolute; top:440px; left:700px;">
            <input id="address5" type="hidden" value="<?php foreach ($images as $row) {
                                                            // データベースのフィールド名で出力
                                                            echo $row['plan5'];
                                                        } ?>">
        <?php 
            foreach ($images as $row) {
                // データベースのフィールド名で出力
                echo $row['plan5'];
            }
        ?></div>
        <div style="position:absolute; top:520px; left:700px;">
            <input id="address6" type="hidden" value="<?php foreach ($images as $row) {
                                                            // データベースのフィールド名で出力
                                                            echo $row['plan6'];
                                                        } ?>">
        <?php 
            foreach ($images as $row) {
                // データベースのフィールド名で出力
                echo $row['plan6'];
            }
        ?></div>
        <div style="position:absolute; top:600px; left:700px;">
            <input id="address7" type="hidden" value="<?php foreach ($images as $row) {
                                                            // データベースのフィールド名で出力
                                                            echo $row['plan7'];
                                                        } ?>">
        <?php 
            foreach ($images as $row) {
                // データベースのフィールド名で出力
                echo $row['plan7'];
            }
        ?></div>
        <div style="position:absolute; top:700px; right:50px;" rows="30" cols="75">
            <?php 
                foreach ($images as $row) {
                    // データベースのフィールド名で出力
                    echo $row['plan_remarks'];
                }
            ?>
            </div>
        <div style="position:absolute; top:250px; left:50px;" id="preview">
            <?php for($i = 0; $i < count($images); $i++): ?>
                <img src="image.php?id=<?= $images[$i]['image_id']; ?>" width="100px" height="auto" class="mr-3">
        <?php endfor; ?></div>
        <div style="position:absolute; top:700px; left:50px;" id="map"></div>
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
    <script>
          function codeAddress(){
                geocoder = new google.maps.Geocoder();

                inputAddress = document.getElementById('address').value;

              geocoder.geocode({ 'address': inputAddress}, function(results, status){
                if (status == 'OK') {
                  map.setCenter(results[0].geometry.location);
                  marker = new google.maps.Marker({
                    position: results[0].geometry.location,
                    map: map,
                  });
                } else {
                }
              });
            }
            setTimeout("codeAddress()", 100);
            function codeAddress1(){
                geocoder = new google.maps.Geocoder();

                inputAddress2 = document.getElementById('address2').value;

                geocoder.geocode({ 'address': inputAddress2}, function(results, status){
                if (status == 'OK') {
                  marker1 = new google.maps.Marker({
                    position: results[0].geometry.location,
                    map: map,
                  });
                } else {
                }
              });
            }
            setTimeout("codeAddress1()", 200);
            function codeAddress2(){
                geocoder = new google.maps.Geocoder();

                inputAddress3 = document.getElementById('address3').value;

                geocoder.geocode({ 'address': inputAddress3}, function(results, status){
                    if (status == 'OK') {
                        marker2 = new google.maps.Marker({
                        position: results[0].geometry.location,
                        map: map,
                        });
                    } else {
                    }
                });
            }
            setTimeout("codeAddress2()", 300);
            function codeAddress3(){
                geocoder = new google.maps.Geocoder();

                inputAddress4 = document.getElementById('address4').value;

                geocoder.geocode({ 'address': inputAddress4}, function(results, status){
                if (status == 'OK') {
                  marker3 = new google.maps.Marker({
                    position: results[0].geometry.location,
                    map: map,
                  });
                } else {
                }
              });
            }
            setTimeout("codeAddress3()", 400);
            function codeAddress4(){
                geocoder = new google.maps.Geocoder();

                inputAddress5 = document.getElementById('address5').value;

                geocoder.geocode({ 'address': inputAddress5}, function(results, status){
                if (status == 'OK') {
                  marker4 = new google.maps.Marker({
                    position: results[0].geometry.location,
                    map: map,
                  });
                } else {
                }
              });
            }
            setTimeout("codeAddress4()", 500);
            function codeAddress5(){
                geocoder = new google.maps.Geocoder();

                inputAddress6 = document.getElementById('address6').value;

                geocoder.geocode({ 'address': inputAddress6}, function(results, status){
                if (status == 'OK') {
                  marker5 = new google.maps.Marker({
                    position: results[0].geometry.location,
                    map: map,
                  });
                } else {
                }
              });
            }
            setTimeout("codeAddress5()", 600);
            function codeAddress6(){
                geocoder = new google.maps.Geocoder();

                inputAddress7 = document.getElementById('address7').value;

                geocoder.geocode({ 'address': inputAddress7}, function(results, status){
                if (status == 'OK') {
                  marker6 = new google.maps.Marker({
                    position: results[0].geometry.location,
                    map: map,
                  });
                } else {
                }
              });
            }
            setTimeout("codeAddress6()", 700);
    </script>
    <script src="map1.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt8VOq7z8BwfdOaghYgQ7_WffuyYk-yxk&callback=initMap" async defer></script>
</html>