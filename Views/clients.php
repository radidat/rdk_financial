<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDK financial</title>
    <link  href='../bootstrap-5/css/bootstrap.css' rel='stylesheet'>
    <link href='../Css/generale.css' rel='stylesheet'>
    <link href='../Css/all_clients.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/1748750407.js" crossorigin="anonymous"></script>
    <script src='./js/sideBar.js' defer></script>
    <script src='../bootstrap-5/js/bootstrap.js' defer></script>
</head>
<body>
  <div id='bg-clients'>
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

     <div class='filter-clients row'>
       <h5 class='col-md-4'>Filtrer par : </h5>
      <div class="mb-3 col-6  col-6 col-md-4 col-lg-4">
        <label for="exampleFormControlInput1" class="form-label"></label>
        <input type="text" class="form-control filter-clients-input"  placeholder="immarticulation">
      </div>
      <div class="mb-3 col-6  col-6 col-md-4 col-lg-4">
        <label for="exampleFormControlInput1" class="form-label"></label>
        <input type="text" class="form-control  filter-clients-input "  placeholder="Nom">
      </div>
     </div>
      <div class='container-fluid '>
          <div class='table-container bdr'>
            <table class="table table-sm table-responsive-sm table-hover ">
                <thead class='thead rounded-right '>
                  <tr>
                    <th scope="col" class='table-name'>#</th>
                    <th scope="col" class='table-name' >Nom</th>
                    <th scope="col" class='table-name' >Prenom</th>
                    <th scope="col" class='table-name' >Société</th>
                    <th scope="col" class='table-name' >N°siret</th>
                    <th scope="col" class='table-name' >Véhicule</th>
                    <th scope="col" class='table-name' >Immarticulation</th>
                    <th scope="col" class='table-name' >Date de départ</th>
                    <th scope="col" class='table-name' >Date de retour</th>
                    <th scope="col" class='table-name' >Fiche Etat du véhicule</th>
                  </tr>
                </thead>
                <tbody class='table-body'>
                  <tr onclick="location.pathname ='/views/information_client.html'">
                    <th scope="row">1</th>
                    <td>Jean</td>
                    <td>Robert</td>
                    <td>société 1</td>
                    <td>231 654 987 12315</td>
                    <td>vehicule 1</td>
                    <td>AA-000-AA</td>
                    <td>30/05/2021</td>
                    <td>26/04/2021</td>
                    <td><a style='text-decoration:none; color:black' href="/rdk_financial/views/etat_vehicule_client.html">voir</a></td>

                  </tr>
                  <tr onclick="location.pathname ='/views/information_client.html'" >
                    <th scope="row">2</th>
                    <td>Axel</td>
                    <td>Braun</td>
                    <td>société 2</td>
                    <td>231 654 987 12315</td>
                    <td>vehicule 2</td>
                    <td>PL-132-AK</td>
                    <td>08/03/2021</td>
                    <td>26/04/2021</td>
                    <td><a style='text-decoration:none; color:black' href="/rdk_financial/views/etat_vehicule_client.html">voir</a></td>
                  </tr>

                  <tr onclick="location.pathname ='/views/information_client.html'" >
                    <th scope="row">3</th>
                    <td>Pauline</td>
                    <td>Jasmin</td>
                    <td>société 3</td>
                    <td>231 654 987 12315</td>
                    <td>vehicule 3</td>
                    <td>AM-666-EE</td>
                    <td>26/09/2021</td>
                    <td>26/04/2021</td>
                    <td><a style='text-decoration:none; color:black' href="/rdk_financial/views/etat_vehicule_client.html">voir</a></td>
                  </tr>

                  <tr onclick="location.pathname ='/views/information_client.html'">
                    <th scope="row">4</th>
                    <td>Paul</td>
                    <td>Billo</td>
                    <td>société 4</td>
                    <td>231 654 987 12315</td>
                    <td>vehicule 4</td>
                    <td>AA-725-AD</td>
                    <td>08/03/2021</td>
                    <td>10/08/2021</td>
                    <td><a style='text-decoration:none; color:black' href="/rdk_financial/views/etat_vehicule_client.html">voir</a></td>
                  </tr>

                  <tr onclick="location.pathname ='/views/information_client.html'" >
                    <th scope="row">5</th>
                    <td>Mark</td>
                    <td>Fredo</td>
                    <td>société 5</td>
                    <td>231 654 987 12315</td>
                    <td>vehicule 5</td>
                    <td>AB-344-CA</td>
                    <td>02/07/201</td>
                    <td>26/09/2021</td>
                    <td><a style='text-decoration:none; color:black' href="/rdk_financial/views/etat_vehicule_client.html">voir</a></td>
                  </tr>
                  <tr onclick="location.pathname ='/views/information_client.html'" >
                    <th scope="row">6</th>
                    <td>Maxime</td>
                    <td>Torat</td>
                    <td>société 6</td>
                    <td>231 654 987 12315</td>
                    <td>vehicule 6</td>
                    <td>WW-942-JY</td>
                    <td>26/09/2021</td>
                    <td>26/09/2021</td>
                    <td><a style='text-decoration:none; color:black' href="/rdk_financial/views/etat_vehicule_client.html">voir</a></td>
                  </tr>

                  <tr onclick="location.pathname ='/views/information_client.html'">
                    <th scope="row">7</th>
                    <td>Patrick</td>
                    <td>Hakim</td>
                    <td>société 7</td>
                    <td>231 654 987 12315</td>
                    <td>vehicule 7</td>
                    <td>1-ALP-248</td>
                    <td>14/06/2021</td>
                    <td>08/08/2021</td>
                    <td><a style='text-decoration:none; color:black' href="/rdk_financial/views/etat_vehicule_client.html">voir</a></td>
                  </tr>
                  <tr onclick="location.pathname ='/views/information_client.html'" >
                    <th scope="row">8</th>
                    <td>Sophia</td>
                    <td>billza</td>
                    <td>société 8</td>
                    <td>231 654 987 12315</td>
                    <td>vehicule 8</td>
                    <td>CD-487-ND</td>
                    <td>02/07/201</td>
                    <td>08/08/2021</td>
                    <td><a style='text-decoration:none; color:black' href="/rdk_financial/views/etat_vehicule_client.html">voir</a></td>
                  </tr>
                  <tr onclick="location.pathname ='/views/information_client.html'">
                      <th scope="row">9</th>
                      <td>Claire</td>
                      <td>carat</td>
                      <td>société 9</td>
                      <td>231 654 987 12315</td>
                      <td>vehicule 9</td>
                      <td>AA-572-BF</td>
                      <td>08/03/2021</td>
                      <td>10/08/2021</td>
                      <td><a style='text-decoration:none; color:black' href="/rdk_financial/views/etat_vehicule_client.html">voir</a></td>
                    </a>
               
                  <tr onclick="location.pathname ='/views/information_client.html'" >
                    <th scope="row">10</th>
                    <td>Christine</td>
                    <td>Morrand</td>
                    <td>société 10</td>
                    <td>231 654 987 12315</td>
                    <td>vehicule 10</td>
                    <td>AK-808-FK</td>
                    <td>26/09/2021</td>
                    <td>15/07/2021</td>
                    <td><a style='text-decoration:none; color:black' href="/rdk_financial/views/etat_vehicule_client.html">voir</a></td>
                  </tr>
                  <tr onclick="location.pathname ='/views/information_client.html'" >
                    <th scope="row">11</th>
                    <td>Wilfred</td>
                    <td>Windy</td>
                    <td>société 11</td>
                    <td>231 654 987 12315</td>
                    <td>vehicule 11</td>
                    <td>BG-553-ZS</td>
                    <td>26/09/2021</td>
                    <td>14/06/2021</td>
                    <td><a style='text-decoration:none; color:black' href="/rdk_financial/views/etat_vehicule_client.html">voir</a></td>
                  </tr>
                  <tr onclick="location.pathname ='/views/information_client.html'" >
                    <th scope="row">12</th>
                    <td>Caroline</td>
                    <td>Balao</td>
                    <td>société 12</td>
                    <td>231 654 987 12315</td>
                    <td>vehicule 12</td>
                    <td>BG-553-ZS</td>
                    <td>26/09/2021</td>
                    <td>14/06/2021</td>
                    <td><a style='text-decoration:none; color:black' href="/rdk_financial/views/etat_vehicule_client.html">voir</a></td>
                  </tr>
                  <tr onclick="location.pathname ='/views/information_client.html'" >
                    <th scope="row">13</th>
                    <td>Jean</td>
                    <td>Jacque</td>
                    <td>société 13</td>
                    <td>231 654 987 12315</td>
                    <td>vehicule 13</td>
                    <td>BG-553-ZS</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td><a style='text-decoration:none; color:black' href="/rdk_financial/views/etat_vehicule_client.html">voir</a></td>
                  </tr>
                  <tr>
                    <th scope="row">14</th>
                    <td>Mark</td>
                    <td>otto</td>
                    <td>société 1</td>
                    <td>231 654 987 12315</td>
                    <td>vehicule 14</td>
                    <td>BG-553-ZS</td>
                    <td>08/03/2021</td>
                    <td>14/06/2021</td>
                    <td><a style='text-decoration:none; color:black' href="/rdk_financial/views/etat_vehicule_client.html">voir</a></td>
                  </tr>
                  <tr onclick="location.pathname ='/views/information_client.html'">
                    <th scope="row">15</th>
                    <td>oumou</td>
                    <td>fitana</td>
                    <td>société 14</td>
                    <td>231 654 987 12315</td>
                    <td>vehicule 15</td>
                    <td>BG-553-ZS</td>
                    <td>08/03/2021</td>
                    <td>14/06/2021</td>
                    <td><a style='text-decoration:none; color:black' href="/rdk_financial/views/etat_vehicule_client.html">voir</a></td>
                  </tr>
                  <tr onclick="location.pathname ='/views/information_client.html'" >
                    <th scope="row">16</th>
                    <td>kylian</td>
                    <td>Messi</td>
                    <td>société 1</td>
                    <td>231 654 987 12315</td>
                    <td>vehicule 16</td>
                    <td>BG-553-ZS</td>
                    <td>08/03/2021</td>
                    <td>14/06/2021</td>
                    <td><a style='text-decoration:none; color:black' href="/rdk_financial/views/etat_vehicule_client.html">voir</a></td>
                  </tr>
                  <tr>
                 
                </tbody>
              </table>
          </div>
     
    
        
          <nav aria-label="Page navigation mt-5">
            <ul class="pagination pagination-clients">
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
      </div>
</body>
</html>