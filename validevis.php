<?php 

include_once "connexion_bd.php";

   if (isset($_POST['ref'])) {
    $id_devis=$_POST['id_devis'];
     mysqli_query($con,"DELETE FROM devis WHERE id_devis='$id_devis'");
     header('Location: consulterdevis.php');
   }
   


?>