<?php
/* 
This section contains the database connection codes
 */

$dbuser = "root";
$dbpass = "";
$dsn = "mysql:host=localhost;dbname=healthlifeispossible";

$db = new PDO($dsn, $dbuser, $dbpass);

if(!isset($db)){
    $message = "Error: System is not ready";
    include($_SERVER["DOCUMENT_ROOT"] . "/view/system-error.php");
}



?>