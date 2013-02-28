<?php

require_once("../model/User.class.php");

session_start();
    if(isset($_SESSION['user'])){

        $user = $_SESSION['user'];


    }else{
        header("Location:.");
    }
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../css/miniproject.css" />

    <title>Dashboard</title>
</head>


<body>
<div class="navbar navbar-static-top">
    <div class="navbar-inner">
        <a class="brand" href="dashboard.php">SupLink</a>
        <ul class="nav pull-right">

            <li><a href="logout.php">Logout</a></li>
            <li class="divider-vertical"></li>
            <li><a href="logout.php"><?php echo $user->getEmail(); ?></a></li>
            <li class="divider-vertical"></li>

            <li><a href="about.php">About</a></li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="jumbotron">
        <h1>SupLink</h1>
        <p class="lead">Another URL shortener</p>

    </div>
    <hr>
    <div class="containerInline">
        <form  method="post" class="form-inline" action="../controllers/url_check.php">
        <input type="text" class="input-large name" placeholder="Name">
        <input type="url" class="input-large url" placeholder="http://"> 
        <button type="submit" class="btn-large btn-inverse">Generate</button>
    </form>
    </div>
    
</div>

<!-- (TIP) Google returns the latest version of jquery in the 1 series (from 1.0 to 1.9.9) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

</body>

</html>