<?php
$conn = mysqli_connect('localhost','root','','data');
$NOM=$_POST['username'];
$PSW=$_POST['password'];
$req="INSERT INTO tab (nom_utilisateur,mot_de_passe) values ('$NOM','$PSW')";
$res=mysqli_query($conn,$req);
echo date("y/m/d");
?>
<!DOCTYPE html>
<html>
<head>
  <title>EST SB</title>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <meta  name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style12.css">
  
    
</head>
<body>

  <h1> <G>Bienvenue à l'École supérieur de technologie sidi bennour</G> </h1>
   <img src="https://source.unsplash.com/random" name="slide">
 
<!-- Exemple de Slideshow très basique avec du JS -->
<script type="text/javascript">
  var i = 0;
var images = [
              'logoEst.jpg',
              'photo.jpg',
              'photo2.jpg',
              'image9.jpg',
              'image1.jpg',
              'img3.jpg',
              'imagev.jpg',
              'imager.jpg',
              'images.jpg',
              'imageG.jpg'
              ];
              
               
             
var time = 2000;

function changeImg(){

document.slide.src = images[i];

if (i < images.length - 1) {
i++;
} else {
i = 0;
}
setTimeout("changeImg()", time);
}
window.onload = changeImg;

</script>
  
<h2>PRESENTATION DE ESTSB</h2>
 <p>L’Ecole Supérieure de Technologie Sidi Bennour (ESTSB) est un établissement public d’enseignement supérieur à finalité de formation des Techniciens Supérieurs. Elle a été créée en Août 2016 par le Ministère de l’Enseignement Supérieur, de la Formation des Cadres et de la Recherche Scientifique du Royaume du Maroc. L’ESTSB est une composante de l’Université Chouaib Doukkali d’El Jadida. Sa vocation est de former des Techniciens Supérieurs polyvalents,  hautement qualifiés et immédiatement opérationnels après leur sortie de l’Ecole en tant que collaborateurs d’ingénieurs et de managers.  Sont admis à l’ESTSB, les bacheliers de l’enseignement secondaire technique, scientifique et tertiaire. L’admission à  l’Ecole (au de Diplôme Universitaire de Technologie « DUT »)  se fait par voie de sélection par ordre de mérite après une présélection sur la base des notes obtenues au baccalauréat. Les candidats doivent être âgés de 22 ans au plus au 31 Décembre de l’année du  concours et doivent déposer leurs dossiers de pré-inscription avant  le 30 Juin de chaque année universitaire.</p> 
 <h2>FILIERE GI</h2>
 <h3>génie logiciel ou réseau</h3>  
 <p>Le génie informatique, ou l'ingénierie informatique, est une discipline qui traite de la conception, du développement et de la fabrication de systèmes informatiques, aussi bien d'un point de vue matériels que logiciels.</p>
 <div class="container">
  <h2>GENIE INFORMATIQUE</h2>
   <table class="table table-striped table-bordered table-hover">
    <th>SEMESTRE</th>
    <th> MATIERE</th>
    <th> PROFESSEUR</th>
    <tr>
      <td style=" font-size: 3rem">S1</td>
      <td> Bureutique<br>Français<br>Algebre1<br>Anglais<br>Analyse1<br>Informatique indus<br>Prog C<br>Organisation et Droit d'entreprise<br>Algorithme<br>Electronique analogique et numérique<br>Architecture</td>
      <td>ABDELALI SAIDI<br>HICHAM TOUMI<br>BADDI<br>MABROUK ABDELFETAH<br>TAKI<br>BAHRAOI<br>ZAAKOUNI<br>BEKKALI</td>
    </tr>
    <tr>
      <td style=" font-size: 3rem">S2</td>
      <td>Algebre2<br>Merise<br>Réseaux informatiques<br>Structures de données<br>Introduction Aux BDD<br>Système d'exploitation<br>Vb.Net<br>Analyse2<br>C++</td>
      <td>ABDELALI SAIDI<br>HICHAM TOUMI<br>BADDI<br>MABROUK ABDELFETAH<br>TAKI<br>BAHRAOI<br>ZAAKOUNI<br>BEKKALI</td>
    </tr>
    <tr>
      <td style=" font-size: 3rem">S3</td>
      <td>WEB2<br>RESEAUX AVANCES<br>CONCEPTION UML<br>BASE DE DONNEES ORACLE<br>DEV WEB<br>POO JAVA<br>DOCUMENTS IMPORTANTS<br>CONTRIBUTIONS DES ETUDIANTS</td>
      <td>ABDELALI SAIDI<br>HICHAM TOUMI<br>BADDI<br>MABROUK ABDELFETAH<br>TAKI<br>BAHRAOI<br>ZAAKOUNI<br>BEKKALI</td>
    </tr>
    <tr>
      <td style=" font-size: 3rem">S4</td>
      <td>ANGLAIS TECHNIQUE<br>Français Technique<br>Contributions des Etudiants<br>Atelier De Génie logiciel<br>Documents Importants<br>Interface Homme-Machine<br>Multimedia<br>Gestion De Projet</td>
      <td>ABDELALI SAIDI<br>HICHAM TOUMI<br>BADDI<br>MABROUK ABDELFETAH<br>TAKI<br>BAHRAOI<br>ZAAKOUNI<br>BEKKALI</td>
    </tr>
   </table>
 </div>
 <style type="text/css">
      #slider {
    width:  900px;
    height: 600px;
    overflow: hidden;
}

#slider .slides {
    display: block;
    width: 6000px;
    height: 400px;
    margin: 0;
    padding: 0;
}

#slider .slide {
    float: left;
    list-style-type: none;
    width: 600px;
    height: 400px;
}

/* helper css, since we don't have images */
.slide1 {background-image: url("S4.jpg");}
.slide2 {background-image:url("S2.jpg"); }
.slide3 {background-image: url("S1.jpg");}
.slide4 {background-image: url("S3.jpg");}

    </style>
    <div class="container">
            <div class="header">
                <h2 class="text-muted">L'EMPLOI DU TEMPS FILLIERE GI</h2>
            </div>

            <div id="slider">
                <ul class="slides">
                    <li class="slide slide1">S1</li>
                    <li class="slide slide2">S2</li>
                    <li class="slide slide3">S3</li>
                    <li class="slide slide4">S4</li>
                   
                    <li class="slide slide1">S1</li>
                </ul>
            </div>

        </div>
        <script>
          'use strict';

$(function() {

    //settings for slider
    var width = 720;
    var animationSpeed = 1000;
    var pause = 3000;
    var currentSlide = 1;

    //cache DOM elements
    var $slider = $('#slider');
    var $slideContainer = $('.slides', $slider);
    var $slides = $('.slide', $slider);

    var interval;

    function startSlider() {
        interval = setInterval(function() {
            $slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function() {
                if (++currentSlide === $slides.length) {
                    currentSlide = 1;
                    $slideContainer.css('margin-left', 0);
                }
            });
        }, pause);
    }
    function pauseSlider() {
        clearInterval(interval);
    }

    $slideContainer
        .on('mouseenter', pauseSlider)
        .on('mouseleave', startSlider);

    startSlider();


});
</script>
</body>
</html>
