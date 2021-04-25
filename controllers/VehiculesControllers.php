<?php
require './model/vehiculesModel.php';
require './utils/Upload.php';
class Vehicles { 


           private $vehiclesModel; 

    public function __construct(){
       
               $this->vehiclesModel = new VehiclesModel();
        
    }

     
    public function vehicles(){
     $fetch_vehicles  = $this->vehiclesModel->fetch_all_vehicles(); 

    require './views/vehicules.php';
    }

    public function add_vehicles(array $post, $files) 
    {   
    
           $data_vehicles =[];

         if(isset($post['submit'])){
            $data_vehicles['marque'] =  htmlspecialchars($post['marque']); 
            $data_vehicles['type'] =  htmlspecialchars($post['type']); 
            $data_vehicles['categorie'] = htmlspecialchars($post['categorie']); 
            $data_vehicles['immatriculation'] =  htmlspecialchars($post['immatriculation']);
            $data_vehicles['carburant'] =  htmlspecialchars($post['carburant']);
            $data_vehicles['kilometrage'] =  htmlspecialchars($post['kilometrage']); 
            $data_vehicles['boite_de_vitesse'] =  htmlspecialchars($post['boite_de_vitesse']); 
            $data_vehicles['prix_d_achat'] =  htmlspecialchars($post['prix_d_achat']);     
            $data_vehicles['date_d_achat'] =  htmlspecialchars($post['date_d_achat']); 

         /* header('Location: main.php?page=ajout_vehicule&marque='.$post['marque']);*/
         }
             
  
          /* upload images */
            
       if(isset($files['photos']) && $files['photos']!==''){ 

           $name_files = Upload::images($files['photos']);
           if(isset($name_files) && count($name_files)> 0){
            $this->vehiclesModel->setNewVehicle($data_vehicles, $name_files);
           }

       }

       
      

        require './Views/ajout_vehicule.php';
    }

    public function infos_vehicles($get){
                  $vehicle = $this->vehiclesModel->fetch_vehicle($get['id']); 
            

        require './Views/information_Vehicule.php';
    }

}

