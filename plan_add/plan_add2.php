<?php
require_once 'functions.php';

$pdo = connectDB();

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    // 画像を取得
} else {
    // 画像を保存
    if (!empty($_FILES['image']['name'])) {
        $title = $_POST['title'];
        $plan1 = $_POST['plan1'];
        $plan2 = $_POST['plan2'];
        $plan3 = $_POST['plan3'];
        $plan4 = $_POST['plan4'];
        $plan5 = $_POST['plan5'];
        $plan6 = $_POST['plan6'];
        $plan7 = $_POST['plan7'];
        $name = $_FILES['image']['name'];
        $type = $_FILES['image']['type'];
        $content = file_get_contents($_FILES['image']['tmp_name']);
        $size = $_FILES['image']['size'];
        $plan_remarks = $_POST['biko'];
        //imagesに値を入れる
        $sql = 'INSERT INTO images(image_name, image_type, image_content, image_size, created_at, title, plan1, plan2, plan3, plan4, plan5, plan6, plan7, plan_remarks)
                VALUES (:image_name, :image_type, :image_content, :image_size, now(), :title, :plan1, :plan2, :plan3, :plan4, :plan5, :plan6, :plan7, :plan_remarks)';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':image_name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':image_type', $type, PDO::PARAM_STR);
        $stmt->bindValue(':image_content', $content, PDO::PARAM_STR);
        $stmt->bindValue(':image_size', $size, PDO::PARAM_INT);
        $stmt->bindValue(':title',$title,PDO::PARAM_STR);
        $stmt->bindValue(':plan1',$plan1,PDO::PARAM_STR);
        $stmt->bindValue(':plan2',$plan2,PDO::PARAM_STR);
        $stmt->bindValue(':plan3',$plan3,PDO::PARAM_STR);
        $stmt->bindValue(':plan4',$plan4,PDO::PARAM_STR);
        $stmt->bindValue(':plan5',$plan5,PDO::PARAM_STR);
        $stmt->bindValue(':plan6',$plan6,PDO::PARAM_STR);
        $stmt->bindValue(':plan7',$plan7,PDO::PARAM_STR);
        $stmt->bindValue(':plan_remarks',$plan_remarks,PDO::PARAM_STR);
        $stmt->execute();
    }
    unset($pdo);
    header('Location:plan_add2.php');
    exit();
}

unset($pdo);
?>
<html>
    <head>
        <title>プラン作成中</title>
    </head>
    <body>
        <div class="text">
        <h2>プラン作成中です少々お待ちください</h2><br>
        <h2>プランが作成され次第ホームに戻ります</h2>
            </div>
        <div class="wrapper">
    <div class="line line1">
      <span class="circle circle-top"></span>
      <div class="dotted">
        <span class="dot dot-top"></span>
        <span class="dot dot-middle-top"></span>
        <span class="dot dot-middle-bottom"></span>
        <span class="dot dot-bottom"></span>
      </div>
      <span class="circle circle-bottom"></span>
    </div>
    <div class="line line2">
      <span class="circle circle-top"></span>
      <div class="dotted">
        <span class="dot dot-top"></span>
        <span class="dot dot-middle-top"></span>
        <span class="dot dot-middle-bottom"></span>
        <span class="dot dot-bottom"></span>
      </div>
      <span class="circle circle-bottom"></span>
    </div>
    <div class="line line3">
      <span class="circle circle-top"></span>
      <div class="dotted">
        <span class="dot dot-top"></span>
        <span class="dot dot-middle-top"></span>
        <span class="dot dot-middle-bottom"></span>
        <span class="dot dot-bottom"></span>
      </div>
      <span class="circle circle-bottom"></span>
    </div>
    <div class="line line4">
      <span class="circle circle-top"></span>
      <div class="dotted">
        <span class="dot dot-top"></span>
        <span class="dot dot-middle-top"></span>
        <span class="dot dot-middle-bottom"></span>
        <span class="dot dot-bottom"></span>
      </div>
      <span class="circle circle-bottom"></span>
    </div>
    <div class="line line5">
      <span class="circle circle-top"></span>
      <div class="dotted">
        <span class="dot dot-top"></span>
        <span class="dot dot-middle-top"></span>
        <span class="dot dot-middle-bottom"></span>
        <span class="dot dot-bottom"></span>
      </div>
      <span class="circle circle-bottom"></span>
    </div>
    <div class="line line6">
      <span class="circle circle-top"></span>
      <div class="dotted">
        <span class="dot dot-top"></span>
        <span class="dot dot-middle-top"></span>
        <span class="dot dot-middle-bottom"></span>
        <span class="dot dot-bottom"></span>
      </div>
      <span class="circle circle-bottom"></span>
    </div>
    <div class="line line7">
      <span class="circle circle-top"></span>
      <div class="dotted">
        <span class="dot dot-top"></span>
        <span class="dot dot-middle-top"></span>
        <span class="dot dot-middle-bottom"></span>
        <span class="dot dot-bottom"></span>
      </div>
      <span class="circle circle-bottom"></span>
    </div>
    <div class="line line8">
      <span class="circle circle-top"></span>
      <div class="dotted">
        <span class="dot dot-top"></span>
        <span class="dot dot-middle-top"></span>
        <span class="dot dot-middle-bottom"></span>
        <span class="dot dot-bottom"></span>
      </div>
      <span class="circle circle-bottom"></span>
    </div>
    <div class="line line9">
      <span class="circle circle-top"></span>
      <div class="dotted">
        <span class="dot dot-top"></span>
        <span class="dot dot-middle-top"></span>
        <span class="dot dot-middle-bottom"></span>
        <span class="dot dot-bottom"></span>
      </div>
      <span class="circle circle-bottom"></span>
    </div>
    <div class="line line10">
      <span class="circle circle-top"></span>
      <div class="dotted">
        <span class="dot dot-top"></span>
        <span class="dot dot-middle-top"></span>
        <span class="dot dot-middle-bottom"></span>
        <span class="dot dot-bottom"></span>
      </div>
      <span class="circle circle-bottom"></span>
    </div>
    <div class="line line11">
      <span class="circle circle-top"></span>
      <div class="dotted">
        <span class="dot dot-top"></span>
        <span class="dot dot-middle-top"></span>
        <span class="dot dot-middle-bottom"></span>
        <span class="dot dot-bottom"></span>
      </div>
      <span class="circle circle-bottom"></span>
    </div>
  </div>
        <style>
            .text{
                color: white;
                position: relative; top:20px; left:420px;
            }
            body{
      background-color: #1E0731;
    }
    footer{
      position: absolute;
      margin-top: 300px;
    }
    footer a{
      color: #F5E53A;
    }
    footer img{
      width: 32px;
      height: 32px;
      vertical-align: middle;
    }

    .wrapper{
      position: absolute;
      float: left;
      margin: 140px 100px;
    }

    .line{
      position: absolute;
      top: 0px;
      width: 2px;
      height: 8px;
      background-color: red;
    }

    .circle{
      position: absolute;
      display: block;
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background-color: blue;
    }
    .circle-top{
      top: 0px;
      left: -3.5px;
    }
    .circle-bottom{
      bottom: 0px;
      left: -3.5px;
    }

    .dot{
      position: absolute;
      display: block;
      width: 4px;
      height: 4px;
      border-radius: 50%;
      left: -1.5px;
    }

    .line1{
      margin-left: 350px;
      background-color: #2410CB;
      -webkit-animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) infinite;
      animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) infinite;
    }
    .line1 > span{
      background-color: #D4141E;
    }
    .line1 > .dotted > .dot{
      background-color: #D4141E;
    }
    .line1 > .dotted > .dot-top{
      top: 0px;
      -webkit-animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) infinite;
      animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) infinite;
    }
    .line1 > .dotted > .dot-bottom{
      bottom: 0px;
      -webkit-animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) infinite;
      animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) infinite;
    }
    .line1 > .dotted > .dot-middle-top{
      top: 0px;
      -webkit-animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) infinite;
      animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) infinite;
    }
    .line1 > .dotted > .dot-middle-bottom{
      bottom: 0px;
      -webkit-animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) infinite;
      animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) infinite;
    }

    .line2{
      margin-left: 385px;
      background-color: #852DF4;
      -webkit-animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) .05s infinite;
      animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) .05s infinite;
    }
    .line2 > span{
      background-color: #FC7E48;
    }
    .line2 > .dotted > .dot{
      background-color: #FC7E48;
    }
    .line2 > .dotted > .dot-top{
      top: 0px;
      -webkit-animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) .05s infinite;
      animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) .05s infinite;
    }
    .line2 > .dotted > .dot-bottom{
      bottom: 0px;
      -webkit-animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .05s infinite;
      animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .05s infinite;
    }
    .line2 > .dotted > .dot-middle-top{
      top: 0px;
      -webkit-animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) .05s infinite;
      animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) .05s infinite;
    }
    .line2 > .dotted > .dot-middle-bottom{
      bottom: 0px;
      -webkit-animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .05s infinite;
      animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .05s infinite;
    }

    .line3{
      margin-left: 420px;
      background-color: #F42DF1;
      -webkit-animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) .1s infinite;
      animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) .1s infinite;
    }
    .line3 > span{
      background-color: #EDEB29;
    }
    .line3 > .dotted > .dot{
      background-color: #EDEB29;
    }
    .line3 > .dotted > .dot-top{
      top: 0px;
      -webkit-animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) .1s infinite;
      animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) .1s infinite;
    }
    .line3 > .dotted > .dot-bottom{
      bottom: 0px;
      -webkit-animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .1s infinite;
      animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .1s infinite;
    }
    .line3 > .dotted > .dot-middle-top{
      top: 0px;
      -webkit-animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) .1s infinite;
      animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) .1s infinite;
    }
    .line3 > .dotted > .dot-middle-bottom{
      bottom: 0px;
      -webkit-animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .1s infinite;
      animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .1s infinite;
    }

    .line4{
      margin-left: 455px;
      background-color: #F91396;
      -webkit-animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) .15s infinite;
      animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) .15s infinite;
    }
    .line4 > span{
      background-color: #ACED29;
    }
    .line4 > .dotted > .dot{
      background-color: #ACED29;
    }
    .line4 > .dotted > .dot-top{
      top: 0px;
      -webkit-animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) .15s infinite;
      animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) .15s infinite;
    }
    .line4 > .dotted > .dot-bottom{
      bottom: 0px;
      -webkit-animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .15s infinite;
      animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .15s infinite;
    }
    .line4 > .dotted > .dot-middle-top{
      top: 0px;
      -webkit-animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) .15s infinite;
      animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) .15s infinite;
    }
    .line4 > .dotted > .dot-middle-bottom{
      bottom: 0px;
      -webkit-animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .15s infinite;
      animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .15s infinite;
    }

    .line5{
      margin-left: 490px;
      background-color: #D4141E;
      -webkit-animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) .2s infinite;
      animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) .2s infinite;
    }
    .line5 > span{
      background-color: #4EF02B;
    }
    .line5 > .dotted > .dot{
      background-color: #4EF02B;
    }
    .line5 > .dotted > .dot-top{
      top: 0px;
      -webkit-animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) .2s infinite;
      animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) .2s infinite;
    }
    .line5 > .dotted > .dot-bottom{
      bottom: 0px;
      -webkit-animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .2s infinite;
      animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .2s infinite;
    }
    .line5 > .dotted > .dot-middle-top{
      top: 0px;
      -webkit-animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) .2s infinite;
      animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) .2s infinite;
    }
    .line5 > .dotted > .dot-middle-bottom{
      bottom: 0px;
      -webkit-animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .2s infinite;
      animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .2s infinite;
    }

    .line6{
      margin-left: 525px;
      background-color: #FC7E48;
      -webkit-animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) .25s infinite;
      animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) .25s infinite;
    }
    .line6 > span{
      background-color: #38E790;
    }
    .line6 > .dotted > .dot{
      background-color: #38E790;
    }
    .line6 > .dotted > .dot-top{
      top: 0px;
      -webkit-animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) .25s infinite;
      animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) .25s infinite;
    }
    .line6 > .dotted > .dot-bottom{
      bottom: 0px;
      -webkit-animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .25s infinite;
      animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .25s infinite;
    }
    .line6 > .dotted > .dot-middle-top{
      top: 0px;
      -webkit-animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) .25s infinite;
      animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) .25s infinite;
    }
    .line6 > .dotted > .dot-middle-bottom{
      bottom: 0px;
      -webkit-animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .25s infinite;
      animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .25s infinite;
    }

    .line7{
      margin-left: 560px;
      background-color: #EDEB29;
      -webkit-animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) .3s infinite;
      animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) .3s infinite;
    }
    .line7 > span{
      background-color: #25EACC;
    }
    .line7 > .dotted > .dot{
      background-color: #25EACC;
    }
    .line7 > .dotted > .dot-top{
      top: 0px;
      -webkit-animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) .3s infinite;
      animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) .3s infinite;
    }
    .line7 > .dotted > .dot-bottom{
      bottom: 0px;
      -webkit-animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .3s infinite;
      animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .3s infinite;
    }
    .line7 > .dotted > .dot-middle-top{
      top: 0px;
      -webkit-animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) .3s infinite;
      animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) .3s infinite;
    }
    .line7 > .dotted > .dot-middle-bottom{
      bottom: 0px;
      -webkit-animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .3s infinite;
      animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .3s infinite;
    }

    .line8{
      margin-left: 595px;
      background-color: #ACED29;
      -webkit-animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) .35s infinite;
      animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) .35s infinite;
    }
    .line8 > span{
      background-color: #309CDF;
    }
    .line8 > .dotted > .dot{
      background-color: #309CDF;
    }
    .line8 > .dotted > .dot-top{
      top: 0px;
      -webkit-animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) .35s infinite;
      animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) .35s infinite;
    }
    .line8 > .dotted > .dot-bottom{
      bottom: 0px;
      -webkit-animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .35s infinite;
      animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .35s infinite;
    }
    .line8 > .dotted > .dot-middle-top{
      top: 0px;
      -webkit-animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) .35s infinite;
      animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) .35s infinite;
    }
    .line8 > .dotted > .dot-middle-bottom{
      bottom: 0px;
      -webkit-animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .35s infinite;
      animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .35s infinite;
    }

    .line9{
      margin-left: 630px;
      background-color: #4EF02B;
      -webkit-animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) .4s infinite;
      animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) .4s infinite;
    }
    .line9 > span{
      background-color: #2544E7;
    }
    .line9 > .dotted > .dot{
      background-color: #2544E7;
    }
    .line9 > .dotted > .dot-top{
      top: 0px;
      -webkit-animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) .4s infinite;
      animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) .4s infinite;
    }
    .line9 > .dotted > .dot-bottom{
      bottom: 0px;
      -webkit-animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .4s infinite;
      animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .4s infinite;
    }
    .line9 > .dotted > .dot-middle-top{
      top: 0px;
      -webkit-animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) .4s infinite;
      animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) .4s infinite;
    }
    .line9 > .dotted > .dot-middle-bottom{
      bottom: 0px;
      -webkit-animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .4s infinite;
      animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .4s infinite;
    }

    .line10{
      margin-left: 665px;
      background-color: #38E790;
      -webkit-animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) .45s infinite;
      animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) .45s infinite;
    }
    .line10 > span{
      background-color: #852DF4;
    }
    .line10 > .dotted > .dot{
      background-color: #852DF4;
    }
    .line10 > .dotted > .dot-top{
      top: 0px;
      -webkit-animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) .45s infinite;
      animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) .45s infinite;
    }
    .line10 > .dotted > .dot-bottom{
      bottom: 0px;
      -webkit-animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .45s infinite;
      animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .45s infinite;
    }
    .line10 > .dotted > .dot-middle-top{
      top: 0px;
      -webkit-animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) .45s infinite;
      animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) .45s infinite;
    }
    .line10 > .dotted > .dot-middle-bottom{
      bottom: 0px;
      -webkit-animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .45s infinite;
      animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .45s infinite;
    }

    .line11{
      margin-left: 700px;
      background-color: #25EACC;
      -webkit-animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) .5s infinite;
      animation: line 2s cubic-bezier(0.250, 0, 0.705, 1) .5s infinite;
    }
    .line11 > span{
      background-color: #F42DF1;
    }
    .line11 > .dotted > .dot{
      background-color: #F42DF1;
    }
    .line11 > .dotted > .dot-top{
      top: 0px;
      -webkit-animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) .5s infinite;
      animation: dot-top 2s cubic-bezier(0.250, 0, 0.705, 1) .5s infinite;

    }
    .line11 > .dotted > .dot-bottom{
      bottom: 0px;
      -webkit-animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .5s infinite;
      animation: dot-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .5s infinite;
    }
    .line11 > .dotted > .dot-middle-top{
      top: 0px;
      -webkit-animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) .5s infinite;
      animation: dot-middle-top 2s cubic-bezier(0.250, 0, 0.705, 1) .5s infinite;
    }
    .line11 > .dotted > .dot-middle-bottom{
      bottom: 0px;
      -webkit-animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .5s infinite;
      animation: dot-middle-bottom 2s cubic-bezier(0.250, 0, 0.705, 1) .5s infinite;
    }

    @-webkit-keyframes line{
      0%{height: 4px; top: 0px; left: 0px; -webkit-transform: rotate(-65deg)}
      10%{height: 220px; top: -110px; left: 15px;}
      45%{height: 200px; top: -100px; left: 25px;}
      70%{height: 8px; top: 0px; left: 25px; -webkit-transform: rotate(0deg);}
      100%{height: 8px; top: 0px; left: 15px; -webkit-transform: rotate(0deg);}
    }
    @-webkit-keyframes dot-top{
      0%{top: -30px}
      10%{top: -30px;}
      45%{top: -25px;}
      60%{top: 0px;}
      100%{top: 0px;}
    }
    @-webkit-keyframes dot-bottom{
      0%{bottom: -30px}
      10%{bottom: -30px;}
      45%{bottom: -25px;}
      60%{bottom: 0px;}
      100%{bottom: 0px;}
    }
    @-webkit-keyframes dot-middle-top{
      0%{}
      10%{}
      45%{top: 98px;}
      70%{top: -50px;}
      85%{top: 0px;}
      100%{top: 0px;}
    }
    @-webkit-keyframes dot-middle-bottom{
      0%{}
      10%{}
      45%{bottom: 98px;}
      70%{bottom: -50px;}
      85%{bottom: 0px;}
      100%{bottom: 0px;}
    }
    
    @keyframes line{
      0%{height: 4px; top: 0px; left: 0px; transform: rotate(-65deg)}
      10%{height: 220px; top: -110px; left: 15px;}
      45%{height: 200px; top: -100px; left: 25px;}
      70%{height: 8px; top: 0px; left: 25px; transform: rotate(0deg);}
      100%{height: 8px; top: 0px; left: 15px; transform: rotate(0deg);}
    }
    @keyframes dot-top{
      0%{top: -30px}
      10%{top: -30px;}
      45%{top: -25px;}
      60%{top: 0px;}
      100%{top: 0px;}
    }
    @keyframes dot-bottom{
      0%{bottom: -30px}
      10%{bottom: -30px;}
      45%{bottom: -25px;}
      60%{bottom: 0px;}
      100%{bottom: 0px;}
    }
    @keyframes dot-middle-top{
      0%{}
      10%{}
      45%{top: 78px;}
      70%{top: -50px;}
      85%{top: 0px;}
      100%{top: 0px;}
    }
    @keyframes dot-middle-bottom{
      0%{}
      10%{}
      45%{bottom: 78px;}
      70%{bottom: -50px;}
      85%{bottom: 0px;}
      100%{bottom: 0px;}
    }
        </style>
    </body>
</html>
<script>
    /*Only CSS amazing preloader (fix 27.10.2014)*/

/*Inspired by Handel Eugene --> (dribbble GIF link) */

/*by Troshkin Pavel troshkin.pavel@yandex.ru*/
</script>

<script>
    function move(){
        location.href = "../index.php/index1.php";
    }
    setTimeout(move,5000);
</script>
