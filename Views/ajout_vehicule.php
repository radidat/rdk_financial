
  <div id='bg-ajout-vehicule'>
    <div id="background"></div>
    <header >
      
      <button class='btn-open'>
        <img src='./views/images/icons8-menu.svg'>
     </button>
       <nav class= 'navbarHead' id='sidebarjs'>
         <button type="button" class='close'><i class="fas fa-times"></i></button>
         <img src='./views/images/rdk_financial.png' alt="logo" class='logo-rdk'>
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
       <h1 class='title-head'>Ajouter un nouveau véhicule</h1>
       
      <div class ='container-data'>

        <form action ='' method='POST' autocomplete="off"  enctype="multipart/form-data" class='row ajout-vehicule'  >
          <div class="mb-3  col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Marque</label>
            <input type="text" class="form-control " name ='marque' required  >
          </div>
                
          <div class="mb-3  col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Type</label>
            <input type="text" class="form-control" name='type' required >
          </div>
          <div class="mb-3  col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Categorie</label>
            <input type="text" class="form-control" name='categorie' required >
          </div>
          <div class="mb-3 col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Immatriculation</label>
            <input type="text" class="form-control" name='immatriculation'  required >
          </div>

          <div class=' mb-3 col-md-6 col-lg-4' style="margin-top: 35px;">
            <select name='carburant' class="form-select w-auto col-md-5 form-select-sm" aria-label=".form-select-sm example" required >
              <option selected>Choisir un carburant</option>
              <option value="diesel">Diesel</option>
              <option value="sans-plomb 98">Sans-plomb 98</option>
              <option value="sans-plomb 95">Sans-plomb 95</option>
              <option value="electrique">Electrique</option>
              <option value="hybride">Hybride</option>>
            </select>
          </div>
                
                <div class="mb-3  col-md-6 col-lg-4">
                  <label for="exampleFormControlInput1" class="form-label">Kilométrage</label>
                  <input type="number" class="form-control" name='kilometrage' required  >
                </div>

                <div class=' mb-3 col-md-6 col-lg-4' style="margin-top: 35px;">
                  <select name='boite_de_vitesse' class="form-select w-auto col-md-5 form-select-sm" aria-label=".form-select-sm example" >
                    <option selected>--Boite de vitesse--</option>
                  <option value="manuelle">Manuelle</option>
                  <option value="automatique">Automatique</option>
                  </select>
                </div>
               
               
                <div class="mb-3  col-md-6 col-lg-4">
                  <label for="exampleFormControlInput1" class="form-label">Prix d'achat</label>
                  <input type="number" class="form-control" name='prix_d_achat' required>
                </div>

                <div class="mb-3  col-md-6 col-lg-4">
                  <label for="exampleFormControlInput1" class="form-label">Date d'achat</label>
                  <input type="date" class="form-control" name='date_d_achat' required  >
                </div>

                <div class="mb-3 col-md-6 col-lg-4">
                  <label for="exampleFormControlInput1" class="form-label">Ajouter des photos</label>
                  <input type="file" class="form-control" name='photos[]' multiple  required>
                  <?php if(isset($_FILES['photos']['name']) && count($_FILES['photos']['name']) > 12):?>
              <div style='color: red'>
                  <?= $errors[0]?>
                  </div>
              <?php endif ?>
          </div>
                </div>

                <div class="mb-3">
                  <button type='submit' name='submit' class='btn  btn-ajout'>Enregistrer</button>
                </div>
              </form>
      </div>
    
      <div>