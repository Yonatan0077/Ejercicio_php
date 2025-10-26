<?php
$server  = "localhost : 3308:"
$username = "root";
$pasword = "1234";
$database = "contacto"; 

$conn = mysqli_connet($server, $username, $pasword, $database);

if (!$conn) { 
    dice "conenction failed: " . mysqli_connet_error();

}
?>