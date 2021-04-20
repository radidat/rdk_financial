
  <div id='bg-information-vehicule'>
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
    <h1 class='title-head'>Information du véhicule n°200</h1>

    <div class='page-vehicule-infos'>
      <div class='container-infos row '>
        <div class='photos-vehicule '>
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-interval="false"
            data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./images/<?=$vehicle['image_1']?>" class="d-block w-100" alt="vehicule_1">
              </div>
              <div class="carousel-item">
                <img src="./images/<?=$vehicle['image_2']?>" class="d-block w-100" alt="vehicule_2">
              </div>
              <div class="carousel-item">
                <img src="./images/<?=$vehicle['image_3']?>" class="d-block w-100" alt="vehicule_3">
              </div>
              <div class="carousel-item">
                <img src="./images/<?=$vehicle['image_4']?>" class="d-block w-100" alt="vehicule_3">
              </div>
              <div class="carousel-item">
                <img src="./images/<?=$vehicle['image_5']?>" class="d-block w-100" alt="vehicule_3">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class='infos row '>
          <div class="mb-3 col-6 col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Marque : </label>
            <input type="text" class="form-control" value='<?=$vehicle['marque']?>'>
          </div>
          <div class="mb-3 col-6 col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Type : </label>
            <input type="text" class="form-control"value='<?=$vehicle['type']?>' >
          </div>
          <div class="mb-3 col-6 col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Kilométrage</label>
            <input type="text" class="form-control" value='<?=$vehicle['kilometrage']?>'>
          </div>
          <div class="mb-3 col-6 col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">immatriculation</label>
            <input type="text" class="form-control" value='<?=$vehicle['immatriculation']?>'>
          </div>
          <div class="mb-3 col-6 col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Carburant</label>
            <select class="form-select w-auto col-md-5 form-select-sm" aria-label=".form-select-sm example">
              <option></option>
              <option value='diesel' <?=$vehicle['carburant'] ==='diesel'? 'selected':''?>>Diesel</option>
              <option value="sans-plomb 98"<?=$vehicle['carburant'] ==='sans-plomb 98'? 'selected':''?>>sans-plomb 98</option>
              <option value="sans-plomb 95"<?=$vehicle['carburant'] ==='sans-plomb 95'? 'selected':''?> >sans-plomb 95</option>
              <option value="hybride"<?=$vehicle['carburant'] ==='hybride'? 'selected':''?> >Hybride</option>
              <option value="electrique"<?=$vehicle['carburant'] ==='electrique'? 'selected':''?> >electrique</option>
            </select>
          </div>
          <div class="mb-3 col-6 col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Boite de vitesse</label>
            <select class="form-select w-auto col-md-5 form-select-sm" aria-label=".form-select-sm example">
              <option></option>
              <option value="manuelle"<?=$vehicle['boite_de_vitesse'] ==='manuelle'? 'selected':''?> >Manuelle</option>
              <option value="automatique" <?=$vehicle['boite_de_vitesse'] ==='automatique'? 'selected':''?>>Automatique</option>
            </select>
          </div>
          <div class="mb-3 col-6 col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Prix d'achat</label>
            <input type="text" class="form-control" value='<?=$vehicle['prix_d_achat']?>'>
          </div>
          <div class="mb-3 col-6 col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Date d'achat</label>
            <input type="text" class="form-control" value='<?=$vehicle['date_d_achat']?>'>
          </div>
          <div class="mb-3 col-6 col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Prix de vente</label>
            <input type="text" class="form-control"  value ='<?=$vehicle['prix_d_achat']?>'>
          </div>
          <div class="mb-3 col-6 col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Prix LLD</label>
            <input type="text" class="form-control" value='45 000'>
          </div>

          <div class='state row  col-md-12 col-lg-12 '>
            <h4>Etat du véhicule :</h4>
            <div class="form-check col-3 ">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Loue
              </label>
            </div>
            <div class="form-check col-3">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" checked>
              <label class="form-check-label" for="defaultCheck2">
                disponible
              </label>
            </div>
            <div class="form-check col-3">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
              <label class="form-check-label" for="defaultCheck2">
                Entretien
              </label>
            </div>
          </div>
          <div class='button-group col-md-12 col-lg-12  '>
            <button type="button" class="btn btn-danger ">Supprimer</button>
            <button type="button" class="btn btn-info">Modifier</button>
          </div>
        </div>
      </div>
    </div>
  </div>
