<?php
require './model/AuthentificationModel.php';
class AuthentificationControllers{

             public $AuthentificationModel;

      public function __construct()
      {
                $this->AuthentificationModel  = new AuthentificationModel(); 
      }


      public function inscription($post){ 

        
          $data_inscription =[];
if(isset($post['inscription_submit'])){
             $data_inscription[]= htmlspecialchars( $post['nom']);
           $data_inscription[]= htmlspecialchars($post['prenom']);
            $data_inscription[]=htmlspecialchars($post['mail']);
            $data_inscription[]=sha1($post['mdp']);

            /*if($execute == true){
                $oui= "inscription validé";
            }else{
                $erreur= "l'inscription à echouée".$db->errorInfo()[2];
            }*/
             
    }

           
                     
    $this->AuthentificationModel->new_inscritption($data_inscription);           
                       
        

        require './Views/inscription.php';
      }


     
      public function connexion($post){ 

        
        $data_connexion =[];


                   
  if(isset($post['submit_connexion']) && !empty($post['mailconnect']) && !empty($post['mdpconnect'])){
    $data_connexion[]= htmlspecialchars($post['mailconnect']);
    $data_connexion[]= sha1($post['mdpconnect']);

        $fetch_data = $this->AuthentificationModel->connexion($data_connexion);
             
        if(isset($fetch_data) && !empty($fetch_data)){
            $_SESSION['id'] = $fetch_data['id'];
            $_SESSION['mail'] =$fetch_data['mail'];
            $_SESSION['mpd'] = $fetch_data['mot_de_passe'];

            header("Location:main.php?page=vehicules.php");

        }
        else{
            $erreur="vous devez d'abord vous inscire";
        }

    }
    else{
        $erreur='tous les champs doivent être complétés';
    
}

      require './Views/connexion.php';
    }

}


/*
if(isset($_POST['submit_connexion'])){
    $mailconnect= htmlspecialchars($_POST['mailconnect']);
    $mdpconnect= sha1($_POST['mdpconnect']);
    if(!empty($mailconnect) && !empty($mdpconnect)){
        $userexist = $requser->rowCount();
        if($userexist == 1){
            $userinfo = $requser-> fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['mail'] =$userinfo['mail'];
            $_SESSION['mpd'] = $userinfo['mdp'];
            header("Location: acceuil.php");

        }
        else{
            $erreur="Mot de paase ou Mail incorrect";
        }

    }
    else{
        $erreur='tous les champs doivent être complétés';
    }
}*/