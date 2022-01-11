<?php
//Creating a connection
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Sorry Not Able To Connect!" . mysqli_connect_error());
}
else{
    echo "Connection Is Successful";
}

?>