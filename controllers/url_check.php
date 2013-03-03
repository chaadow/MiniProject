<?php

require_once("PDOUrlManager.class.php");
require_once("../model/User.class.php");
    session_start();

    if(isset($_SESSION['user'])){

        $user = $_SESSION['user'];
       // print_r($user);


    }else{
        header("Location:../view/");
    }

/**
 * Created by JetBrains PhpStorm.
 * User: Chedly
 * Date: 27/02/13
 * Time: 20:44
 * To change this template use File | Settings | File Templates.
 */
extract($_POST);

if(isset($name)&& isset($url)){
	if(!empty($name)&& !empty($url)){
		$urlManager = new PDOUrlManager();
		$urlManager->addUrl($name,$url,$user->getId());
        header('Location:../view/dashboard.php');
	}else{
        header('Location:../view/dashboard.php');
		
	}

}

  





?>