<div id='bg-etat-vehicule-client'>
  <div id="background"></div>
  <header>

    <button class='btn-open'>
      <img src='./images/icons8-menu.svg'>
    </button>
    <nav class='navbarHead' id='sidebarjs'>
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
              <li><a href='?page=ajout_clent'>Ajouter un nouveau client</a></li>
              <li><a href='?page=vehicules'>Véhicules</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <h1 class='title-head'>Etat du véhicule</h1>

  <div class='prev-page'>
    <a href='?page=location'><span class=' chevron chevron-left'><i class="fas fa-chevron-left"></i></span> Précédent</a>
  </div>
  <?= isset($_POST['submit_etat_vehicule']) ? "<a href='./filesPdf/contrat/" . $dirPdfoutput[0] . "' target='_blank' class='btn-pdf'> telecharger le fichier</a>" : '' ?>
  <div class='container-data'>



    <form class='row etat-vehicule' method="POST" enctype="multipart/form-data">

      <div class=' row col-12 col-md-12 col-lg-12'>
        <div class="mb-3 col-6 col-md-4 col-lg-4">
          <label for="exampleFormControlInput1" class="form-label">Nom</label>
          <input type="text" class="form-control" name='nom' value='<?= $data_location['nom'] ?>'>
        </div>
        <div class="mb-3 col-6 col-6 col-md-4 col-lg-4">
          <label for="exampleFormControlInput1" class="form-label">Prénom</label>
          <input type="text" class="form-control" name='prenom' value='<?= $data_location['prenom'] ?>'>
        </div>
        <div class="mb-3 col-6  col-6 col-md-4 col-lg-4">
          <label for="exampleFormControlInput1" class="form-label">Société</label>
          <input type="text" class="form-control" name='societe' value='<?= $data_location['societe'] ?>'>
        </div>
        <div class="mb-3 col-6  col-6 col-md-4 col-lg-4">
          <label for="exampleFormControlInput1" class="form-label">n°siret</label>
          <input type="number" class="form-control " name='numero_de_siret' value='<?= $data_location['numero_de_siret'] ?>'>
        </div>
        <div class="mb-3 col-6  col-6 col-md-4 col-lg-4">
          <label for="exampleFormControlInput1" class="form-label">Immarticulation</label>
          <input type="text" class="form-control" name='immatriculation' value='<?= $data_location['immatriculation'] ?>'>
        </div>

      </div>

      <div class=" mb-3 col-12 col-md-12 col-lg-12 row">
        <label>Carburant </label>
        <div class="form-check col-6">
          <input class="form-check-input" value='<?= $data_location['carburant '] === 'diesel' ? 'diesel' : '' ?>' <?= $data_location['carburant'] === 'diesel' ? 'checked' : '' ?> type="radio" name="flexRadioDefault">
          <label class="form-check-label" for="carburant">
            Diesel
          </label>
        </div>
        <div class="form-check col-6">
          <input class="form-check-input" value='<?= $data_location['carburant'] === 'sans-plomb 98' ? 'sans-plomb 98' : '' ?>' <?= $data_location['carburant'] === 'sans-plomb 98' ? 'checked' : '' ?> type="radio" name="carburant">
          <label class="form-check-label" for="carburant">
            sans-plomb 98
          </label>
        </div>
        <div class="form-check col-6">
          <input class="form-check-input" value='<?= $data_location['carburant'] === 'sans-plomb 95' ? 'sans-plomb 95' : '' ?>' <?= $data_location['carburant'] === 'sans-plomb 95' ? 'checked' : '' ?>type="radio" name="carburant">
          <label class="form-check-label" for="carburant">
            sans-plomb 95
          </label>
        </div>
        <div class="form-check col-6">
          <input class="form-check-input" value='<?= $data_location['carburant'] === 'electrique' ? 'electrique' : '' ?>' <?= $data_location['carburant'] === 'sans-plomb 95' ? 'checked' : '' ?> type="radio" name="carburant">
          <label class="form-check-label" for="carburant">
            Electrique
          </label>
        </div>
        <div class="form-check col-8">
          <input class="form-check-input" value='<?= $data_location['carburant'] === 'hybride' ? 'hybride' : '' ?>' <?= $data_location['carburant'] === 'sans-plomb 95' ? 'checked' : '' ?> type="radio" name="carburant">
          <label class="form-check-label" for="carburant">
            Hybride
          </label>
        </div>
      </div>
      <div class=' col-12 col-md-6'>
        <h5>Au départ</h5>
        <div class=' row' style=' border: 1px solid rgba(0, 0, 0, 0.4);padding-bottom:15px; margin-left: 6px; border-radius:6px'>

          <div class="mb-3 col-12 col-md-12 col-lg-12">
            <label for="exampleFormControlInput1" class="form-label">Kilométrage</label>
            <input type="text" class="form-control " name='kilometrage_depart' value='<?= $data_location['kilometrage'] ?>'>
          </div>
          <div class="mb-3 col-12 col-md-12 col-lg-12">
            <label for="exampleFormControlInput1" class="form-label">Niveau du carburant</label>
            <select class="form-select w-auto col-md-5 form-select-sm" name='niveau_depart' required aria-label=".form-select-sm example">
              <option value=""></option>
              <option value="1/5">1/5</option>
              <option value="2/5">2/5</option>
              <option value="3/5">3/5</option>
              <option value="4/5">4/5</option>
              <option value="5/5">5/5</option>
            </select>
          </div>
          <div class="mb-3 col-12 col-md-12 col-lg-12">
            <label for="exampleFormControlInput1" class="form-label">images du véhicule</label>
            <input type="file" class="form-control" name='photo_vehicule_depart[]' multiple required>
          </div>
          <div class=" col-12 col-md-12 col-lg-12">
            <label for="exampleFormControlTextarea1" class="form-label">Observations</label>
            <textarea class="form-control" name='observation_depart' id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div>
      </div>

      <div class=' col-12 col-md-6'>
        <h5>Au retour</h5>
        <div class=' row' style=' border: 1px solid rgba(0, 0, 0, 0.4); padding-bottom:15px; margin-left: 6px; border-radius:6px'>

          <div class="mb-3  col-12 col-md-12 col-lg-12">
            <label for="exampleFormControlInput1" class="form-label">Kilométrage</label>
            <input type="email" class="form-control " name='kilometrage_retour'>
          </div>
          <div class="mb-3 col-12 col-md-12 col-lg-12">
            <label for="exampleFormControlInput1" class="form-label">Niveau du carburant</label>
            <select class="form-select w-auto col-md-5 form-select-sm" name="niveau_retour" aria-label=".form-select-sm example">
              <option value="1/5">1/5</option>
              <option value="2/5">2/5</option>
              <option value="3/5">3/5</option>
              <option value="4/5">4/5</option>
              <option value="5/5">5/5</option>
            </select>
          </div>
          <div class="mb-3 col-12col-6 col-md-12 col-lg-12">
            <label for="exampleFormControlInput1" class="form-label">images du véhicule</label>
            <input type="file" class="form-control  " multiple name='photos_etat_vehicule_retour'>
          </div>
          <div class=" col-12  col-md-12 col-lg-12">
            <label for="exampleFormControlTextarea1" class="form-label">Observations</label>
            <textarea class="form-control" name='observation_retour' id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div>
      </div>


      <div class='row col-12'>

        <div class='row col-12 col-md-12 col-lg-6'>

          <div class="mb-3 row  col-12 col-md-6 col-lg-6">
           
            <div >
              <input type='hidden' name='signature-rdk-etat' id='signature-client-etat' value=''>
              <div class="wrapper">
                <canvas id="signature-pad-rdk" class="signature-pad" width=250 height=150></canvas>
              </div>
              <button class='clear-signature-rdk-etat btn btn-danger mt-2'>recommercer</button>
            </div>
          </div>

            <div class="col-12 col-md-6">
              <h5>Signature client</h5>
              <input type='hidden' name='signature-client-etat' id='signature-client-etat'value=''>
              <div class="wrapper">
                <canvas id="signature-pad-client" class="signature-pad" width=250 height=150></canvas>
              </div>
              <button class='clear-signature-client-etat btn btn-danger mt-2'>recommercer</button>
            </div>
            <button type='button' id='save-signature-client-etat' class='btn btn-info col-md-12 mt-4 save-signature'> enregister la signature</button>   
          </div>

          <div class='buttons-group-etat-vehicule  col-12 col-md-12 col-lg-6'>
          <button type='button' class='btn'>Modifier</button>
          <button type='submit' name='submit_etat_vehicule' class='btn'>Enregistrer</button>
        </div>
        </div>
      

      </div>

    </form>
  </div>

</div>