<?php
//データベースに接続
function connectDB() {
    $param = 'mysql:dbname=LAA1210950-ctraver;host=mysql148.phy.lolipop.lan';
    try {
        $pdo = new PDO($param, 'LAA1210950', "ctraver");
        return $pdo;
        
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }
}
?>