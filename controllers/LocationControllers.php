<?php
require './vendor/autoload.php';

use Jurosh\PDFMerge\PDFMerger;

require_once './model/LocationModel.php';
require_once './library/fpdf/fpdf.php';
require_once './utils/signature.php';
class LocationControllers
{


  private $locationModel;
  private $pdf;
  private $pdf_merge;

  public function __construct()
  {

    $this->locationModel = new LocationModel();
    $this->pdf = new FPDF();
    $this->pdf_merge = new PDFMerger;
  }


  public function renting($get = null, $post = null)
  {

    $clients = $this->locationModel->fetch_clients();
    $vehicules = $this->locationModel->fetch_Vehicules();

    /* seach data client*/
    if (isset($post['search_client_infos'])) {
      header('Location:main.php?page=location&client_id=' . $post['select_client']);
    }
    if (isset($get['client_id']) && $get['client_id'] !== '') {

      $clientInfos =  $this->locationModel->fetchInfosClient($get['client_id']);
    }
    /*post data location*/
    $data_location = [];

    if (isset($post['save_location']) && isset($get['client_id']) && $get['client_id'] !== '' && $post['id_vehicule'] !== '') {

      $data_location['id_client']  = $get['client_id'];
      $data_location['id_vehicules']  = $post['id_vehicule'];
      $data_location['date_de_depart']  = $post['date_de_depart'];
      $data_location['date_de_retour']  = $post['date_de_retour'];
      $data_location['montant_de_garantie']  = $post['montant_de_garantie'];
      $data_location['montant_de_la_location']  = $post['montant_de_la_location'];
      $data_location['garantie_vol']  = $post['garantie_vol'] === 'oui' ? 1 : 0;
      $data_location['montant_garantie_vol']  = $post['montant_garantie_vol'];
      $data_location['assurance']  = $post['assurance'] === 'oui' ? 1 : 0;
      $data_location['type_de_paiement']  = $post['type_de_paiement'];
      $data_location['garantie_accident']  = $post['garantie_accident'] === 'oui' ? 1 : 0;
    }
    $this->locationModel->set_new_location($data_location);


    /*signature*/
    if(isset($post['signature_rdk']) &&!empty($post['signature_rdk'])){ 
              
      Signature::image_signature($post['signature_rdk'], './filesPdf/signature/rdk');  
  }
                  $dirSignature = scandir('./filesPdf/signature/client/', SCANDIR_SORT_DESCENDING); 
                     $lastSignature = $dirSignature[0];
    /* generate new pdf location */
    $data_generate_pdf_location =  $this->locationModel->getDataLocation();
    if (isset($data_generate_pdf_location) && !empty($data_generate_pdf_location)) {
      $this->new_pdf_location($data_generate_pdf_location, $lastSignature);
    }
    $dirPdfLocation = scandir('./filesPdf/contrat_de_location', SCANDIR_SORT_DESCENDING);
    /* get last id location */
    $last_id_location = $this->locationModel->get_last_id_location();





    require './Views/location.php';
  }



  public function stats_vehicles($get = null, $post, $files = null)
  {

/*signature*/
if(isset($post['signature-client-etat']) &&!empty($post['signature-client-etat'])){ 
              
  Signature::image_signature($post['signature-client-etat'], './filesPdf/signature/clientEtat/');  
}
if(isset($post['signature-rdk-etat']) &&!empty($post['signature-rdk-etat'])){ 
          
Signature::image_signature($post['signature-rdk-etat'], './filesPdf/signature/rdk/');  
}


    $data_etat_vehicule = [];
    $errors = [];
    if (isset($get['id_location']) && $get['id_location'] !== '') {
      $data_etat_vehicule[] = $get['id_location'];
    }


    $data_location = $this->locationModel->get_date_location_etat($get['id_location']);

    if (isset($post['submit_etat_vehicule'])) {
      $data_etat_vehicule[] = $post['kilometrage_depart'];
      $data_etat_vehicule[] = $post['niveau_depart'];
      $data_etat_vehicule[] = $post['observation_depart'];
    }

    if (isset($files['photo_vehicule_depart']) && count($files['photo_vehicule_depart']['name']) <= 12 && isset($get['id_location']) ) {

      $name_files_photos_etat = Upload::images($files['photo_vehicule_depart']);
      if (isset($name_files_photos_etat) && count($name_files_photos_etat) > 0) {
        $this->locationModel->set_etat_vehicule($data_etat_vehicule, $name_files_photos_etat);
      }
    }else{ 
    $errors[]= 'vous devez rentrer au moins 1 ?? 12 photos(s)';
    }

    $data_generate_pdf_etat_de_vehicule = $this->locationModel->get_last_data_etat_vehicule();
    $data_generate_pdf_images_etat_de_vehicule = $this->locationModel->get_last_image_etat_vehicule();
       $dir_signature_rdk  = scandir('./filesPdf/signature/rdk/',SCANDIR_SORT_DESCENDING );
       $dir_signature_client = scandir('./filesPdf/signature/clientEtat/',SCANDIR_SORT_DESCENDING );
            $signature_rdk  = $dir_signature_rdk[0];
            $signature_client = $dir_signature_client[0];

    if (isset($data_generate_pdf_etat_de_vehicule) && !empty($data_generate_pdf_etat_de_vehicule) & isset($post['submit_etat_vehicule'])) {
      $this->new_pdf_etat_vehicule($data_generate_pdf_etat_de_vehicule, $data_generate_pdf_images_etat_de_vehicule,$signature_rdk, $signature_client  );
    }

    /*generate contrat*/


    require './Views/etat_vehicule.php';
  }

  public  function stats_vehicles_clients()
  {

    require './Views/etat_vehicule_client.php';
  }


  public  function downloading()

  {    $dirPdfLocation = scandir('./filesPdf/contrat_de_location', SCANDIR_SORT_DESCENDING);
    $dirPdfEtat = scandir('./filesPdf/etat_vehicule', SCANDIR_SORT_DESCENDING);
  
    $uniq_file_name = uniqid('', true);
      $this->pdf_merge->addPDF('./filesPdf/contrat_de_location/' . $dirPdfLocation[0], 'all');
      $this->pdf_merge->addPDF('./filesPdf/etat_vehicule/' . $dirPdfEtat[0], 'all');
    $this->pdf_merge->addPDF('./filesPdf/conditions/cgl.pdf', 'all');
    $this->pdf_merge->merge('file', './filesPdf/contrat/' . $uniq_file_name . '.pdf');
    
   
    $dirPdfOutput = scandir('./filesPdf/contrat', SCANDIR_SORT_DESCENDING);

    require './Views/telecharger.php';
  }


  private function new_pdf_location($data, $last_signature)
  {
    $unique_name_pdf = uniqid('', true);
    $this->pdf->AddPage();
    $this->header($data, $last_signature);
    $this->pdf->Output('F', './filesPdf/contrat_de_location/' . $unique_name_pdf . '.pdf');
  }

  public  function new_pdf_etat_vehicule($data, $name_files, $signature_rdk, $signature_client)
  {
    $unique_name_pdf = uniqid('', true);
    $this->pdf->AddPage();
    $this->head_etat($data, $name_files);
    $this->pdf->AddPage();
    $this->pdf->Ln(100);
    $this->watching($data['observation_depart']);
    $this->condition($signature_rdk, $signature_client);
    $this->pdf->Output('F', './filesPdf/etat_vehicule/' . $unique_name_pdf . '.pdf');
  }

























  /*generate pdf location
    
    structure: 
     -header
     -occupant
     -vehicles
     -date_contrat
     -garantie
     -reglement
     -footer
    */
  public function header($data_location, $last_signature)
  {
    // Police Arial gras 15
    $this->pdf->Image('./views/images/rdk_financial.png', 10, 2, 30, 30);
    $this->pdf->SetFont('Arial', 'B', 22);
    // D??calage
    $this->pdf->Cell(80);
    // Titre encadr??
    $this->pdf->setFillColor(230, 230, 230);
    $this->pdf->Cell(30, 30, 'Contrat de location', 0, 1, 'C');
    // Saut de ligne
    $this->pdf->Ln(15);
    $this->occupant($data_location, $last_signature);
  }




  public function occupant($data_location, $last_signature)
  {
    $this->pdf->SetFont('Arial', '', 12);
    $this->pdf->SetFillColor(200, 220, 255);
    $this->pdf->Cell(50, 5, 'Locataire', 0, 0, 'C', true);
    $this->pdf->Cell(140, 5, '', 0, 1, '', true);
    $this->pdf->Ln(2);
    $this->pdf->SetFont('Arial', '', 10);
    $this->pdf->SetFillColor(255, 255, 255);
    $this->pdf->Cell(100, 5, utf8_decode('Nom : ' . $data_location[0]['nom']), 0, 0, 'L', true);
    $this->pdf->Cell(50, 5, utf8_decode('Permis de conduire: ' . $data_location[0]['permis_de_conduire']), 0, 1, 'L', true);
    $this->pdf->Cell(100, 5, utf8_decode('Prenom: ' . $data_location[0]['prenom']), 0, 0, 'L', true);
    $this->pdf->Cell(50, 5, utf8_decode('Lieu d\' obtention: ' . $data_location[0]['lieu_d_obtention']), 0, 1, 'L', true);
    $this->pdf->Cell(100, 5, utf8_decode('Societ?? : ' . $data_location[0]['societe']), 0, 0, 'L', true);
    $this->pdf->Cell(50, 5, utf8_decode('Date d\'obention : ' . $data_location[0]['date_d_obtention']), 0, 1, 'L', true);
    $this->pdf->Cell(100, 5, utf8_decode('Numero de siret : ' . $data_location[0]['numero_de_siret']), 0, 0, 'L', true);
    $this->pdf->Cell(50, 5, utf8_decode('Email : ' . $data_location[0]['email']), 0, 1, 'L', true);
    $this->pdf->Cell(100, 5, utf8_decode('Telephone: ' . $data_location[0]['numero_de_telephone']), 0, 1, 'L', true);
    $this->vehicles($data_location, $last_signature);
  }

  public function vehicles($data_location, $last_signature)
  {
    $this->pdf->SetFont('Arial', '', 12);
    $this->pdf->SetFillColor(200, 220, 255);
    $this->pdf->Cell(50, 5, 'Vehicule', 0, 0, 'C', true);
    $this->pdf->Cell(140, 5, '', 0, 1, '', true);
    $this->pdf->Ln(2);
    $this->pdf->SetFont('Arial', '', 10);
    $this->pdf->SetFillColor(255, 255, 255);
    $this->pdf->Cell(100, 5, utf8_decode('Marque: ' . $data_location[0]['marque']), 0, 0, 'L', true);
    $this->pdf->Cell(50, 5, utf8_decode('Model : ' . $data_location[0]['type']), 0, 1, 'L', true);
    $this->pdf->Cell(100, 5, utf8_decode('immatriculation : ' . $data_location[0]['immatriculation']), 0, 0, 'L', true);
    $this->pdf->Cell(50, 5, utf8_decode('Categorie : ' . $data_location[0]['categorie']), 0, 1, 'L', true);
    $this->date_contrat($data_location, $last_signature);
  }
  public function date_contrat($data_location, $last_signature)
  {
    $this->pdf->SetFont('Arial', '', 12);
    $this->pdf->SetFillColor(200, 220, 255);
    $this->pdf->Cell(90, 5, utf8_decode('Date de d??part'), 0, 0, 'C', true);
    $this->pdf->Cell(8);
    $this->pdf->Cell(90, 5, 'Date de retour', 0, 1, 'C', true);
    $this->pdf->Cell(50);
    $this->pdf->Ln(2);
    $this->pdf->SetFont('Arial', '', 10);
    $this->pdf->SetFillColor(255, 255, 255);
    /*date starting*/
    $this->pdf->Cell(100, 5, utf8_decode(' date : ' . $data_location[0]['date_de_depart']), 0, 0, 'L', true);
    /*date back*/
    $this->pdf->Cell(50, 4, utf8_decode(' date : ' . $data_location[0]['date_de_retour']), 0, 1, 'L', true);
    /*hours starting*/
    $this->pdf->Cell(100, 5, utf8_decode('Heure: 12:30'), 0, 0, 'L', true);
    $this->pdf->Cell(50, 5, utf8_decode('Heure: 12:30'), 0, 1, 'L', true);
    $this->pdf->Cell(100, 5, utf8_decode('lieu : Nantes'), 0, 0, 'L', true);
    $this->pdf->Cell(50, 5, utf8_decode('lieu : Nantes'), 0, 1, 'L', true);
    $this->garantie($data_location, $last_signature);
  }

  public function garantie($data_location, $last_signature)
  {

    $this->pdf->SetFont('Arial', '', 12);
    $this->pdf->SetFillColor(200, 220, 255);
    $this->pdf->Cell(60, 5, utf8_decode('Garanties compl??mentaires'), 0, 0, 'C', true);
    $this->pdf->Cell(129, 5, '', 0, 1, '', true);
    $this->pdf->Ln(2);
    $this->pdf->SetFont('Arial', '', 10);
    $this->pdf->SetFillColor(255, 255, 255);
    $this->pdf->Cell(100, 5, utf8_decode('Garantie dommage accident : ' . $data_location[0]['garantie_accident']), 0, 0, 'L', true);
    $this->pdf->Cell(50, 5, utf8_decode('Franchise euros TTC : ' . $data_location[0]['montant_de_garantie']), 0, 1, 'L', true);
    $this->pdf->Cell(100, 5, utf8_decode('Garantie vol : ' . $data_location[0]['garantie_vol']), 0, 0, 'L', true);
    $this->pdf->Cell(50, 5, utf8_decode('Franchise euros TTC : ' . $data_location[0]['montant_garantie_vol']), 0, 1, 'L', true);
    $this->pdf->Cell(50, 5, utf8_decode('Assurance personnes transport??es : ' . $data_location[0]['assurance']), 0, 1, 'L', true);
    $this->reglement($data_location, $last_signature);
  }
  public function reglement($data_location, $last_signature)
  {
    $this->pdf->SetFont('Arial', '', 12);
    $this->pdf->SetFillColor(200, 220, 255);
    $this->pdf->Cell(50, 5, utf8_decode('R??glement'), 0, 0, 'C', true);
    $this->pdf->Cell(140, 5, '', 0, 1, '', true);
    $this->pdf->Ln(2);
    $this->pdf->SetFont('Arial', 'B', 10);
    $this->pdf->SetFillColor(255, 255, 255);
    $this->pdf->Cell(50, 10, utf8_decode('En apposant sa signature, le locataire :'), 0, 1, 'L', true);
    $this->pdf->Cell(20, 5, utf8_decode('Certifie :'), 0, 0, 'L', true);
    $this->pdf->SetFont('Arial', '', 10);
    $this->pdf->write(5, utf8_decode('que les informations mentionn??es ci-dessus sont exactes, et ??tre en possession d\' un permis de conduire valide.'));
    $this->pdf->SetFont('Arial', 'B', 10);
    $this->pdf->Ln(7);
    $this->pdf->Cell(20, 5, utf8_decode('Autorise :'), 0, 0, 'L', true);
    $this->pdf->SetFont('Arial', '', 10);
    $this->pdf->write(5, utf8_decode('le loueur ?? recouvrer le montant de la franchise et des frais accessoires au moyen de la carte de cr??dit ayant servi au paiement de la location.'));
    $this->pdf->SetFont('Arial', 'B', 10);
    $this->pdf->Ln(7);
    $this->pdf->Cell(20, 5, utf8_decode('Reconna??t :'), 0, 0, 'L', true);
    $this->pdf->SetFont('Arial', '', 10);
    $this->pdf->write(5, utf8_decode('Avoir pris connaissance et accepter les conditions stipul??es ci-dessus, ainsi que les conditions g??n??rales de location figurant!??
  la derni??re page de ce contrat de location ; sa responsabilit?? pour toute contravention ?? la r??glementation relative ?? la circulation routi??re et
  au stationnement, l??galement ?? sa charge ; avoir re??u les documents administratifs relatifs au!v??hicule.,'));
    $this->pdf->SetFont('Arial', 'B', 10);
    $this->pdf->Ln(7);
    $this->pdf->Cell(20, 5, utf8_decode('Confirme :'), 0, 0, 'L', true);
    $this->pdf->SetFont('Arial', '', 10);
    $this->pdf->write(5, utf8_decode('que les informations mentionn??es ci-dessus sont exactes, et ??tre en possession d\' un permis de conduire valide.'));
    $this->pdf->Cell(175, 16, '', 'B', 1, '', true);
    $this->pdf->Ln(5);
    $this->pdf->Cell(115, 5, utf8_decode('D??p??t de garantie : ' . $data_location[0]['montant_de_garantie']), 0, 0, 'L', true);
    $this->pdf->Cell(50, 5, utf8_decode('Fait ?? Nantes le 10/10/2021'), 0, 1, 'L', true);
    $this->pdf->Cell(115, 5, utf8_decode('Total Factur?? : ' . $data_location[0]['montant_de_la_location']), 0, 0, 'L', true);
    $this->pdf->Cell(50, 5, utf8_decode('Signature :'), 0, 1, 'L', true);
    $this->pdf->Image('./filesPdf/signature/client/'.$last_signature, 135,250, 25, 20, 'PNG');
    $this->pdf->Cell(115, 5, utf8_decode(' paiement : ' . $data_location[0]['type_de_paiement']), 0, 1, 'L', true);
  }
  function footer()
  {
    // Positionnement ?? 1,5 cm du bas
    $this->pdf->SetY(-15);
    // Police Arial italique 8
    $this->pdf->SetFont('Arial', 'I', 8);
    // Num??ro de page centr??
    $this->pdf->Cell(0, 10, 'Page ' . $this->pdf->PageNo(), 0, 0, 'C');
  }





  /*generate pdf etat vehicule
 structure : 
  -head_etat
  -infos
  -starting
  -image_starting
  -watching
  -back
  -image_back
  -condition

*/
  function head_etat($data_etat_vehicule, $name_files)
  {
    // Police Arial gras 15
    $this->pdf->Image('./views/images/rdk_financial.png', 10, 2, 30, 30);
    $this->pdf->SetFont('Arial', 'B', 22);
    // D??calage
    $this->pdf->Cell(80);
    // Titre encadr??
    $this->pdf->setFillColor(230, 230, 230);
    $this->pdf->Cell(30, 30, utf8_decode(' Fiche d\'??tat du vehicule'), 0, 1, 'C');
    // Saut de ligne
    $this->pdf->Ln(15);
    $this->infos($data_etat_vehicule, $name_files);
  }

  public function infos($data_etat_vehicule, $name_files)
  {
    $this->pdf->setFillColor(255, 255, 255);
    $this->pdf->SetFont('Arial', '', 11);
    $this->pdf->Cell(100, 5, utf8_decode('Nom : ' . $data_etat_vehicule['nom']), 0, 1, 'L', true);
    $this->pdf->Cell(50, 5, utf8_decode('Prenom : ' . $data_etat_vehicule['prenom']), 0, 1, 'L', true);
    $this->pdf->Cell(100, 5, utf8_decode('Societe : ' . $data_etat_vehicule['societe']), 0, 1, 'L', true);
    $this->pdf->Cell(100, 5, utf8_decode('Numero de siret : ' . $data_etat_vehicule['numero_de_siret']), 0, 1, 'L', true);
    $this->pdf->Cell(100, 5, utf8_decode('immatriculation : ' . $data_etat_vehicule['immatriculation']), 0, 1, 'L', true);
    $this->pdf->Ln(5);
    $this->starting($data_etat_vehicule, $name_files);
  }


  public function starting($data_etat_vehicule, $name_files)
  {
    $this->pdf->SetFont('Arial', '', 12);
    $this->pdf->SetFillColor(137, 210, 23);
    $this->pdf->Cell(50, 5, utf8_decode('Au d??part'), 0, 0, 'C', true);
    $this->pdf->Cell(140, 5, '', 0, 1, '', true);
    $this->pdf->Ln(2);
    $this->pdf->SetFont('Arial', '', 10);
    $this->pdf->SetFillColor(255, 255, 255);
    $this->pdf->Cell(100, 5, utf8_decode('Kilometrage : ' . $data_etat_vehicule['kilometrage']), 0, 0, 'L', true);
    $this->pdf->Cell(50, 5, utf8_decode('Carburant : ' . $data_etat_vehicule['carburant']), 0, 1, 'L', true);
    // $this->pdf->Cell(100, 5, utf8_decode('Niveau : ' . $data_etat_vehicule['niveau_depart']), 0, 1, 'L', true);

    $this->images_starting($name_files);
  }


  public function images_starting($name_files)
  {
    $this->pdf->Ln(5);
    $this->pdf->Rect(15, 110, 180, 180, 'D');
    if (!empty($name_files['image_1'])) $this->pdf->Image('./images/' . $name_files['image_1'], 20, 115, 50, 50);
    if (!empty($name_files['image_2'])) $this->pdf->Image('./images/' . $name_files['image_2'], 80, 115, 50, 50);
    if (!empty($name_files['image_3'])) $this->pdf->Image('./images/' . $name_files['image_3'], 140, 115, 50, 50);
    if (!empty($name_files['image_4'])) $this->pdf->Image('./images/' . $name_files['image_4'], 20, 115, 50, 50);
    if (!empty($name_files['image_5'])) $this->pdf->Image('./images/' .$name_files['image_5'], 20, 170, 50, 50);
    if(!empty($name_files['image_6'])) $this->pdf->Image('./images/'.$name_files['image_6'],80,170,50,50);
 if(!empty($name_files['image_7']))$this->pdf->Image('./images/'.$name_files['image_7'],140,170,50,50);
 if(!empty($name_files['image_8'])) $this->pdf->Image('./images/'.$name_files['image_8'],20,230,50,50);
 if(!empty($name_files['image_9'])) $this->pdf->Image('./images/'.$name_files['image_9'],80,230,50,50);
 if(!empty($name_files['image_10'])) $this->pdf->Image('./images/'.$name_files['image_10'],140,230,50,50);
  }
  public function back()
  {
    $this->pdf->SetFont('Arial', '', 12);
    $this->pdf->SetFillColor(137, 210, 23);
    $this->pdf->Cell(50, 5, utf8_decode('Au Retour'), 0, 0, 'C', true);
    $this->pdf->Cell(140, 5, '', 0, 1, '', true);
    $this->pdf->Ln(2);
    $this->pdf->SetFont('Arial', '', 10);
    $this->pdf->SetFillColor(255, 255, 255);
    $this->pdf->Cell(100, 5, utf8_decode('Kilometrage : 250000'), 0, 0, 'L', true);
    $this->pdf->Cell(50, 5, utf8_decode('Carburant : Essence'), 0, 1, 'L', true);
    $this->pdf->Cell(100, 5, utf8_decode('Niveau : 1/5'), 0, 1, 'L', true);
    //$this->Image('./logo.png',100,400,30,30);
    //$this->Image('./logo.png',500,2,30,30);

  }
  public function images_back()
  {
    $this->pdf->Ln(5);
    $this->pdf->Rect(15, 80, 180, 180, 'D');
    $this->pdf->Image('.images/rdk_financial.png', 20, 90, 50, 50);
    $this->pdf->Image('.images/rdk_financial.png', 80, 90, 50, 50);
    $this->pdf->Image('.images/rdk_financial.png', 140, 90, 50, 50);
    $this->pdf->Image('.images/rdk_financial.png', 20, 150, 50, 50);
    $this->pdf->Image('.images/rdk_financial.png', 20, 150, 50, 50);
    $this->pdf->Image('.images/rdk_financial.png', 80, 150, 50, 50);
    $this->pdf->Image('.images/rdk_finacial.png', 140, 150, 50, 50);
    $this->pdf->Image('.images/rdk_finacial.png', 20, 200, 50, 50);
    $this->pdf->Image('.images/rdk_financial.png', 80, 200, 50, 50);
    $this->pdf->Image('.images/rdk_finacial.png', 140, 200, 50, 50);;
  }
  public function watching($data)
  {
    $this->pdf->Ln(6);
    $this->pdf->SetFont('Arial', '', 11);
    $this->pdf->SetFillColor(137, 210, 23);
    $this->pdf->Cell(90, 5, utf8_decode('Au Observation compl??mentaires'), 0, 0, 'C', true);
    $this->pdf->Cell(90, 5, '', 0, 1, '', true);
    $this->pdf->Ln(2);
    $this->pdf->write(5, utf8_decode($data));
    $this->pdf->Ln(5);
  }

  public function condition($signature_rdk, $signature_client)
  {
    $this->pdf->Ln(2);
    $this->pdf->SetFont('Arial', 'B', 10);
    $this->pdf->SetFillColor(255, 255, 255);
    $this->pdf->Cell(50, 10, utf8_decode('Avant	de	signer,	le	locataire : :'), 0, 1, 'L', true);
    $this->pdf->Cell(20, 5, utf8_decode('Confirme :'), 0, 0, 'L', true);
    $this->pdf->SetFont('Arial', '', 10);
    $this->pdf->write(5, utf8_decode('voir	pris	connaissance	de	l?????tat	du	v??hicule	tel	que	renseign??	par	le	loueur.'));
    $this->pdf->SetFont('Arial', 'B', 10);
    $this->pdf->Ln(7);
    $this->pdf->Cell(20, 5, utf8_decode('S\'engage :'), 0, 0, 'L', true);
    $this->pdf->SetFont('Arial', '', 10);
    $this->pdf->write(5, utf8_decode('??	v??rifier	que	son	??tat	apparent	est	conforme	au	descriptif	ci-dessus	et	s???il	n?????tait	pas	exact	d???en
faire	modifier	la	description	par	le	loueur,	conform??ment	??	l???art.	2	des	conditions	g??n??rales	de	location.'));
    $this->pdf->SetFont('Arial', 'B', 10);
    $this->pdf->Ln(7);
    $this->pdf->Cell(20, 5, utf8_decode('S\'engage :'), 0, 0, 'L', true);
    $this->pdf->SetFont('Arial', '', 10);
    $this->pdf->write(5, utf8_decode('express??ment	 ??	 signaler	 tout	 dommage,	 avec	 ou	 sans	 tiers,	 survenu	 au	 v??hicule	 pendant	 la
location	et	??	remettre	??	son	retour	un	constat	amiable	d???accident	d??ment	compl??t??.'));
    $this->pdf->SetFont('Arial', 'B', 10);
    $this->pdf->Ln(7);
    $this->pdf->Cell(20, 5, utf8_decode('Reconna??t :'), 0, 0, 'L', true);
    $this->pdf->SetFont('Arial', '', 10);
    $this->pdf->write(5, utf8_decode('	avoir	pris	connaissance	du	contrat	de	location	et	de	ses	conditions	g??n??rales.'));
    $this->pdf->Ln(15);
    $this->pdf->Cell(115, 5, utf8_decode('Fait ?? Nantes le 10/10/2021'), 0, 0, 'L', true);
    $this->pdf->Cell(50, 5, utf8_decode('Fait ?? Nantes le 10/10/2021:'), 0, 1, 'L', true);
    $this->pdf->Cell(115, 5, utf8_decode('Signature'), 0, 0, 'L', true);
    $this->pdf->Image('./filesPdf/signature/rdk/'.$signature_rdk, 20,230, 30, 20, 'PNG');
    $this->pdf->Cell(50, 5, utf8_decode('Signature :'), 0, 1, 'L', true);
    $this->pdf->Image('./filesPdf/signature/clientEtat/'.$signature_client, 135,230, 30, 20, 'PNG');

  }
}
