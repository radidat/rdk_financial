<?php

ob_start();
?>
  <div id='bg-connexion'>
    <div class = 'container-data'>

        <form  class='row connexion' method='POST'>
          <img src='../images/rdk_financial.png' class='logo_rdk_connexion'>
        <div class='col-md-12 row'>
                   <?=(isset($_POST['submit_connexion']) ? $erreur: '')?>
              <div class="mb-3 col-12">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="text" class="form-control" name='mailconnect' >
              </div>

              <div class="mb-3 col-12">
                <label for="exampleFormControlInput1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control " name='mdpconnect'  >
              </div>
            <div class='col-12'>
              <button type='submit' class='btn btn-primary w-100 ' name='submit_connexion'>Se connecter</button>
            </div>
            <div class='d-flex justify-content-around flex-nowrap'>
              <p class='col-6' style='white-space: nowrap'>Mot de passe oublié</p>
              <a href="rdk_financial/Views/inscription.html" class='col-8' style='padding-left:35px'>s'inscrire</a>
          </div>
        </div>
       
        </form>
    </div>
    </div>
