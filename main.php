<?php
require_once './controllers/VehiculesControllers.php';
require_once './controllers/ClientsControllers.php';
require_once './controllers/LocationControllers.php';
require_once './controllers/AuthentificationControllers.php';

$vehicles = new Vehicles();
$location = new LocationControllers();
$clients = new  Clients();
$authentication = new AuthentificationControllers();
$linkCSS = '';

/* display page route */
ob_start();
$page = $_GET['page'];
if($page){

    if($page ==='vehicules')
   {
       $vehicles->vehicles();
       $linkCSS ='vehicules';

    }elseif($page==='ajout_vehicule'){ 

            $vehicles->add_vehicles($_POST,$_FILES);
            $linkCSS ='ajouterVehicule';

    }elseif($page==='infos_vehicule'){ 

         $vehicles->infos_vehicles($_GET, $_POST);
         $linkCSS ='info_vehicule';
    }

if($page ==='location'){ 

         $location->renting($_GET, $_POST);
         $linkCSS ='location_vehicule';

}elseif($page==='etats_vehicules'){ 
       /*  $data_etat_vehicules=[];
        if(isset($_POST['sumbit_test'])){
                $data_etat_vehicules[] = $_POST['nom'];
        }*/
         $location->stats_vehicles($_GET, $_POST, $_FILES);
         $linkCSS ='etat_vehicule';
}elseif($page==="etat_vehicule_client"){

    $location->stats_vehicles_clients();
    $linkCSS ='etat_vehicule';
}


if($page==='clients'){ 
    $clients->clients();
    $linkCSS ='all_clients';
}elseif($page==='information_client'){

    $clients->infos_clients();
    $linkCSS ='information_client';
}elseif($page==='ajout_client'){
    $linkCSS ='ajout_client';
    $clients->new_client($_POST);

}elseif($page ==='contravention'){
    $linkCSS ='contravention';
       $clients->contravention();

}

if($page ==='inscription'){
    $authentication->inscription($_POST);
    $linkCSS ='inscription_connexion';
}elseif($page ==='connexion'){
    $authentication->connexion($_POST);
    $linkCSS ='inscription_connexion';
}
 if($page==='telecharger_fichier'){ 

    $location->downloading();
}

}


$content = ob_get_clean();

require './Views/site.php'

?>