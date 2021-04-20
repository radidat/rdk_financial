
  <div id='bg-vehicules'>
    <div id="background"></div>
    <header >
      
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


      <div class='container-fluid'>

         <div class='search-car '>
          <form class="d-flex">
            <input class="form-control " type="search" placeholder="immarticulation" aria-label="Search">
            <button class="btn btn-search" type="submit"><i class="fas fa-search"></i></button>
          </form>
         </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button bg-white"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Categorie
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
             <ul class='categorie-items'>
               <li><a href='#'>Categorie-1</a></li>
               <li><a href='#'>Categorie-2</a></li>
               <li><a href='#'>Categorie-3</a></li>
               <li><a href='#'>Categorie-4</a></li>
               <li><a href='#'>Categorie-5</a></li>
             </ul>
            </div>
          </div>
        </div>

        <div class='categorie-container-lg '>
          <h1>Categorie</h1> 
          <ul class='categorie-items-lg'>
            <li><a href='#'>Categorie-1</a></li>
            <li><a href='#'>Categorie-2</a></li>
            <li><a href='#'>Categorie-3</a></li>
            <li><a href='#'>Categorie-4</a></li>
            <li><a href='#'>Categorie-5</a></li>
          </ul>
    
        </div>
       
         <div>

          <div class='filter-car'>

            <div class='filter-by-state'>
             <h5>Filtrer : </h5>
             <select class="form-select form-select-sm" aria-label=".form-select-sm example">
               <option value=''></option>
               <option value="1">Loue</option>
               <option value="2">Disponible</option>
               <option value="3">Entretien</option>
             </select>
            </div>

             <div class='sort'>
               <h5>trier : </h5>
               <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option value=''></option>
                 <option value="1">A-Z</option>
                 <option value="2">Z-A</option>
               </select>
  
            </div>
       
  
          </div>

        <div class='card-container-car  '>
         <?php foreach($fetch_vehicles as $vehicle): ?>
          <div class="card  "  style="width: 18rem;">
            <img src="./images/<?= $vehicle['image_1']?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Audi A5</h5>
                <h5>Etat du véhicule</h5>
                <div class='row'>
                  <label class="container-checkbox col-6">Loué
                    <input type="checkbox" checked>
                    <span class="checkmark rented"></span>
                  </label>
                  <label class="container-checkbox  col-6">disponible
                    <input type="checkbox">
                    <span class="checkmark available"></span>
                  </label>
                  
                  <label class="container-checkbox  col-12">Entretien
                    <input type="checkbox">
                    <span class="checkmark maintenance"></span>
                  </label>
                </div>
              <a href="?page=infos_vehicule&id=<?=trim($vehicle['id'])?>" class="btn  btn-color-infos">Plus d'informations</a>
            </div> 
          </div>
          <?php endforeach ?>
       
      </div>
      <nav aria-label="Page navigation mt-5 col-12 d-block">
            <ul class="pagination pagination-vehicule">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
</div>
