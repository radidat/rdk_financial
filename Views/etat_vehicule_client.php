<!DOCTYPE html>
<html lang="fr">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href='../bootstrap-5/css/bootstrap.css' rel='stylesheet'>
    <link href='../Css/generale.css' rel='stylesheet'>
    <link href='../Css/etat_vehicule.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/1748750407.js" crossorigin="anonymous"></script>
    <script src='./js/sideBar.js' defer></script>
    <script src='../bootstrap-5/js/bootstrap.js' defer></script>
    <title>Etat vehicule</title>
</head>

<body>
  <div id='bg-etat-vehicule-client'>
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
                        <li> <a href="/rdk_financial/clients.php">Clients</a></li>
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
    <h1 class='title-head'>Etat du véhicule</h1>

    <h2 class='pdf-title'>Télécharger le Pdf</h2>
    <div class = 'container-data'>
        <form  class='row etat-vehicule'  >
            <div class=' row col-12 col-md-12 col-lg-12'>
                <div class="mb-3 col-6 col-md-4 col-lg-4">
                    <label for="exampleFormControlInput1" class="form-label">Nom</label>
                    <input type="email" class="form-control  " value='Jean' >
                  </div>
                  <div class="mb-3 col-6 col-6 col-md-4 col-lg-4">
                    <label for="exampleFormControlInput1" class="form-label" >Prénom</label>
                    <input type="email" class="form-control  " value='Robert'  >
                  </div>
                  <div class="mb-3 col-6  col-6 col-md-4 col-lg-4">
                    <label for="exampleFormControlInput1" class="form-label">Société</label>
                    <input type="text" class="form-control  "  value='société 1'>
                  </div>
                  <div class="mb-3 col-6  col-6 col-md-4 col-lg-4">
                    <label for="exampleFormControlInput1" class="form-label">n°siret</label>
                    <input type="text" class="form-control  " value='231 654 987 12315' >
                  </div>
                  <div class="mb-3 col-6  col-6 col-md-4 col-lg-4">
                    <label for="exampleFormControlInput1" class="form-label">Immarticulation</label>
                    <input type="text" class="form-control  "  value='PL-132-AK'>
                  </div>


            </div>
            
            <div class=" mb-3 col-12 col-md-12 col-lg-12 row" >
                <label>Carburant </label>
                <div class="form-check col-6">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" >
                    <label class="form-check-label" for="flexRadioDefault1">
                    essence
                    </label>
                  </div>
                  <div class="form-check col-6">
                    <input class="form-check-input" type="radio" name="flexRadioDefault"  >
                    <label class="form-check-label" for="flexRadioDefault2">
                     electrique
                    </label>
                  </div>
                  <div class="form-check col-6">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" checked >
                    <label class="form-check-label" for="flexRadioDefault2">
                     diesel
                    </label>
                  </div>
                  <div class="form-check col-6">
                    <input class="form-check-input" type="radio" name="flexRadioDefault"  >
                    <label class="form-check-label" for="flexRadioDefault2">
                     hybride (diesel)
                    </label>
                  </div>
                  <div class="form-check col-8">
                    <input class="form-check-input" type="radio" name="flexRadioDefault"  >
                    <label class="form-check-label" for="flexRadioDefault2">
                     hybride (essence)
                    </label>
                  </div>
            </div>
            <div class=' col-12 col-md-6'>
                <h5>Au départ</h5>
                <div class=' row' style=' border: 1px solid rgba(0, 0, 0, 0.4);padding-bottom:15px; margin-left: 6px; border-radius:6px'>

                    <div class="mb-3 col-12 col-md-12 col-lg-12">
                        <label for="exampleFormControlInput1" class="form-label">Kilométrage</label>
                        <input type="text" class="form-control   " value ='25 000'>
                      </div>
                      <div class="mb-3 col-12 col-md-12 col-lg-12">
                        <label for="exampleFormControlInput1" class="form-label">Niveau</label>
                        <input type="text" class="form-control  " value='moyen'>
                      </div>
                      <div class="mb-3 col-12 col-md-12 col-lg-12">
                        <label for="exampleFormControlInput1" class="form-label">images du véhicule</label>
                        <input type="file" class="form-control  " multiple >
                      </div>
                      <div class=" col-12 col-md-12 col-lg-12">
                        <label for="exampleFormControlTextarea1" class="form-label">Observations</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Minus rerum tempore molestiae dolore sapiente blanditiis fugit sunt nulla quaerat hic,
                             a aspernatur voluptatem dignissimos voluptates, suscipit esse porro voluptate maxime?
                        </textarea>
                      </div>
                </div>
            </div>
         
            <div class=' col-12 col-md-6'>
                <h5>Au retour</h5>
                <div class=' row' style=' border: 1px solid rgba(0, 0, 0, 0.4); padding-bottom:15px; margin-left: 6px; border-radius:6px'>

                    <div class="mb-3  col-12 col-md-12 col-lg-12">
                        <label for="exampleFormControlInput1" class="form-label">Kilométrage</label>
                        <input type="email" class="form-control  " >
                      </div>
                      <div class="mb-3 col-12 col-6 col-md-12 col-lg-12">
                        <label for="exampleFormControlInput1" class="form-label">Niveau</label>
                        <input type="email" class="form-control  " >
                      </div>
                      <div class="mb-3 col-12col-6 col-md-12 col-lg-12">
                        <label for="exampleFormControlInput1" class="form-label">images du véhicule</label>
                        <input type="file" class="form-control  " multiple >
                      </div>
                      <div class=" col-12  col-md-12 col-lg-12">
                        <label for="exampleFormControlTextarea1" class="form-label">Observations</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                </div>
            </div>



            <div class="mb-3 row  col-12 col-md-12 col-lg-6" >
                <div class=" col-6  ">
                    <label for="exampleFormControlTextarea1" class="form-label">signature Rdk</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>

                  <div class=" col-6">
                    <label for="exampleFormControlTextarea1" class="form-label">Signature Client</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>

                </div>

            <div class=' buttons-group-etat-vehicule  col-md-12 col-lg-6'>
                <button type='button' class='btn'>Modifier</button>
                <button type='submit' class='btn'>Enregistrer</button>
                <a href='rdk_financial/Views/contravention.html' type='button' style='text-decoration: none; color:#fff;' class='btn'>Appliquer un pv</a>
                  </div>
                </div>
              </form>
      </div>
    
    </div>
</body>

</html