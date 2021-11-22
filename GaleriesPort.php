<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleport.css">
    <link rel="icon" type="image/x-icon" href="imagePort\iconPort.png" />
    <title>Galeries</title>
</head>
<body>
<?php include_once "Menu.php"; ?>  
<!-- <?php //include_once "Menu.php"; ?> -->
    <h1 id="titreprincipal">Titre</h1> 
     <!-- The grid: four columns -->
<div class="row">
  <div class="column gal1">
    <img src="imagePort\img_nature.jpg" alt="Nature">
  </div>
  <div class="column gal2">
    <img src="imagePort\img_snow.jpg" alt="Snow">
  </div>
  <div class="column gal3">
    <img src="imagePort\img_mountains.jpg" alt="Mountains">
  </div>
  <div class="column gal4">
    <img src="imagePort\img_lights.jpg" alt="Lights">
  </div>
</div>


<div class="container">
<!--  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div> -->
</div>
    <p id="CR">&copy; JB</p>
</body>
</html>