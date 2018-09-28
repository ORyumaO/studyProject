<?php
require '../validation.php';

date_default_timezone_set('Asia/Tokyo');
$valiation = validation::isEmpty($_POST['valiation']);
$name = validation::isEmpty($_POST['name']);
$buyDate = validation::isEmpty($_POST['buy_date']);
$volume = validation::isEmpty($_POST['volume']);
$price = validation::isEmpty($_POST['price']);
$createAt = date("Y-m-d H:i:s");

// DB接続
$dsn = 'mysql:dbname=study_pro;host=127.0.0.1;port=3306';
$user = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $user, $password);
//    $sql = "SELECT * FROM post";
//    インサート
    $sql = "INSERT INTO post (
        name,
        valiation,
        buy_date,
        price,
        create_at,
        volume) 
        values (
        :name,
        :valiation,
        :buyDate,
        :price,
        :createAt,
        :volume
        )"; 
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':valiation', (int)$valiation, PDO::PARAM_INT);
    $stmt->bindValue(':buyDate', $buyDate, PDO::PARAM_STR);
    $stmt->bindValue(':price', (int)$price, PDO::PARAM_INT);
    $stmt->bindValue(':createAt', $createAt, PDO::PARAM_STR);
    $stmt->bindValue(':volume', (int)$volume, PDO::PARAM_INT);
    //インサート処理
    $stmt->execute();
    
    //$stmt = $pdo->query($sql);
    //$value = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo('処理が完了しました。');


} catch (PDOException $e) {
    echo 'データベース接続に失敗しました。 ' . $e->getMessage();
}

?>