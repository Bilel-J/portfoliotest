<?php

require_once "config.php"; // configuration
        
if(!isset($_GET['pg'])){
    include_once "import/homepage.php";
}else{
    // pas sur l'accueil
    switch($_GET['pg']){
        case "cv":
            include_once "#";
            break;
        case "tuto":
            include_once "#";
            break;
        case "Contact":
            include_once "ContactPort.html";
            break;
        case "Menu":
            include_once "Menuport.html";
            break;
        case "Galeries":
            include_once "GaleriesPort.html";
            break;
        case "Liens":
            include_once "Liens.html";
            break;     
        default:    
            include_once "import/homepage.php";
        
    }
}