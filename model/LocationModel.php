<?php
require_once './model/DataBase.php';
class LocationModel extends DataBase  { 


            public  $last_id ='';
            public  $last_id_etat ='';

     public function __construct()
     {

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
        
        /* get last id à tester : SELECT *FROM magazines ORDER BY id DESC LIMIT 1
        SELECT MAX(id) FROM <tablename>
        */
     

    public function get_last_id_location(){ 
                         
                               
                           $db  = $this->dbConnect();
                           $query = $db->prepare("SELECT MAX(id) as id FROM location");
                              $query->execute();
                               $row  =  $query->fetch();
                return $row;
     }

     public function getDataLocation(){ 
          $db = $this->dbConnect();
             
     
               $requestDataLocation = "SELECT * FROM location JOIN client ON client.id = location.id_client JOIN vehicules ON vehicules.id = location.id_vehicules ORDER BY location.id DESC LIMIT 1"; 
               $getData = $db->prepare($requestDataLocation); 
               $getData->execute();
                $results = $getData->fetchAll(PDO::FETCH_ASSOC);
                return $results;
       

     }
    public function get_last_data_etat_vehicule(){ 
        $db = $this->dbConnect();
           
        if(isset($this->last_id)){ 
                  $id = $this->last_id;
             $requestDataLocation = "SELECT * FROM etat_du_vehicule JOIN location ON location.id = etat_du_vehicule.id_location JOIN vehicules ON vehicules.id = location.id_vehicules JOIN client ON client.id = location.id_client ORDER BY etat_du_vehicule.id DESC LIMIT 1"; 
             $getData = $db->prepare($requestDataLocation); 
             $getData->execute();
              $results = $getData->fetch(PDO::FETCH_ASSOC);
              return $results;
        }
     

   }
   public function get_last_image_etat_vehicule(){ 
    $db = $this->dbConnect();
       
    if(isset($this->last_id)){ 
              $id = $this->last_id;
         $requestDataLocation = "SELECT * FROM image_etat_vehicule_depart JOIN etat_du_vehicule ON etat_du_vehicule.id = image_etat_vehicule_depart.id_etat_du_vehicule ORDER BY image_etat_vehicule_depart.id DESC LIMIT 1"; 
         $getData = $db->prepare($requestDataLocation); 
         $getData->execute();
          $results = $getData->fetch(PDO::FETCH_ASSOC);
          return $results;
    }
}

     public function get_date_location_etat($id){ 
          $db = $this->dbConnect();
             
               $requestDataLocation = "SELECT * FROM location JOIN client ON client.id = location.id_client
               JOIN vehicules ON vehicules.id = location.id_vehicules WHERE location.id = :id"; 
               $getData = $db->prepare($requestDataLocation); 
               $getData->bindParam(':id', $id);
               $getData->execute();
                $results = $getData->fetch(PDO::FETCH_ASSOC);
                return $results;
       

     }

public function set_etat_vehicule($data, $images){ 
     $db = $this->dbConnect();
     if(!empty($data)){ 
          $req  = "INSERT INTO etat_du_vehicule (id_location, kilometrage_depart, niveau_carburant_depart, observation_depart ) 
           VALUES (?, ?, ?, ?)";
               $statement =$db->prepare($req); 
               $statement->execute($data);
               $this->last_id_etat.=  $db->lastInsertId();
                      $this->images_etat_vehicule($images);

       }
}
    /* add images name in data base*/
public function images_etat_vehicule( array $images){ 
              
     $images[] = $this->last_id_etat;
     $db = $this->dbConnect();
     if(count($images) === 2){ 
          $requestImages= "INSERT INTO image_etat_vehicule_depart (image_1, id_etat_du_vehicule) 
          VALUES (?, ?)";
      }
      if(count($images) === 3){ 
          $requestImages= "INSERT INTO image_etat_vehicule_depart (image_1, image_2, id_etat_du_vehicule) 
          VALUES (?, ?, ?)";
      }
      if(count($images) === 4){ 
          $requestImages  = "INSERT INTO image_etat_vehicule_depart (image_1, image_2, image_3, id_etat_du_vehicule) 
          VALUES ( ?, ?, ?, ?)";
      }
      if(count($images) === 5){ 
          $requestImages  = "INSERT INTO image_etat_vehicule_depart (image_1, image_2, image_3, image_4, id_etat_du_vehicule) 
          VALUES (?, ?, ?, ?, ?)";
      }
      if(count($images) === 6){ 
          $requestImages  = "INSERT INTO  image_etat_vehicule_depart (image_1,image_2, image_3, image_4, image_5, id_etat_du_vehicule) 
          VALUES (?, ?, ?, ?, ?, ?)";
      }
      if(count($images) === 7){ 
          $requestImages  = "INSERT INTO image_etat_vehicule_depart (image_1,image_2, image_3, image_4, image_5, image_6, id_etat_du_vehicule) 
          VALUES (?, ?, ?, ?, ?, ?, ?)";
      }
      if(count($images) === 8){ 
          $requestImages  = "INSERT INTO image_etat_vehicule_depart (image_1,image_2, image_3, image_4, image_5, image_6,image_7, id_etat_du_vehicule) 
          VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
      }
      if(count($images) === 9){ 
          $requestImages  = "INSERT INTO image_etat_vehicule_depart (image_1,image_2, image_3, image_4, image_5, image_6,image_7, image_8, id_etat_du_vehicule) 
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
      }
      if(count($images) === 10){ 
          $requestImages  = "INSERT INTO image_etat_vehicule_depart( image_1,image_2, image_3, image_4, image_5, image_6,image_7, image_8, image_9, id_etat_du_vehicule) 
          VALUES (?, ?, ?, ?, ?, ?,?, ?, ?, ?)";
      }
      if(count($images) === 11){ 
          $requestImages  = "INSERT INTO image_etat_vehicule_depart (image_1,image_2, image_3, image_4, image_5, image_6,image_7, image_8, image_9, image_10, id_etat_du_vehicule) 
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
      }
      if(count($images) === 12){ 
          $requestImages  = "INSERT INTO image_etat_vehicule_depart (image_1,image_2, image_3, image_4, image_5, image_6,image_7, image_8, image_9, image_10, image_11, id_etat_du_vehicule) 
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
      }
      if(count($images) === 13){ 
          $requestImages  = "INSERT INTO image_etat_vehicule_depart (image_1,image_2, image_3, image_4, image_5, image_6,image_7, image_8, image_9, image_10, image_11, image_12, id_etat_du_vehicule) 
          VALUES (?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?)";
      }
    

      $insertImages =$db->prepare($requestImages); 
      $insertImages->execute($images);
}
     
}