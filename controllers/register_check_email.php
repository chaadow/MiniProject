<?php 


    //extract($_POST);
	require_once "../core/PDOManager.class.php";
    $email= $_POST["email"];

    if(isset($email) && !empty($email)){

        try {
                $PDOmanager = new PDOManager();
                $pdo = $PDOmanager->instantiatePDO();

                $sql = $pdo->query("SELECT * FROM users WHERE email = '$email' ");
                $sql = $sql->fetch(PDO::FETCH_ASSOC);

                if($sql){
                        echo "Username is taken";
                 }else{
                        echo "Okay that workss";
                }
            } catch (PDOException $e) {
                echo "error register";
            }

    }




 ?>