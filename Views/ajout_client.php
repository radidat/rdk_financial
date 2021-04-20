
  <div id='bg-ajout-client'>
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
       <h1 class='title-head'>Ajouter un nouveau client</h1>
       
      <div class ='container-data'>

        <form action ='' method='POST'  class='row ajout-client' autocomplete="off" >
          <div class="mb-3  col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Nom</label>
            <input type="text" class="form-control " name ='nom' required>
          </div>
                
          <div class="mb-3  col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Prenom</label>
            <input type="text" class="form-control" name='prenom' required  >
          </div>
          <div class="mb-3  col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Téléphone</label>
            <input type="number" class="form-control" name='telephone' required>
          </div>
          <div class="mb-3 col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" name='email' required >
          </div>

                
                <div class="mb-3  col-md-6 col-lg-4">
                  <label for="exampleFormControlInput1" class="form-label">Société</label>
                  <input type="text" class="form-control" name='societe' required >
                </div>
               
                <div class="mb-3  col-md-6 col-lg-4">
                  <label for="exampleFormControlInput1" class="form-label">N°de siret</label>
                  <input type="number" class="form-control" name='num_siret' required >
                </div>

                <div class="mb-3  col-md-6 col-lg-4">
                  <label for="exampleFormControlInput1" class="form-label">Permis de conduire</label>
                  <input type="text" class="form-control" name='permis_de_conduire' required >
                </div>
                <div class="mb-3  col-md-6 col-lg-4">
                  <label for="exampleFormControlInput1" class="form-label">Lieu d'obtention</label>
                  <input type="text" class="form-control" name='lieu_d_obtention' required>
                </div>
                <div class="mb-3  col-md-6 col-lg-4">
                  <label for="exampleFormControlInput1" class="form-label">Date d'obtention</label>
                  <input type="date" class="form-control" name='date_d_obtention' required >
                </div>

                <div class="mb-3 col-md-6 col-lg-4">
                  <label for="exampleFormControlInput1" class="form-label">Photo du permis de conduire</label>
                  <input type="file" class="form-control"  multiple >
                </div>

                <div class="mb-3">
                  <button type='submit' name='submit' class='btn  btn-ajout-client'>Enregistrer</button>
                </div>
              </form>
      </div>
    
      <div>