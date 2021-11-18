<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="galerie.css"> -->
    <script type="texte/javascript" src="galerie.js"></script>
    <link rel="icon" type="image/x-icon" href="imagePort\iconPort.png" />
    <title>Galeries</title>
</head>
<body>
<?php include_once "Menu.php"; ?>  
<!-- <?php //include_once "Menu.php"; ?> -->
    <h1 id="titreprincipal">Titre</h1> 
     <!-- The grid: four columns -->
<div class="row">
  <div class="column">
    <img src="imagePort\img_nature.jpg" alt="Nature" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="imagePort\img_snow.jpg" alt="Snow" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="imagePort\img_mountains.jpg" alt="Mountains" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="imagePort\img_lights.jpg" alt="Lights" onclick="myFunction(this);">
  </div>
</div>

<!-- The expanding image container -->
<div class="container">
  <!-- Close the image -->
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

  <!-- Expanded image -->
  <img id="expandedImg" style="width:100%">

  <!-- Image text -->
  <div id="imgtext"></div>
</div>
    <p id="CR">&copy; JB</p>
</body>
</html>