
  <div id='bg-contra'>
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
       <h1 class='title-head'>Contravention</h1>
       <h2 class='pdf-title '>Télécharger le Pdf</h2>
      <div class = 'container-data'>
        <form  class='row contravention'  >
          <div class="mb-3  col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Nom : </label>
            <input type="text" class="form-control  " >
          </div>
                
          <div class="mb-3  col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Prenom</label>
            <input type="text" class="form-control"  >
          </div>
          <div class="mb-3 col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Telephone</label>
            <input type="text" class="form-control" >
          </div>
          <div class="mb-3 col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" >
          </div>
          
                
          <div class="mb-3  col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Adresse</label>
            <input type="text" class="form-control"  >
          </div>
          <div class="mb-3  col-md-6 col-lg-4">
            <label for="exampleFormControlInput1" class="form-label">Société</label>
            <input type="text" class="form-control"  >
          </div>
               
                <div class="mb-3  col-md-6 col-lg-4">
                  <label for="exampleFormControlInput1" class="form-label">N°siret</label>
                  <input type="number" class="form-control"  placeholder="name@example.com">
                </div>
                <div class="mb-3  col-md-6 col-lg-4">
                  <label for="exampleFormControlInput1" class="form-label">véhicule loué</label>
                  <input type="text" class="form-control"  placeholder="name@example.com">
                </div>
                <div class="mb-3 col-md-6 col-lg-4">
                  <label for="exampleFormControlInput1" class="form-label">Immarticulation</label>
                  <input type="text" class="form-control"  multiple placeholder="name@example.com">
                </div>
                <div class="mb-3 col-md-6 col-lg-4">
                    <label for="exampleFormControlInput1" class="form-label">Montant</label>
                    <input type="number" class="form-control"  >
                  </div>
                <div class="mb-3">
                  <button type='submit' class='btn  btn-contravention'>Enregistrer</button>
                </div>
              </form>
      </div>
    
  </div>
