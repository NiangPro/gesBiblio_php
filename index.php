<?php 

require_once('models/Database.php');
$db = new Database();

require_once('partials/_header.php'); 
if (isset($_GET['page'])) {
    switch ($_GET["page"]) {
        case 'admin':
            require_once("Controllers/adminControlleur.php");
            break;
            case 'employe':
                require_once("Controllers/employeControlleur.php");
                break;
                case 'membre':
                    require_once("Controllers/membreControlleur.php");
                    break;
        default:
            # code...
            break;
    }
}else{
    require_once('Controllers/loginControlleur.php');
}

 require_once('partials/_footer.php'); 