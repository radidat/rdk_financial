<?php
class AuthentificationModel { 

               private $db;

        public function __construct(){

        }


    private function dbConnect(){ 

        $db = new PDO('mysql:host=localhost;dbname=rdk_financial;charset=utf8','root', '',[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        return $db;
}
    public function new_inscritption( $data){ 


                $db = $this->dbConnect();
        $insertion= "INSERT INTO administrateur ( nom, prenom, email, mot_de_passe) VALUES ( ?, ?, ?, ?)";
        $insrip_request  = $db->prepare($insertion);
             $insrip_request->execute($data);

    }

    public function connexion($data){ 
          $db = $this->dbConnect();
        $requser= $db->prepare("SELECT * FROM administrateur WHERE email = ? AND mot_de_passe = ?");
        $requser-> execute($data);
       $fetch_data = $requser->fetch(PDO::FETCH_ASSOC);
      return $fetch_data;
    }
    
}