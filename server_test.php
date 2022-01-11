<?php

echo "Welcome to the stage where we are ready to connect database.<br>";

$servername = "localhost";
$username = "root";
$password ="";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Sorry we are not connected!" . mysqli_connect_error());
}
else{
    echo "We are connected to database";
}


?>