<?php

require_once "config.php"; // configuration
        
if(!isset($_GET['page'])){
    include_once "AccueilPort.php";
}else{
    // pas sur l'accueil
    switch($_GET['page']){
        case "cv":
           // include_once "CvPort.html";
           include_once "CvPort.php";
            break;
        case "tuto":
           // include_once "TutorielsPort.html";
           include_once "TutorielsPort.php";
            break;
        case "Contact":
           // include_once "ContactPort.html";
           include_once "ContactPort.php";
            break;
        case "Galeries":
           // include_once "GaleriesPort.html";
           include_once "GaleriesPort.php";
            break;
        case "Liens":
           // include_once "LiensPort.html";
            include_once "LiensPort.php";
            break;
        case "Login":
            include_once "loginPort.php";
            break;         
        default:    
            include_once "AcceuilPort.php";      
    }
}