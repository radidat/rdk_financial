<?php
require './model/DataBase.php';

class VehiclesModel extends DataBase{ 


     public function __construct()
     {

     }



     /* display all vehicules */
    public function fetch_all_vehicles(){ 
        $db= $this->dbConnect();
        $data_vehicles =[];
      $fetch_vehicles = $db-> prepare("SELECT vehicules.id, images_vehicules.image_1, vehicules.marque FROM vehicules
         INNER JOIN images_vehicules ON vehicules.id = images_vehicules.id_vehicules ");
          $fetch_vehicles->execute(); 
          while($row = $fetch_vehicles->fetch()){ 
              $data_vehicles[] = $row;
          }
            
         return$data_vehicles;

     }
     /* info vehicule*/
     public function fetch_vehicle($id){ 
        $db= $this->dbConnect();
        $data_vehicles =[];
      $fetch_vehicles = $db-> prepare("SELECT* FROM vehicules
         INNER JOIN images_vehicules ON vehicules.id = images_vehicules.id_vehicules WHERE vehicules.id = :id");
            $fetch_vehicles->bindParam('id', $id);
          $fetch_vehicles->execute(); 
        $data_vehicle = $fetch_vehicles->fetch(); 
  
         return$data_vehicle;

     }

     public function setNewVehicle( array $data_vehicles =null, array $images_vehicles =null)
     {

        $db = $this->dbConnect();
             
        $images = $images_vehicles;
         if(!empty($data_vehicles)){ 
             /*add data vehicles on table vehicules*/
            $req  = "INSERT INTO vehicules (marque, type, categorie, immatriculation,
             carburant, kilometrage, boite_de_vitesse, prix_d_achat, date_d_achat) 
             VALUES (:marque, :type, :categorie, :immatriculation, :carburant, :kilometrage, :boite_de_vitesse, :prix_d_achat, :date_d_achat)";
                 $statement =$db->prepare($req); 
                 $statement->execute($data_vehicles);
                 $last_id = $db->lastInsertId();

                 /*add images name on table images_vehicules*/
                 if(isset($last_id)){ 
                     $images[] = $last_id;
                         
                    if(count($images) === 2){ 
                        $requestImages= "INSERT INTO images_vehicules (image_1, id_vehicules) 
                        VALUES (?, ?)";
                    }
                    if(count($images) === 3){ 
                        $requestImages= "INSERT INTO images_vehicules (image_1, image_2, id_vehicules) 
                        VALUES (?, ?, ?)";
                    }
                    if(count($images) === 4){ 
                        $requestImages  = "INSERT INTO images_vehicules (image_1, image_2, image_3, id_vehicules) 
                        VALUES ( ?, ?, ?, ?)";
                    }
                    if(count($images) === 5){ 
                        $requestImages  = "INSERT INTO images_vehicules (image_1, image_2, image_3, image_4, id_vehicules) 
                        VALUES (?, ?, ?, ?, ?)";
                    }
                    if(count($images) === 6){ 
                        $requestImages  = "INSERT INTO  images_vehicules (image_1,image_2, image_3, image_4, image_5, id_vehicules) 
                        VALUES (?, ?, ?, ?, ?, ?)";
                    }
                    if(count($images) === 7){ 
                        $requestImages  = "INSERT INTO images_vehicules (image_1,image_2, image_3, image_4, image_5, image_6, id_vehicules) 
                        VALUES (?, ?, ?, ?, ?, ?, ?)";
                    }
                    if(count($images) === 8){ 
                        $requestImages  = "INSERT INTO images_vehicules (image_1,image_2, image_3, image_4, image_5, image_6,image_7, id_vehicules) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                    }
                    if(count($images) === 9){ 
                        $requestImages  = "INSERT INTO images_vehicules (image_1,image_2, image_3, image_4, image_5, image_6,image_7, image_8, id_vehicules) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    }
                    if(count($images) === 10){ 
                        $requestImages  = "INSERT INTO images_vehicules( image_1,image_2, image_3, image_4, image_5, image_6,image_7, image_8, image_9, id_vehicules) 
                        VALUES (?, ?, ?, ?, ?, ?,?, ?, ?, ?)";
                    }
                    if(count($images) === 11){ 
                        $requestImages  = "INSERT INTO images_vehicules (image_1,image_2, image_3, image_4, image_5, image_6,image_7, image_8, image_9, image_10,  id_vehicules) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    }
                    if(count($images) === 12){ 
                        $requestImages  = "INSERT INTO images_vehicules (image_1,image_2, image_3, image_4, image_5, image_6,image_7, image_8, image_9, image_10, image_11, id_vehicules) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    }
                    if(count($images) === 13){ 
                        $requestImages  = "INSERT INTO images_vehicules (image_1,image_2, image_3, image_4, image_5, image_6,image_7, image_8, image_9, image_10, image_11, image_12, id_vehicules) 
                        VALUES (?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?)";
                    }

                    $insertImages =$db->prepare($requestImages); 
                    $insertImages->execute($images);
                   /* var_dump(count($images));*/
                 }
         }
    
     

     }



     
}