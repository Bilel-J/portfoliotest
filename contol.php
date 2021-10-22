<?php

require_once "config.php"; // configuration
        
if(!isset($_GET['pg'])){
    include_once "import/homepage.php";
}else{
    // pas sur l'accueil
    switch($_GET['pg']){
        case "cv":
            include_once "";
            break;
        case "tuto":
            include_once "";
            break;
        case "3":
            include_once "";
            break
        case "4":
            include_once "";
            break
        case "5":
            include_once "";
            break 
        case "6":
            include_once "";
            break       
        default:    
            include_once "import/homepage.php";
        
    }
}