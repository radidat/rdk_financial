<!DOCTYPE html>
<html lang="fr">

<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link  href='./views/css/css-bootstrap/bootstrap.css' rel='stylesheet'>
    <link href='./views/Css/generale_site.css' rel='stylesheet'>
    <link href="./views/Css/<?=$linkCSS?>.css" rel='stylesheet'>
    <script src="https://kit.fontawesome.com/1748750407.js" crossorigin="anonymous"></script>
    <script src='./views/js/sidebar.js' defer></script>
    <script src='./views/js/js-bootstrap/bootstrap.js' defer></script>

    <title>Ajout</title>
</head>

<body>
<?= $content ?>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script> 

<?php if($_GET['page']==='location'): ?>
  <script src ='./views/js/signature.js'></script>
  <?php endif ?>

  <?php if($_GET['page']==='etats_vehicules' ||$_GET['page']==='etats_vehicule_client' ): ?>
  <script src ='./views/js/signatureEtat.js'></script>
  <?php endif ?>
</body>

</html>