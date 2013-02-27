<?php
require_once("../core/PDOManager.class.php");
require_once("../model/Url.class.php");
/**
 * Created by JetBrains PhpStorm.
 * User: Chedly
 * Date: 27/02/13
 * Time: 17:48
 * To change this template use File | Settings | File Templates.
 */

class PDOUrlManager{

    function addUrl($name, $shortName){
        try{
            $PDOmanager = new PDOManager();
            $pdo = $PDOmanager->instantiatePDO();
            $urlRegister= $pdo->prepare(" INSERT INTO urls(name,shortanme) VALUES (:name, :shortname)");
            $urlRegister->execute(array(
                ':name' => $name,
                ':shortname' => $shortName
            ));
        }catch (PDOException $e){
            echo $e->errorInfo;
        }
        $url = new Url($pdo->lastInsertId(),$name,$shortName);

    }

}