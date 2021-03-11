<?php 
  
  session_start();
  if(!isset($_SESSION['id_utilisateur'])){
    header("location: connection.php");
  }else{
    include'connexion_bd.php';
  }

 ?>
<!DOCTYPE html>
<html>
<head>
      <title>espacetechnique</title>
       <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="stylee.css">
<script src="https://unpkg.com/ionicons@5.1.0/dist/ionicons.js"></script>
<style >
  .social-menu ul{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 0;
    margin: 0;
    display: flex;
}
.social-menu ul li {
    list-style: none;
    margin: 0 10px;
}
.social-menu ul li .fa {
    color: #000000;
    font-size: 25px;
    line-height: 50px;
    transition: .5s;
}
.social-menu ul li .fa:hover {
    color: #ffffff;
}
.social-menu ul li a {
    position: relative;
    display: block;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: white;
    text-align: center;
    transition: 0.5s;
    transform: translate(0,0px);
    box-shadow: 0px 7px 5px rgba(0, 0, 0, 0.5);
}
.social-menu ul li a:hover {
    transform: rotate(0deg) skew(0deg) translate(0, -10px);
}
.social-menu ul li:nth-child(1) a:hover {
    background-color: #3b5999;
}
.social-menu ul li:nth-child(2) a:hover {
    background-color: #55acee;
}
.social-menu ul li:nth-child(3) a:hover {
    background-color: #e4405f;
}
.social-menu ul li:nth-child(4) a:hover {
    background-color: #cd201f;
}
.social-menu ul li:nth-child(5) a:hover {
    background-color: #0077B5;
}
.copyright {
 margin-left: 400px;
  font-weight: bold;  
    color: black;

}

</style>
</head>
<body>

      <section id="nav-bar">
  <nav class="navbar navbar-expand-lg navbar-light ">
   <div class="container"> 
    <a class="navbar-brand" href=""><img alt="nav" src="images/logo2.png" ></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
            <li class="nav-item">
          <a class="nav-link" href="espacetechnique.php">retour</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="consulterdevis.php">ConsulterDevis</a>
        </li>
         
        <li class="nav-item">
          <a class="nav-link" href="devis.php">Se déconnecter</a>
        </li>
      </ul>   
    </div>
  </nav>
</section>
<center>       
<h3>Liste des devis : </h3> <br> 
                <form action="" method="post">
                  <div class="form-group">
                  <div class="input-group input-group-sm" style="width: 230px; margin-left: 1100px;">
                  <input type="text" name="id" class="form-control" placeholder="Recherche">
                  <div class="input-group-append">
                      
                      <div class="form-group"></div><button type="submit" name="rech" class="btn btn-primary" style="height: 30PX; margin-top: 10px" ><ion-icon name="search-outline"></ion-icon></button>
                    
                  </div>
                 </div>
                </div>
               </form>             
   <table class='table' bordered='1'>  
                    <tr style='background-color:;'>  
                         <th>id_devis</th>
                         <th>nametp</th>  
                         <th>email</th>  
                         <th>tele</th>
                         <th>pays</th>
                         <th>ville</th>  
                         <th>codep</th>  
                         <th>adress</th>
                         <th>prestation</th>  
                         <th>dateS</th>
                         <th></th>
                    </tr>

<?php if (isset($_POST['rech'])) {
  $id=$_POST['id'];
  $r="SELECT * FROM `devis` WHERE id_devis='$id'";
} else {
  $r="SELECT * FROM `devis`";
}

$result = mysqli_query($con,$r);
while($P = mysqli_fetch_array($result)){?>

                    <tr>
                         <td><?php echo $P['id_devis']; ?></td>
                         <td><?php echo $P['nometp']; ?></td>  
                         <td><?php echo $P['email']; ?></td>  
                         <td><?php echo $P['tele']; ?></td>
                         <td><?php echo $P['pays']; ?></td>
                         <td><?php echo $P['ville']; ?></td>  
                         <td><?php echo $P['codep']; ?></td>  
                         <td><?php echo $P['adress']; ?></td>
                         <td><?php echo $P['prestation']; ?></td>  
                         <td><?php echo $P['dateS']; ?></td>
                         <td><div class="row"><form action="validevis.php" method="post"><input type="hidden" name="id_devis" value="<?php $i=5;
                         echo $P['id_devis']; ?>"> <button type="submit" name="ref" class="btn btn-danger" onclick="return confirm('Voulez vous vraiment supprimer ce enregistrement?');" style="height: 30PX; width: 30px; border-radius: 50%; margin-top: 10px" ><ion-icon name="close" style="margin-left: -6px"></ion-icon></button></form><a name="acpt" class="btn btn-success" <?php echo "href='devisaccepter.php?id=".$P[0]."'"; ?> style="height: 30PX; width: 30px; border-radius: 50%; margin-top: 10px" ><ion-icon name="checkbox"style="margin-left: -5px" ></ion-icon></a></div></td>
                    </tr>

                  <?php } ?>
                </table>

                       <br/>
              

</center>

                
                  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.13.1/js/all.js"data-auto-a11y="true"></script>


<div class="jumbotron text-center" style="margin-bottom:0">


</body>
<footer>  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
 <h3>Appelez-nous</h3>
      <p><svg class="bi bi-phone" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
  <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg> 
0623456347</br>
         <svg class="bi bi-phone" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
  <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>
        0523456947
        </br>
        <svg class="bi bi-envelope" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 3H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
  <path d="M.05 3.555C.017 3.698 0 3.847 0 4v.697l5.803 3.546L0 11.801V12c0 .306.069.596.192.856l6.57-4.027L8 9.586l1.239-.757 6.57 4.027c.122-.26.191-.55.191-.856v-.2l-5.803-3.557L16 4.697V4c0-.153-.017-.302-.05-.445L8 8.414.05 3.555z"/>
</svg>
        Renopart@gmail.com

      </p>
      
    </div>
    <div class="col-sm-4">
      <h3>Notre adresse</h3>
      <p><svg class="bi bi-geo-alt" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
18,Hay Salam,oujda Maroc</p>
      
    </div>
    <div class="col-sm-4">
     <h3>Nos réseaux sociaux</h3>     
      <svg class="bi bi-wifi" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M6.858 11.858A1.991 1.991 0 0 1 8 11.5c.425 0 .818.132 1.142.358L8 13l-1.142-1.142z"/>
<div class="social-menu">
  <ul>
   
<li><a class="btn-floating btn-lg btn-fb" type="button" role="button"><i class="fab fa-facebook-f"></i></a></li>

<li><a class="btn-floating btn-lg btn-ins" type="button" role="button"><i class="fab fa-instagram"></i></a></li>

<li><a class="btn-floating btn-lg btn-email" type="button" role="button"><i class="fas fa-envelope"></i></a></li>

<li><a class="btn-floating btn-lg btn-gplus" type="button" role="button"><i class="fab fa-google-plus-g"></i></a></li>

</ul>
</div>
 
</svg>   
</br>
</div>
<div class="copyright">
  <i class="far fa-copyright"></i>2020 copyright:Renopart_Company
</div>

</footer>
</html>