<?php

/* 
 * Admin controller
 */
//begin the user authentication process
session_start();
// connect to the database
// connect to the model
// to get the request from the user
$action = filter_input (INPUT_POST, "action");
if($action == null){
    $action = filter_input(INPUT_GET, "action");
    if($action == null){
        $action = "login";
    }
}
//process the request by the user
switch ($action){
    case "login";
    include ("view/login.php");
    break;
//'....authenticate
 case "dashboard";
    include ("view/index.php");
    break; 

case "all-booking";
    include ("view/all-booking.php");
    break;

case "medication-stock";
    include ("view/medication-stock.php");
    break;

case "charts";
    include ("view/charts.php");
    break;

case "clients";
    include ("view/clients.php");
    break;

case "edit-admin";
    include ("view/edit-admin.php");
    break;

 case "forgot password";
     include("view/forgot-password.php");
     break;
 
    case "register an account";
        include("view/register.php");
        break;
 
default :
  include ("view/login.php");
    break;  
}
?>