<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
<link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="stylee.css">

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
        <li class="nav-item active">
          <a class="nav-link" href="Acceuil.php">Acceuil </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="connection.php">Se connecter</a>
        </li>
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Préstation
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="plomberie.php">Plomberie</a>
          <a class="dropdown-item" href="menuiserie.php">Mennuiserie</a>
          <a class="dropdown-item" href="jardinage1.php">Jardinage</a>
          <a class="dropdown-item" href="decoration.php">Décoration</a>
          <a class="dropdown-item" href="electricite.php">Electricité</a>
          <a class="dropdown-item" href="maçonerie.php">Maçonnerie</a>
         
      </li>
        <li class="nav-item">
          <a class="nav-link" href="devis.php">Demande devis</a>
        </li>
      </ul>   
    </div>
  </nav>
</section>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/maisonn1.jpg" alt="First slide">
        <div class="center"><h1>Vous imaginez,nous réalisons...</h1></div>

      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/decorationn.jpg" alt="Second slide">
        <div class="center"><h1 >Vous imaginez,nous réalisons...</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/plantes.jpg" alt="Third slide">
        <div class="center"><h1>Vous imaginez,nous réalisons...</h1></div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br/>

  <h1 align="center">BIENVENUE SUR NOTRE SITE</h1>
  <br/>
    <br/>

  <center>
    <h2>Qui Sommes Nous?</h2>

    <p>   L'entreprise RENOPART est spécialisée dans la rénovation de maisons et d'appartements auprès           
      de particuliers (dans notre cas les clients). Elle y réalise des travaux (diverses prestations) de
      plomberie, électricité, menuiserie, décoration et fournit les matériaux nécessaires pour les réalisés.
      <br/><br/>En effet, pour faire face à la demande croissante de particuliers souhaitant faire des travaux
      , la société envisage de faire appel, en plus de ses propres ouvriers, à des ouvriers indépendants.
      Pour cela, elle envisage de développer un système baptisé RENOPART.<br/><br/> De plus, divers services 
      interagissent dans la gestion de ce système, le service administratif, le Dservice technique,
      le service comptable et le service marketing.
      Ce système RENOPART permet de gérer les demandes de travaux en recherchant et en affectant 
    à Cces demandes un ouvrier indépendant pour les réalisés.  Après cela la société rétrocédera aux ouvriers indépendants le montant des factures reçues, Amoins un pourcentage fixe qu'elle conservera pour frais de gestion et marketing.</p>
  </center>
</br>
<center>
	<!.........prestations.........>
	<section id="prestations">
   <h2> NOS PRESTATIONS</h2>
   

 </br>
 <p>Notre entreprise spécialisée réalise tout vos travaux(Electricité,Mennuisier,jardinage,ect...), que vous soyez un particulier ou un professionnel. Découvrez nos différentes prestations.</br></br>


  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="decoration.php">
      <img src="images/home.jpg" alt="home" width="200" height="100">
    </a>
    <div class="desc"><h5>Décoration</h5></div>
  </div>
</div>



 


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="Maçonerie.php">
      <img src="images/mac.jpg" alt="mac" width="200" height="100">
    </a>
    <div class="desc"><h5> Maçonnerie </h5><p>
</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="electricite.php">
      <img src="images/elec.jpg" alt="elec" width="100" height="100">
    </a>
    <div class="desc"><h5>Eléctricité</h5></div>
  </div>
</div>


</p>
</center>


<center>
<p>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="jardinage1.php">
      <img src="images/jard.jpg" alt="jard" width="200" height="100">
    </a>
    <div class="desc"><h5>Jardinage</h5></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="plomberie.php">
      <img src="images/plomb.jpg" alt="plomb" width="200" height="100">
    </a>
    <div class="desc"><h5>Plomberie</h5></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="menuiserie.php">
      <img src="images/menui.jpg" alt="menui" width="100" height="100">
    </a>
    <div class="desc"><h5>Menuiserie</h5></div>
  </div>
</div>


</p>
</center>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.13.1/js/all.js"data-auto-a11y="true"></script>


<div class="jumbotron text-center" style="margin-bottom:0">

  
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
   
<li><a  class="btn-floating btn-lg btn-fb" type="button" role="button"><i class="fab fa-facebook-f"></i></a></li>

<li><a  class="btn-floating btn-lg btn-ins" type="button" role="button"><i class="fab fa-instagram"></i></a></li>

<li><a  class="btn-floating btn-lg btn-email" type="button" role="button"><i class="fas fa-envelope"></i></a></li>

<li><a class="btn-floating btn-lg btn-gplus" type="button" role="button"><i class="fab fa-google-plus-g"></i></a></li>

</ul>
</div>
 
</svg>   
</br>
</div>
<div class="copyright">
  <i class="far fa-copyright"></i>2020 copyright:Renopart_Company
</div>

</body>

</html>