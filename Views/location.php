
  <div id='bg-location'>
  <div id="background"></div>


  <header >
      
      <button class='btn-open'>
        <img src='./images/icons8-menu.svg'>
     </button>
       <nav class= 'navbarHead' id='sidebarjs'>
         <button type="button" class='close'><i class="fas fa-times"></i></button>
         <img src='./images/rdk_financial.png' alt="logo" class='logo-rdk'>
         <div class='menu'>
             <div class='menu-item'>
                 <h3>Réservation</h3>
                 <div>  
                     <ul class='sous-menu'>
                         <li><a href='#'>Planning de réservation</a></li>
                         <li><a href="?page=location">Réaliser un contrat de location</a></li>
                        <li> <a href="?page=clients">Clients</a></li>
                     </ul>
                 </div>
             </div>
             <div class='menu-item'>
               <h3>Gestion des véhicules</h3>
               <div>
                   <ul class='sous-menu'>
                    <li><a href='?page=ajout_vehicule'>Ajouter un véhicule</a></li>
                    <li><a href='?page=ajout_client'>Ajouter un nouveau client</a></li>
                    <li><a href='?page=vehicules'>Véhicules</a></li>
                   </ul>
               </div>
           </div>
         </div> 
       </nav>
    </header>
  <h1 class='title-head'>Contrat de location</h1>


<div class= 'search-client row'>
<a type='button' class='btn-add-client col-12' href="?page=ajout_client"> nouveau client</a>
<form  method='POST' class='col-12 row select-client'>
<select name='select_client' class="form-select form-select-sm col-12 col-lg-8" aria-label=".form-select-sm example">
  <option value=''>Selectionnez un client</option>
  <?php foreach( $clients as $client):?>
   <option value ='<?=$client['id']?>'> <?= $client['nom'].' '.$client['prenom']?></option>
   <?php endforeach ?>
</select>
<button type='submit' name='search_client_infos' class='btn-search-client col-12 col-lg-4'>afficher les informations du client</button>
</form>
 <?= isset($_POST['save_location']) ? "<a href='./filesPdf/".$dirPdf[0]."' target='_blank' class='btn-pdf'> telecharger le fichier</a>":''?>
</div>

  <div class='container-data'>

    <form class='row location' method='POST' autocapitalize="off"  >

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Nom</label>
        <input type="text" class="form-control" name='nom' value ='<?=isset($clientInfos)? htmlentities($clientInfos['nom']): ''?>' required>
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Prenom</label>
        <input type="text" class="form-control" name='prenom' value ='<?=isset($clientInfos)? htmlentities($clientInfos['prenom']): ''?>' required >
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Telephone</label>
        <input type="text" class="form-control" name='telephone' value ='<?= isset($clientInfos)? htmlentities($clientInfos['numero_de_telephone']):''?>' required >
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" name='email' value ='<?=isset($clientInfos)? htmlentities($clientInfos['email']):''?> ' >
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Société</label>
        <input type="text" class="form-control" name='societe' value ='<?= isset($clientInfos)? htmlentities(trim($clientInfos['societe'])):''?>' required>
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">N°siret</label>
        <input type="text" class="form-control" name='numero_de_siret'value ='<?=isset($clientInfos)? htmlentities($clientInfos['numero_de_siret']): ''?>' required>
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Permis de conduire</label>
        <input type="text" class="form-control" name='permis_de_conduire' value ='<?=isset($clientInfos)? htmlentities($clientInfos['permis_de_conduire']):''?>' required>
      </div>


      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Lieu d'obtention</label>
        <input type="text" class="form-control" name='lieu_d_obtention' value ='<?=isset($clientInfos)? htmlentities($clientInfos['lieu_d_obtention']) :''?>' required>
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Date d'obtention</label>
        <input type="text" class="form-control"value ='<?=isset($clientInfos)? htmlentities($clientInfos['date_d_obtention']):''?>' required >
      </div>

      <div class=' mb-3 col-6 col-md-4 col-lg-3' style="margin-top: 35px;">
        <select class="form-select w-auto col-md-5 form-select-sm" name='id_vehicule'aria-label=".form-select-sm example">
          <option value=''>Choisir un vehicule</option>
          <?php foreach( $vehicules as $vehicule):?>
   <option value ='<?=$vehicule['id']?>'><?=$vehicule['marque']?> (<?=$vehicule['immatriculation']?>)</option>
   <?php endforeach?>
        </select>
      </div>

      <div class="mb-3 col-6  col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Date de départ</label>
        <input type="date" class="form-control" name='date_de_depart' required>
      </div>


      <div class="mb-3 col-6  col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Date de retour</label>
        <input type="date" class="form-control" name='date_de_retour' required>
      </div>

      <div class="mb-3 col-6  col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label"  required>Dépôt de garantie</label>
        <input type="number" class="form-control" name="montant_de_garantie" >
      </div>

      <div class="mb-3 col-6  col-md-4 col-lg-3">
        <label>Garantie dommage accident</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="garantie_accident" value='oui' id="flexRadioDefault1" checked>
          <label class="form-check-label" for="garantie_accident">
            oui
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="garantie_accident" value ='none' id="flexRadioDefault2" >
          <label class="form-check-label" for="garantie_accident">
            non
          </label>
        </div>
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Montant garantie dommage accident</label>
        <input type="number" class="form-control" >
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label>Garantie vol </label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="garantie_vol" value ='oui'id="flexRadioDefault1" checked>
          <label class="form-check-label" for="garantie_vol">
            oui
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="garantie_vol" value ='non' id="flexRadioDefault2" >
          <label class="form-check-label" for="garantie_vol">
            non
          </label>
        </div>
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" name='montant_garantie_vol' class="form-label">Montant garantie vol</label>
        <input type="number" class="form-control" name='montant_garantie_vol' >
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label>Assurance personnes transportées </label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="assurance" value=' oui'id="flexRadioDefault1" checked>
          <label class="form-check-label" for="assurance">
            oui
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="assurance" value ='non'id="flexRadioDefault2" >
          <label class="form-check-label" for="assurance">
            non
          </label>
        </div>
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label>Type de paiement </label>
        <div class="form-check">
          <input class="form-check-input" checke type="radio" name="type_de_paiement" value='carte bancaire' id="flexRadioDefault1" checked>
          <label class="form-check-label" for="type_de_paiement">
            carte bancaire
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="type_de_paiement" value='especes' id="flexRadioDefault2" >
          <label class="form-check-label" for="type_de_paiement">
            Espèces
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="type_de_paiement" value='virement'id="flexRadioDefault2" >
          <label class="form-check-label" for="type_de_paiement">
            virement
          </label>
        </div>
      </div>

      <div class="mb-3 row  col-12 col-md-12 col-lg-6">
        <div class=" col-6 ">
          <label for="exampleFormControlTextarea1" class="form-label">signature Rdk</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class=" col-6">
          <label for="exampleFormControlTextarea1" class="form-label">Signature Client</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </div>

      <div class="mb-3  col-12 col-md-6 col-lg-6">
        <label for="exampleFormControlInput1" class="form-label" required>Montant</label>
        <input type="number" name='montant_de_la_location' class="form-control  w-50">
      </div>

      <div class="mb-3 row  col-12- col-md-6 col-lg-6">
        <div class="mb-3 ">
          <label for="exampleFormControlInput1" class="form-label">Ajouter un fichier</label>
          <input type="file" class="form-control ">
        </div>

        <div class="mb-3 col-12 col-md-12 col-lg-6 ">
          <button type='submit' name='save_location' class='btn  btn-location '>Enregistrer</button>
        </div>
      </div>
      </form>  
 </div>
 <div class="next-page">
  <a  href="?page=etats_vehicules">Suivant<span class=' chevron chevron-right'><i class="fas fa-chevron-right"></i></span> </button>
</div>

</div>
