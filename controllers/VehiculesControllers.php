<?php
require './model/vehiculesModel.php';
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
             
    
         $test = "hello world";



         
       if(isset($files['photos']) && $files['photos']!==''){ 



        $extentions = ['jpeg', 'jpg','png', 'gif']; 

     
        $name_files = [];

      $count_files = count($files['photos']['name']); 

      /*check if unique name has extentions jpeg, jpg, png, gif */
      for($i = 0 ; $i< $count_files; $i++){
        $uniq_name = uniqid('', true);
           $separator = explode('.',$files['photos']['name'][$i]);
           foreach($separator as $value ){ 

            if( in_array($value, $extentions)){
                   $new_name= $uniq_name.'.'.$value;
                 $name_files[] = $new_name;
            }
           }
      }

      /*à revoir la vérification du dossier*/
  
      /**check if  unique_name  exist in directory images, if unique_name exist it will be changed*/
    /*  $dir =  scandir('./images');
      foreach($name_files as $key=>$test){
        $new_uniq_name = uniqid('', true);
              if(in_array($test, $dir)){
                  $tester[$key] = $new_uniq_name.'.png';
              }
       }*/
    
       /* add images on directory */
       $tmp_name = $files['photos']['tmp_name'];
       if(count($tmp_name) > 0){

        for($j = 0; $j< count($tmp_name); $j++){

          move_uploaded_file($tmp_name[$j], './images/'.$name_files[$j]);
    
            }

       }
   



       }

       if(isset($name_files) && count($name_files)> 0){
        $this->vehiclesModel->setNewVehicle($data_vehicles, $name_files);
       }
      

        require './Views/ajout_vehicule.php';
    }

    public function infos_vehicles($get){
                  $vehicle = $this->vehiclesModel->fetch_vehicle($get['id']); 
            

        require './Views/information_Vehicule.php';
    }

}

