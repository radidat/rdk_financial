<!DOCTYPE html>
<html lang="fr">

<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link  href='../bootstrap-5/css/bootstrap.css' rel='stylesheet'>
    <link href='../Css/generale.css' rel='stylesheet'>
    <link href='../Css/information_client.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/1748750407.js" crossorigin="anonymous"></script>
    <script src='./js/sideBar.js' defer></script>
    <script src='../bootstrap-5/js/bootstrap.js' defer></script>

    <title>Ajout</title>
</head>

<body>
  <div id='information-client'>
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

    <h1 class='title-head'>Information du client n°12</h1>

       <div class='container-data'>
        <form  class='row infos-client'>
        <div class='col-md-12 row'>
        
            <div class="mb-3 col-6 col-md-4 col-lg-4">
                <label for="exampleFormControlInput1" class="form-label">Nom</label>
                <input type="email" class="form-control  " >
              </div>
                    
              <div class="mb-3 col-6 col-md-4 col-lg-4">
                <label for="exampleFormControlInput1" class="form-label">Prenom</label>
                <input type="email" class="form-control" >
              </div>

              <div class="mb-3 col-6 col-md-4 col-lg-4">
                <label for="exampleFormControlInput1" class="form-label">Telephone</label>
                <input type="email" class="form-control"  >
              </div>

              <div class="mb-3 col-6 col-md-4 col-lg-4 ">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" >
              </div>

              <div class="mb-3 col-6 col-md-4 col-lg-4">
                <label for="exampleFormControlInput1" class="form-label">Adresse</label>
                <input type="email" class="form-control"  >
              </div> 

              <div class="mb-3 col-6 col-md-4 col-lg-4">
                <label for="exampleFormControlInput1" class="form-label">Société</label>
                <input type="email" class="form-control"  >
              </div>

              <div class="mb-3 col-6 col-md-4 col-lg-4">
                <label for="exampleFormControlInput1" class="form-label">N°siret</label>
                <input type="number" class="form-control"  >
              </div>

              <div class="mb-3 col-6 col-md-4 col-lg-4">
                <label for="exampleFormControlInput1" class="form-label">Permis de conduire</label>
                <input type="text" class="form-control" >
              </div>

              <div class="mb-3 col-6 col-md-4 col-lg-4">
                <label for="exampleFormControlInput1" class="form-label">Lieu d'obtention</label>
                <input type="email" class="form-control"  >
              </div>

              <div class="mb-3 col-6 col-md-4 col-lg-4" >
                <label for="exampleFormControlInput1" class="form-label">Date d'obtention</label>
                <input type="email" class="form-control" >
              </div>

              <div class="mb-3 col-md-3 col-lg-4">
                <label>valide</label>
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
              <div class="mb-3 col-12 col-md-12 col-lg-12 ">
                <button type='submit' class='btn  btn-infos-client-modif '>Modifier</button>
              </div>
             
        </div>
         
        <div class='col-md-12'>
             <h5 class='title-infos-client-table'>Vehicule loué :</h5>
                <table class="table table-sm table-responsive table_client_infos rounded-right table-infos-client ">
                    <thead class='thead rounded-right '>
                      <tr>
                        <th scope="col" class='table-name'>#</th>
                        <th scope="col" class='table-name' >Marque</th>
                        <th scope="col" class='table-name' >Immarticulation</th>
                        <th scope="col" class='table-name' >Date de départ</th>
                        <th scope="col" class='table-name' >Date de retour</th>
                        <th scope="col" class='table-name' >Situation</th>
                        <th scope="col" class='table-name' >Fiche etat du véhicule</th>
                      </tr>
                    </thead>
                    <tbody class='table-body'>
                      <tr>
                        <th scope="row">1</th>
                        <td>Nissan</td>
                        <td>AB-344-CA</td>
                        <td>12/05/2021</td>
                        <td>25/10/2021</td>
                        <td>loué</td>
                        <td><a style='text-decoration:none; color:black' href="rdk_financial/views/etat_vehicule_client.html">voir</a></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Nissan</td>
                        <td>AB-344-CA</td>
                        <td>12/05/2021</td>
                        <td>25/10/2021</td>
                        <td>loué</td>
                        <td><a style='text-decoration:none; color:black' href="rdk_financial/views/etat_vehicule_client.html">voir</a></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Nissan</td>
                        <td>AB-344-CA</td>
                        <td>12/05/2021</td>
                        <td>25/10/2021</td>
                        <td>loué</td>
                        <td><a style='text-decoration:none; color:black' href="rdk_financial/views/etat_vehicule_client.html">voir</a></td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Nissan</td>
                        <td>AB-344-CA</td>
                        <td>12/05/2021</td>
                        <td>25/10/2021</td>
                        <td>loué</td>
                        <td><a style='text-decoration:none; color:black' href="rdk_financial/views/etat_vehicule_client.html">voir</a></td>
                      </tr>
                    </tbody>
                  </table>


                  <nav aria-label="Page navigation mt-5">
                    <ul class="pagination pagination-client">
                      <li class="page-item">
                        <a class="page-link chevron-table" href="#" aria-label="Previous">
                          <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link table-pagi" href="#">1</a></li>
                      <li class="page-item"><a class="page-link table-pagi" href="#">2</a></li>
                      <li class="page-item"><a class="page-link table-pagi" href="#">3</a></li>
                      <li class="page-item"><a class="page-link table-pagi" href="#">3</a></li>
                      <li class="page-item"><a class="page-link table-pagi" href="#">3</a></li>
                      <li class="page-item"><a class="page-link table-pagi" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link chevron-table" href="#" aria-label="Next">
                          <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                        </a>
                      </li>
                    </ul>
                  </nav>
              </div>
        </div>
                
              </form>
            </div>

          </div>
</body>

</html>