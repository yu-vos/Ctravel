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
        <h2>プラン作成中です少々お待ちください</h2><br>
        <h2>プランが作成され次第ホームに戻ります</h2>
    </body>
</html>
<script>
    function move(){
        location.href = "index1.php";
    }
    setTimeout(move,5000);
</script>