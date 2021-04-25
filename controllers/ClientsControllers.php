<?php
require './model/ClientsModel.php';
class Clients { 




    private $clientsModel; 

    public function __construct(){
       
               $this->clientsModel = new ClientsModel();
        
    }

public function clients (){


    require './Views/clients.php';
}

public function infos_clients(){ 

    require './Views/information_client.php'; 

}
public function new_client($post){ 

    
    $data_client =[];

    if(isset($post['submit'])){
       $data_client['nom'] =  htmlspecialchars($post['nom']); 
       $data_client['prenom'] =  htmlspecialchars($post['prenom']); 
       $data_client['email'] =  htmlspecialchars($post['email']);
       $data_client['societe'] =  htmlspecialchars($post['societe']);
       $data_client['numero_de_siret'] =  htmlspecialchars($post['num_siret']);
       $data_client['numero_de_telephone'] = htmlspecialchars($post['telephone']); 
       $data_client['permis_de_conduire'] =  htmlspecialchars($post['permis_de_conduire']); 
       $data_client['lieu_d_obtention'] =  htmlspecialchars($post['lieu_d_obtention']); 
       $data_client['date_d_obtention'] =  htmlspecialchars($post['date_d_obtention']);  

    }
        

  $this->clientsModel->setNewClient($data_client);

    require './Views/ajout_client.php'; 

}

public function contravention(){ 

     require './views/contravention.php';
}
}