<?php
  
    if (isset($_POST["connecter"])) {
        extract($_POST);

        if (!empty($code) && !empty($mdp)) {
        

        $user = $db->login($code, $mdp);

        if($user){
            if ($user->type == "employe") {
            
                return header("Location:?page=employe");
            }else if ($user->type == "admin") {
                return header("Location:?page=admin");
            }else{
                return header("Location:?page=membre");
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