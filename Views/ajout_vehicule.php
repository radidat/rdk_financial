<!DOCTYPE html>
<html lang="fr">

<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link  href='../bootstrap-5/css/bootstrap.css' rel='stylesheet'>
    <link href='../Css/generale.css' rel='stylesheet'>
    <link href='../Css/ajout_nv_vehicule.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/1748750407.js" crossorigin="anonymous"></script>
    <script src='./js/sideBar.js' defer></script>
    <script src='../bootstrap-5/js/bootstrap.js' defer></script>

    <title>Ajout</title>
</head>

<body>
  <div id='bg-ajout-vehicule'>
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
                         <li><a href="/rdk_financial/views/location.php">Réaliser un contrat de location</a></li>
                        <li> <a href="/rdk_financial/viewsclients.php">Clients</a></li>
                     </ul>
                 </div>
             </div>
             <div class='menu-item'>
               <h3>Gestion des véhicules</h3>
               <div>
                   <ul class='sous-menu'>
                    <li><a href='/rdk_financial/views/ajout_vehicule.php'>Ajouter un véhicule</a></li>
                    <li><a href='/rdk_financial/views/vehicules.php'>Véhicules</a></li>
                   </ul>
               </div>
           </div>
         </div> 
       </nav>
    </header>
       <h1 class='title-head'>Ajouter un nouveau véhicule</h1>
       
      <div class ='container-data'>

        <form  class='row ajout-vehicule'  >
          <div class="mb-3  col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Marque</label>
            <input type="email" class="form-control  "  placeholder="name@example.com">
          </div>
                
          <div class="mb-3  col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Type</label>
            <input type="email" class="form-control"  placeholder="name@example.com">
          </div>

          <div class="mb-3 col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Immarticulation</label>
            <input type="email" class="form-control"  placeholder="name@example.com">
          </div>

          <div class=' mb-3 col-md-6 col-lg-4' style="margin-top: 35px;">
            <select class="form-select w-auto col-md-5 form-select-sm" aria-label=".form-select-sm example">
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
                  <input type="text" class="form-control"  placeholder="name@example.com">
                </div>

                <div class=' mb-3 col-md-6 col-lg-4' style="margin-top: 35px;">
                  <select class="form-select w-auto col-md-5 form-select-sm" aria-label=".form-select-sm example">
                    <option selected>--Boite de vitesse--</option>
                  <option value="manuelle">Manuelle</option>
                  <option value="automatique">Automatique</option>
                  </select>
                </div>
               
               
                <div class="mb-3  col-md-6 col-lg-4">
                  <label for="exampleFormControlInput1" class="form-label">Prix d'achat</label>
                  <input type="number" class="form-control"  placeholder="name@example.com">
                </div>

                <div class="mb-3  col-md-6 col-lg-4">
                  <label for="exampleFormControlInput1" class="form-label">Date d'achat</label>
                  <input type="date" class="form-control"  placeholder="name@example.com">
                </div>

                <div class="mb-3 col-md-6 col-lg-4">
                  <label for="exampleFormControlInput1" class="form-label">Ajouter des photos</label>
                  <input type="file" class="form-control"  multiple placeholder="name@example.com">
                </div>

                <div class="mb-3">
                  <button type='submit' class='btn  btn-ajout'>Enregistrer</button>
                </div>
              </form>
      </div>
    
      <div>
</body>

</html>