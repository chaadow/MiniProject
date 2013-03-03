<?php
    require_once("core/PDOManager.class.php");
    require_once("controllers/PDOUrlManager.class.php");

    require_once("model/User.class.php");

    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: /suplink/view/');
    }else{
        $user = $_SESSION['user'];
    }


    $PDOmanager = new PDOManager;
    $pdo = $PDOmanager->instantiatePdo();


    if(isset($_GET['decode'])){
        $decode= $_GET['decode'];
    }else{
        header("Location:/suplink/view");
    }


    $query=$pdo->prepare('SELECT click, id FROM urls WHERE shortUrl = :shortUrl');
    $query->execute(array(
        ':shortUrl' => $decode
    ));


    $data = $query->fetch(PDO::FETCH_ASSOC);
    if($data){
        $click = $data["click"];
        $urlId = $data["id"];
    }else{
        header("Location:/suplink/view");
    }



    $query1=$pdo->prepare('SELECT * FROM urls WHERE id = :urlId && shortUrl= :shortUrl && active = 1 ');
    $query1->execute(array(
        ':urlId' => $urlId,
        ':shortUrl' => $decode
    ));



    while($row = $query1->fetch(PDO::FETCH_ASSOC))
    {
        $click++;
        $url=$row['url'];
        $query2=$pdo->prepare('UPDATE urls SET click= :click WHERE shortUrl = :shortUrl');
        $query2->execute(array(
            ':click' => $click,
            ':shortUrl' => $decode
        ));

        header("location:".$url);

    }





?>