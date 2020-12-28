<?php
require_once 'functions.php';

$pdo = connectDB();
// 画像を取得
$sql = 'SELECT * FROM images WHERE image_id = 60';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$images = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cトラベル：プラン一覧</title>
        <h1>Cトラベル：プラン一覧</h1>
    </head>
    <body>
        <div class="box" style="position:absolute; top:120px; left:50px;">
            <span class="box-title">タイトル</span>
            <p>
                <?php 
                    foreach ($images as $row) {
                        // データベースのフィールド名で出力
                        echo $row['title'];
                    }
                ?>
            </p>
        </div>
        <div class="box1" style="position:absolute; top:120px; left:700px;">
            <input id="address" type="hidden" value="<?php foreach ($images as $row) {
                                                            // データベースのフィールド名で出力
                                                            echo $row['plan1'];
                                                        } ?>">
            <span class="box-title1">1</span>
            <p>
                <?php 
                    foreach ($images as $row) {
                        // データベースのフィールド名で出力
                        echo $row['plan1'];
                    }
                ?>
            </p>
        </div>
        <div class="box2" style="position:absolute; top:200px; left:700px;">
            <input id="address2" type="hidden" value="<?php foreach ($images as $row) {
                                                            // データベースのフィールド名で出力
                                                            echo $row['plan2'];
                                                        } ?>">
            <span class="box-title2">2</span>
            <p>
                <?php 
                    foreach ($images as $row) {
                        // データベースのフィールド名で出力
                        echo $row['plan2'];
                    }
                ?>
            </p>
        </div>
        <div class="box3" style="position:absolute; top:280px; left:700px;">
            <input id="address3" type="hidden" value="<?php foreach ($images as $row) {
                                                            // データベースのフィールド名で出力
                                                            echo $row['plan3'];
                                                        } ?>">
            <span class="box-title3">3</span>
            <p>
                <?php 
                    foreach ($images as $row) {
                        // データベースのフィールド名で出力
                        echo $row['plan3'];
                    }
                ?>
            </p>
        </div>
        <div class="box4" style="position:absolute; top:360px; left:700px;">
            <input id="address4" type="hidden" value="<?php foreach ($images as $row) {
                                                            // データベースのフィールド名で出力
                                                            echo $row['plan4'];
                                                        } ?>">
            <span class="box-title4">4</span>
            <p>
                <?php 
                    foreach ($images as $row) {
                        // データベースのフィールド名で出力
                        echo $row['plan4'];
                    }
                ?>
            </p>
        </div>
        <div class="box5" style="position:absolute; top:440px; left:700px;">
            <input id="address5" type="hidden" value="<?php foreach ($images as $row) {
                                                            // データベースのフィールド名で出力
                                                            echo $row['plan5'];
                                                        } ?>">
            <span class="box-title5">5</span>
            <p>
                <?php 
                    foreach ($images as $row) {
                        // データベースのフィールド名で出力
                        echo $row['plan5'];
                    }
                ?>
            </p>
        </div>
        <div class="box6" style="position:absolute; top:520px; left:700px;">
            <input id="address6" type="hidden" value="<?php foreach ($images as $row) {
                                                            // データベースのフィールド名で出力
                                                            echo $row['plan6'];
                                                        } ?>">
            <span class="box-title6">6</span>
            <p>
                <?php 
                    foreach ($images as $row) {
                        // データベースのフィールド名で出力
                        echo $row['plan6'];
                    }
                ?>
            </p>
        </div>
        <div class="box7" style="position:absolute; top:600px; left:700px;">
            <input id="address7" type="hidden" value="<?php foreach ($images as $row) {
                                                            // データベースのフィールド名で出力
                                                            echo $row['plan7'];
                                                        } ?>">
            <span class="box-title7">7</span>
            <p>
                <?php 
                    foreach ($images as $row) {
                        // データベースのフィールド名で出力
                        echo $row['plan7'];
                    }
                ?>
            </p>
        </div>
        <div class="box8" style="position:absolute; top:700px; left:500px; right:50px;" rows="30" cols="75">
            <span class="box-title8">備考</span>
            <p>
            <?php 
                foreach ($images as $row) {
                    // データベースのフィールド名で出力
                    echo $row['plan_remarks'];
                }
            ?>
            </p>
            </div>
        <div style="position:absolute; top:250px; left:50px;" id="preview">
            <?php for($i = 0; $i < count($images); $i++): ?>
                <img src="image.php?id=<?= $images[$i]['image_id']; ?>" width="100px" height="auto" class="mr-3">
        <?php endfor; ?></div>
        <div style="position:absolute; top:700px; left:50px;" id="map"></div>
    <style>
        .box {
            position: relative;
            margin: 2em 0;
            padding: 0.5em 1em;
            border: solid 3px #95ccff;
            border-radius: 8px;
        }
        .box .box-title {
            position: absolute;
            display: inline-block;
            top: -13px;
            left: 10px;
            right: -30px;
            padding: 0 9px;
            line-height: 1;
            font-size: 19px;
            background: #FFF;
            color: #95ccff;
            font-weight: bold;
        }
        .box p {
            margin: 0; 
            padding: 0;
        }
        .box1 {
            padding: 0.5em 1em;
            margin: 2em 0;
            color: #232323;
            background: #fff8e8;
            border-left: solid 10px #FF0000;
        }
        .box1 .box-title1 {
            position: absolute;
            display: inline-block;
            top: -1px;
            right: 160px;
            left: -100px;
            padding: 0 9px;
            height: 40px;
            line-height: 40px;
            font-size: 30px;
            background: #FF0000;
            color: #ffffff;
            font-weight: bold;
        }
        .box1 p {
            margin: 0; 
            padding: 0;
        }
        .box2 {
            padding: 0.5em 1em;
            margin: 2em 0;
            color: #232323;
            background: #fff8e8;
            border-left: solid 10px #fd7e00;
        }
        .box2 .box-title2 {
            position: absolute;
            display: inline-block;
            top: -1px;
            right: 113px;
            left: -100px;
            padding: 0 9px;
            height: 40px;
            line-height: 40px;
            font-size: 30px;
            background: #fd7e00;
            color: #ffffff;
            font-weight: bold;
        }
        .box2 p {
            margin: 0; 
            padding: 0;
        }
        .box3 {
            padding: 0.5em 1em;
            margin: 2em 0;
            color: #232323;
            background: #fff8e8;
            border-left: solid 10px #88F800;
        }
        .box3 .box-title3 {
            position: absolute;
            display: inline-block;
            top: -1px;
            right: 144px;
            left: -100px;
            padding: 0 9px;
            height: 40px;
            line-height: 40px;
            font-size: 30px;
            background: #88F800;
            color: #ffffff;
            font-weight: bold;
        }
        .box3 p {
            margin: 0; 
            padding: 0;
        }
        .box4 {
            padding: 0.5em 1em;
            margin: 2em 0;
            color: #232323;
            background: #fff8e8;
            border-left: solid 10px #008000;
        }
        .box4 .box-title4 {
            position: absolute;
            display: inline-block;
            top: -1px;
            right: 160px;
            left: -100px;
            padding: 0 9px;
            height: 40px;
            line-height: 40px;
            font-size: 30px;
            background: #008000;
            color: #ffffff;
            font-weight: bold;
        }
        .box4 p {
            margin: 0; 
            padding: 0;
        }
        .box5 {
            padding: 0.5em 1em;
            margin: 2em 0;
            color: #232323;
            background: #fff8e8;
            border-left: solid 10px #00FFFF;
        }
        .box5 .box-title5 {
            position: absolute;
            display: inline-block;
            top: -1px;
            right: 175px;
            left: -100px;
            padding: 0 9px;
            height: 40px;
            line-height: 40px;
            font-size: 30px;
            background: #00FFFF;
            color: #ffffff;
            font-weight: bold;
        }
        .box5 p {
            margin: 0; 
            padding: 0;
        }
        .box6 {
            padding: 0.5em 1em;
            margin: 2em 0;
            color: #232323;
            background: #fff8e8;
            border-left: solid 10px #0000FF;
        }
        .box6 .box-title6 {
            position: absolute;
            display: inline-block;
            top: -1px;
            right: 144px;
            left: -100px;
            padding: 0 9px;
            height: 40px;
            line-height: 40px;
            font-size: 30px;
            background: #0000FF;
            color: #ffffff;
            font-weight: bold;
        }
        .box6 p {
            margin: 0; 
            padding: 0;
        }
        .box7 {
            padding: 0.5em 1em;
            margin: 2em 0;
            color: #232323;
            background: #fff8e8;
            border-left: solid 10px #800080;
        }
        .box7 .box-title7 {
            position: absolute;
            display: inline-block;
            top: -1px;
            right: 128px;
            left: -100px;
            padding: 0 9px;
            height: 40px;
            line-height: 40px;
            font-size: 30px;
            background: #800080;
            color: #ffffff;
            font-weight: bold;
        }
        .box7 p {
            margin: 0; 
            padding: 0;
        }
        .box8 {
            position: relative;
            margin: 2em 0;
            padding: 0.5em 1em;
            border: solid 3px #95ccff;
            border-radius: 8px;
        }
        .box8 .box-title8 {
            position: absolute;
            display: inline-block;
            top: -13px;
            left: 10px;
            padding: 0 9px;
            line-height: 1;
            font-size: 19px;
            background: #FFF;
            color: #95ccff;
            font-weight: bold;
        }
        .box8 p {
            margin: 0; 
            padding: 0;
        }
        h1 {
            font-weight: normal;
            padding-bottom: 10px;
            text-align: center;
            position: relative;
            margin: 0 0 30px 0;
            letter-spacing: 5px;
            position: absolute; top:20px; left:420px;
        }

        html {
            background-image: url(g0125.jpg);
            background-size:115% auto;
            overflow-x: hidden scroll;
        }
        body {
            background-color: #fff;
            padding: 30px 30px 30px;
            height: 1100px;
            width: 1000px;
            box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.18);
            border-radius: 3px;
            position: absolute; top:20px; left:100px;
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
    <script src="map1.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt8VOq7z8BwfdOaghYgQ7_WffuyYk-yxk&callback=initMap" async defer></script>
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
</html>