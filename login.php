<?php
session_start(); 
include_once 'connexion_bd.php'; 

if(isset($_POST['cnx']))
{

$niveau=$_POST['niveau'];
$user=$_POST['user'];
$mdp=$_POST['mdp'];

        if(isset($niveau) && isset($user) && isset($mdp))
        {

          $requete="select * from utilisateur where role='$niveau' and id_utilisateur='$user' and mdp='$mdp' ";
          $resultat=mysqli_query($con,$requete);
          $a=mysqli_fetch_row($resultat);



              if($a)  
              {

                $_SESSION['id_utilisateur']=$a[2];



                if($a[1]=='administrateur'){
                      header('Location: espaceadministratif.php');
                }elseif($a[1]=='espace comptable'){
                      header('Location: espacecomptable.php');
                }elseif($a[1]=='espace technique'){
                      header('Location: espacetechnique.php');
                }else{
                      header('Location: espaceouvrier.php');
                }

               

              }else{

            $_SESSION['erreur'] = "<script> alert('Identifiant ou mot de passe incorrect!'); </script>";
            header('Location: connection.php');
              }


        }

}  ?>