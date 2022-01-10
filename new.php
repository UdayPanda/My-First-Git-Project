<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
    <style>
    h2{
        text-align: center;
        font-size: 50px;
    }
    form{
        border: 2px solid gray;
        border-radius: 5px;
        width: 75%;
        height: 250px;
        margin: auto;
    }
    input{
        padding: 10px;
        margin: 25px;
    }
    </style>
</head>
<body>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name =$_POST['name'];
    $email =$_POST['email']; 
    
    
    // Connecting to the database
    $servername ="localhost";
    $username ="root";
    $password ="";
    $database ="uday";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("We are not connected!" . mysqli_connect_error());
}
else{
    // echo "We are connected!";
    //Inserting a table
    $sql = "INSERT INTO `data` (`name`, `email`, `dt`) VALUES ('$name', '$email', 'CURRENT_TIMESTAMP(6).000000')";
    $result =mysqli_query($conn , $sql);
    
    if($result){
        echo "Your data sent";
    }
    else{
        echo "Someting went wrong!";
    }
  }
}


?>

    <h2>Fill this form</h2>
    <form action="uday\new.php" method="post">
    Name:<input type="text" name="name">
    email:<input type="email" name="email">
    <input type="submit">
    </form>
</body>
</html>