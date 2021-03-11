<?php 
  session_start();
  if(isset($_SESSION['id_utilisateur'])){
	session_unset();
	session_destroy();
	header("location: connection.php");
  }




?>