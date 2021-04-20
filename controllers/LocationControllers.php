<?php
require './model/LocationModel.php';
require './fpdf/fpdf.php';

class LocationControllers {


         public $locationModel;
         public $pdf;

    public function __construct(){ 

            $this->locationModel = new LocationModel();
            $this->pdf = new FPDF();

    }


    public function renting($get= null, $post= null){ 

            $clients = $this->locationModel->fetch_clients();
            $vehicules = $this->locationModel->fetch_Vehicules();

              /* seach data of client*/
            if(isset($post['search_client_infos'])){ 

            header('Location:main.php?page=location&client_id='.$post['select_client']);
            }
            if(isset($get['client_id'])&& $get['client_id'] !==''){
                
               $clientInfos =  $this->locationModel->fetchInfosClient($get['client_id']);
            }
            /*post data location*/
            $data_location =[];  
         
              if(isset($post['save_location']) && isset($get['client_id']) && $get['client_id']!=='' && $post['id_vehicule'] !==''){

                   $data_location['id_client']  = $get['client_id']; 
                   $data_location['id_vehicules']  = $post['id_vehicule']; 
                   $data_location['date_de_depart']  = $post['date_de_depart']; 
                   $data_location['date_de_retour']  = $post['date_de_retour']; 
                   $data_location['montant_de_garantie']  = $post['montant_de_garantie']; 
                   $data_location['montant_de_la_location']  = $post['montant_de_la_location']; 
                   $data_location['garantie_vol']  = $post['garantie_vol']==='oui'? 1: 0; 
                   $data_location['montant_garantie_vol']  = $post['montant_garantie_vol']; 
                   $data_location['assurance']  = $post['assurance']==='oui'? 1: 0; 
                   $data_location['type_de_paiement']  = $post['type_de_paiement']; 
                   $data_location['garantie_accident']  = $post['garantie_accident']==='oui'? 1: 0; 
                   
              }
              $this->locationModel->set_new_location($data_location);

              /*generate new pdf location */
              $data_generate_pdf_location =  $this->locationModel->getDataLocation();
                if(isset($data_generate_pdf_location) && !empty($data_generate_pdf_location)){
                        $this->new_pdf_location($data_generate_pdf_location);
                        
                }
              $dirPdf = scandir('./filesPdf',SCANDIR_SORT_DESCENDING); 

        require './Views/location.php';
    }


    private function new_pdf_location( $data){
      $unique_name_pdf = uniqid('', true) ;
      $this->pdf->AddPage();
      $this->pdf->SetFont('Arial','',11);
      $this->pdf->SetLeftMargin(25);
      $this->data_pdf($data);
      $this->pdf->Output('F','./filesPdf/'.$unique_name_pdf.'.pdf');

    }
    public function stats_vehicles(){

        require './Views/etat_vehicule.php';
    }

    public function stats_vehicles_clients(){ 

        require './Views/etat_vehicule_client.php';
    }

    public function data_pdf($data){
      $this->pdf->Cell(30,5,utf8_decode('Nom : '.$data[0]['nom']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode('Prenom : '.$data[0]['prenom']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode('Telephone : '.$data[0]['numero_de_telephone']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode('email : '.$data[0]['email']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode('societe : '.$data[0]['societe']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode('N°siret : '.$data[0]['numero_de_siret']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode('permis de conduire : '.$data[0]['nom']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode(' Lieu d\'obention '.$data[0]['lieu_d_obtention']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode('Date d\'obtention '.$data[0]['date_d_obtention']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode(' vehicule '.$data[0]['marque']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode(' boite de vitesse : '.$data[0]['boite_de_vitesse']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode(' carburant : '.$data[0]['carburant']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode('immatriculation '.$data[0]['immatriculation']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode('Date de départ : '.$data[0]['date_de_depart']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode('Date de retour : '.$data[0]['date_de_retour']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode('dépôt de garantie : '.$data[0]['nom']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode('garantie dommage accident : '.$data[0]['garantie_accident']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode('Montant garantie dommage accident '.$data[0]['montant_de_garantie']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode('garantie vol : '.$data[0]['garantie_vol']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode('Montant garantie vol : '.$data[0]['montant_garantie_vol']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode('type de paiement '.$data[0]['type_de_paiement']),0,1,'C');
      $this->pdf->Cell(30,5,utf8_decode('Montant '.$data[0]['montant_de_la_location']),0,1,'C');

    }
}

?>