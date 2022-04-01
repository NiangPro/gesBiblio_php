<?php
  
    if (isset($_POST["connecter"])) {
        extract($_POST);

        if (!empty($code) && !empty($mdp)) {
        

        $user = $db->login($code, $mdp);

        if($user){
            if ($user->type == "employe") {
            
                return header("Location:?page=admin");
            }else if ($user->type == "admin") {
                die("Bienvenu l'admin");
            }else{
                die("Bienvenu le membre");
            }
        }else{
            echo "Code ou mot de passe incorrect";
        }
        }else{
            echo "Veuillez renseigner tous les champs";
        }
    }

    require_once('views/login.php');
?>