<?php
//データベースに接続
function connectDB() {
    $param = 'mysql:dbname=ctraver_img;host=localhost';
    try {
        $pdo = new PDO($param, 'root', '');
        return $pdo;
        
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }
}
?>