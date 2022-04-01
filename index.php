<?php 

require_once('models/Database.php');
$db = new Database();

require_once('partials/_header.php'); 
if (isset($_GET['page'])) {
    # code...
}else{
    require_once('Controllers/loginControlleur.php');
}

 require_once('partials/_footer.php'); 