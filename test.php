<?php 

    include'connexion_bd.php';

if(isset($_POST['ajt']))
{



$role=$_POST['role'];
$id_utilisateur=$_POST['id_utilisateur'];
$mdp=$_POST['mdp'];


      

      $requete="INSERT INTO utilisateur (role, id_utilisateur, mdp) 
                                 VALUES ('$role', '$id_utilisateur', '$mdp')"; 
      $resultat = mysqli_query($con,$requete);

            if($resultat)
            {
              header('Location: ajoutercompteouvrier.php');
            }
            else{
            echo"erreur";
            printf("Error: %s\n", mysqli_error($con));
            exit();
            }
  

}


?>