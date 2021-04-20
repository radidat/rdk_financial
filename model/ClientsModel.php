<?php

class ClientsModel{ 


     public function __construct()
     {

     }
     private function dbConnect(){ 

        $db = new PDO('mysql:host=localhost;dbname=rdk_financial;charset=utf8','root', '',[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        return $db;
}

     public function setNewClient( array $data)
     {

 

        $db = $this->dbConnect();
  
         if(!empty($data)){ 
            $req  = "INSERT INTO client (nom, prenom, email, societe,numero_de_siret, numero_de_telephone, permis_de_conduire, lieu_d_obtention, date_d_obtention ) 
             VALUES (:nom, :prenom, :email, :societe, :numero_de_siret, :numero_de_telephone, :permis_de_conduire, :lieu_d_obtention, :date_d_obtention )";
                 $statement =$db->prepare($req); 
                 $statement->execute($data);
         }
    
     

     }

     public function getAllClients(){ 
        $db = $this->dbConnect();
           
        if(isset($this->last_id)&& $this->last_id !==''){ 
             $requestDataLocation = "SELECT * FROM location JOIN client ON client.id = location.id_client
             JOIN vehicules ON vehicules.id = location.id_vehicules"; 
             $getData = $db->prepare($requestDataLocation); 
             $getData->execute();
              $results = $getData->fetchAll(PDO::FETCH_ASSOC);
              return $results;
        }
     

   }



     
}