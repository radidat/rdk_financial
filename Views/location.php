<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href='../bootstrap-5/css/bootstrap.css' rel='stylesheet'>
  <link href='../Css/generale.css' rel='stylesheet'>
  <link href='../Css/location_vehicule.css' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/1748750407.js" crossorigin="anonymous"></script>
  <script src='./js/sideBar.js' defer></script>
  <script src='../bootstrap-5/js/bootstrap.js' defer></script>

  <title>Ajout</title>
</head>

<body>
  <div id='bg-location'>
  <div id="background"></div>


  <header >
      
      <button class='btn-open'>
        <img src='../images/icons8-menu.svg'>
     </button>
       <nav class= 'navbarHead' id='sidebarjs'>
         <button type="button" class='close'><i class="fas fa-times"></i></button>
         <img src='../images/rdk_financial.png' alt="logo" class='logo-rdk'>
         <div class='menu'>
             <div class='menu-item'>
                 <h3>Réservation</h3>
                 <div>  
                     <ul class='sous-menu'>
                         <li><a href='#'>Planning de réservation</a></li>
                         <li><a href="rdk_financial/views/location.php">Réaliser un contrat de location</a></li>
                        <li> <a href="rdk_financial/views/clients.php">Clients</a></li>
                     </ul>
                 </div>
             </div>
             <div class='menu-item'>
               <h3>Gestion des véhicules</h3>
               <div>
                   <ul class='sous-menu'>
                    <li><a href='rdk_financial/views/ajout_vehicule.php'>Ajouter un véhicule</a></li>
                    <li><a href='rdk_financial/views/vehicules.php'>Véhicules</a></li>
                   </ul>
               </div>
           </div>
         </div> 
       </nav>
    </header>
  <h1 class='title-head'>Contrat de location</h1>

  <div class='container-data'>

    <form class='row location'>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Nom</label>
        <input type="email" class="form-control  ">
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Prenom</label>
        <input type="email" class="form-control">
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Telephone</label>
        <input type="email" class="form-control">
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control">
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Société</label>
        <input type="email" class="form-control">
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">N°siret</label>
        <input type="number" class="form-control">
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Permis de conduire</label>
        <input type="text" class="form-control">
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Photo permis de conduire</label>
        <input type="file" class="form-control">
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Lieu d'obtention</label>
        <input type="email" class="form-control">
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Date d'obtention</label>
        <input type="email" class="form-control">
      </div>

      <div class=' mb-3 col-6 col-md-4 col-lg-3' style="margin-top: 35px;">
        <select class="form-select w-auto col-md-5 form-select-sm" aria-label=".form-select-sm example">
          <option selected>Choisir un vehicule</option>
          <option value="diesel">vehicule-1</option>
          <option value="sans-plomb 98">vehicule-2</option>
          <option value="sans-plomb 95">vehicule-3</option>
          <option value="electrique">vehicule-4</option>
          <option value="hybride">vehicule-5</option>>
        </select>
      </div>

      <div class="mb-3 col-6  col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Date de départ</label>
        <input type="text" class="form-control">
      </div>


      <div class="mb-3 col-6  col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Date de retour</label>
        <input type="number" class="form-control">
      </div>

      <div class="mb-3 col-6  col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Dépôt de garantie</label>
        <input type="date" class="form-control">
      </div>

      <div class="mb-3 col-6  col-md-4 col-lg-3">
        <label>Garantie dommage accident</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
            oui
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
          <label class="form-check-label" for="flexRadioDefault2">
            non
          </label>
        </div>
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Montant garantie dommage accident</label>
        <input type="number" class="form-control" multiple>
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label>Garantie vol </label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
            oui
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
          <label class="form-check-label" for="flexRadioDefault2">
            non
          </label>
        </div>
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label for="exampleFormControlInput1" class="form-label">Montant garantie vol</label>
        <input type="number" class="form-control" multiple>
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label>Assurance personnes transportées </label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
            oui
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
          <label class="form-check-label" for="flexRadioDefault2">
            non
          </label>
        </div>
      </div>

      <div class="mb-3 col-6 col-md-4 col-lg-3">
        <label>Type de paiement </label>
        <div class="form-check">
          <input class="form-check-input" checke type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
            carte bancaire
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
          <label class="form-check-label" for="flexRadioDefault2">
            Espèces
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
          <label class="form-check-label" for="flexRadioDefault2">
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
        <label for="exampleFormControlInput1" class="form-label">Montant</label>
        <input type="number" class="form-control  w-50">
      </div>

      <div class="mb-3 row  col-12- col-md-6 col-lg-6">
        <div class="mb-3 ">
          <label for="exampleFormControlInput1" class="form-label">Ajouter un fichier</label>
          <input type="file" class="form-control ">
        </div>

        <div class="mb-3 col-12 col-md-12 col-lg-6 ">
          <button type='submit' class='btn  btn-location '>Enregistrer</button>
        </div>
      </div>
      </form>  
 </div>
 <div class="next-page">
  <a  href="rdk_financial/Views/etat_vehicule.html">Suivant<span class=' chevron chevron-right'><i class="fas fa-chevron-right"></i></span> </button>
</div>

</div>

</body>

</html>