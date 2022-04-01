<?php

class Database {
    private $db;
    
    public function __construct($dbname = "biblio"){
        try {           
            $this->db = new PDO("mysql:host=localhost;dbname=".$dbname, "root", "");
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (\Throwable $th) {
            die("Erreur :".$th->getMessage());
        }
    }

    public function login($code, $mdp)
    {
        try {
            $q = $this->db->prepare("SELECT * FROM user WHERE (code =? AND  mdp =?)");

            $q->execute([$code,$mdp]);
        } catch (\Throwable $th) {
            die("Erreur :".$th->getMessage());
        }
    
        return $q->fetch();
    }
}

?>