<?php

    $servername = "localhost";
	$username = "root";
	$password = "";
	$db="crudoperation";
// Create connection
$con = new mysqli($servername, $username, $password, $db);
 
if(!$con){
    die(mysqli_error($con));
    
}

// else{
//     echo "Connection successful";
// }
?>