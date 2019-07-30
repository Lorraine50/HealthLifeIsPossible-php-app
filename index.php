<?php
/*
 * Controller
 */
//begin the user authentication process
session_start();// this code starts the session
// connect to the database
// connect to the model
// to get the request from the user
$action = filter_input (INPUT_POST, "action");
if($action == null){
    $action = filter_input(INPUT_GET, "action");
    if($action == null){
        $action = "index";
    }
}
//process the request by the user
switch ($action){
    case "index";
    include ("view/index.php");
    break;
    case "booking";
        include ("view/booking.php");
        break;
    case "HCP";
        include ("view/HCP.php");
        break;
     case "About";
        include ("view/About.php");
        break;
  case "Contact";
        include ("view/Contact.php");
        break;  
 
          
    case "Register";
        include ("view/Register.php");
        break;  
    case "Update";
        include ("view/Update.php");
        break; 
    

    case "Login";
        include ("view/Login.php");
        break;     
default :
  include ("view/index.php");
    break;  
}
?>
