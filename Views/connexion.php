<!DOCTYPE html>
<html lang="fr">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href='../bootstrap-5/css/bootstrap.css' rel='stylesheet'>
    <link href='../Css/generale.css' rel='stylesheet'>
    <link href='../Css/./inscription_et_connextion.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/1748750407.js" crossorigin="anonymous"></script>
    <script src='./js/sideBar.js' defer></script>
    <script src='../bootstrap-5/js/bootstrap.js' defer></script>
    <title>connexion</title>
</head>
<body>
   
  <div id='bg-connexion'>
    <div class = 'container-data'>

        <form  class='row connexion'>
          <img src='../images/rdk_financial.png' class='logo_rdk_connexion'>
        <div class='col-md-12 row'>
                
              <div class="mb-3 col-12">
                <label for="exampleFormControlInput1" class="form-label">Identifiant</label>
                <input type="text" class="form-control " >
              </div>

              <div class="mb-3 col-12">
                <label for="exampleFormControlInput1" class="form-label">Mot de passe</label>
                <input type="text" class="form-control "  >
              </div>
            <div class='col-12'>
              <button type='submit' class='btn btn-primary w-100 '>Se connecter</button>
            </div>
            <div class='d-flex justify-content-around flex-nowrap'>
              <p class='col-6' style='white-space: nowrap'>Mot de passe oublié</p>
              <a href="rdk_financial/Views/inscription.html" class='col-8' style='padding-left:35px'>s'inscrire</a>
          </div>
        </div>
       
        </form>
    </div>
    </div>
</body>
</html>