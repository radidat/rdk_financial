<?php

class LocationModel  { 


            private  $last_id ='';

     public function __construct()
     {

     }

     private function dbConnect(){ 

          $db = new PDO('mysql:host=localhost;dbname=rdk_financial;charset=utf8','root', '',[
              PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
          ]);
  
          return $db;
          }  
     
     public function fetch_clients(){ 

          $db = $this->dbConnect();
      $request = "SELECT id, nom, prenom FROM client ORDER BY nom  "; 
        $statment = $db->prepare($request); 
         $statment->execute(); 
           $rows = $statment->fetchAll(PDO::FETCH_ASSOC); 

           return $rows;
     }
     public function fetch_Vehicules(){ 

          $db = $this->dbConnect();
      $request = "SELECT id, marque, immatriculation FROM vehicules ORDER BY marque  "; 
        $statment = $db->prepare($request); 
         $statment->execute(); 
           $rows = $statment->fetchAll(PDO::FETCH_ASSOC); 

           return $rows;
     }

     public function fetchInfosClient($id){ 

          $idformat = (int)$id;
          $req ="SELECT * FROM client WHERE id=:id "; 
          $statement = $this->dbConnect()->prepare($req); 
          $statement->execute(['id'=>$idformat]);
            $row = $statement->fetch(PDO::FETCH_ASSOC);
            return $row;



     }


     public function set_new_location( array $data)
     {


  $db = $this->dbConnect();
        
         if(!empty($data)){ 
            $req  = "INSERT INTO location (id_client, id_vehicules, date_de_depart, date_de_retour,
             montant_de_garantie, montant_de_la_location, garantie_vol, montant_garantie_vol, assurance, type_de_paiement, garantie_accident) 
             VALUES (:id_client, :id_vehicules, :date_de_depart, :date_de_retour, :montant_de_garantie, :montant_de_la_location, :garantie_vol, :montant_garantie_vol, :assurance, :type_de_paiement, :garantie_accident)";
                 $statement =$db->prepare($req); 
                 $statement->execute($data);
                 $this->last_id.=  $db->lastInsertId();

         }
    
     

     }

     public function getDataLocation(){ 
          $db = $this->dbConnect();
             
          if(isset($this->last_id)&& $this->last_id !==''){ 
                    $id = (int) $this->last_id;
               $requestDataLocation = "SELECT * FROM location JOIN client ON client.id = location.id_client
               JOIN vehicules ON vehicules.id = location.id_vehicules WHERE location.id = :id"; 
               $getData = $db->prepare($requestDataLocation); 
               $getData->bindParam(':id', $id);
               $getData->execute();
                $results = $getData->fetchAll(PDO::FETCH_ASSOC);
                return $results;
          }
       

     }

     
}