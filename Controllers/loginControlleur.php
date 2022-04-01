<?php

if(isset($_POST["connecter"])){
    extract($_POST);
    var_dump($code);
    die();
}
    require_once('views/login.php');
?>