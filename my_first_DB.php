<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Krishna Phones</title>
    <style>
body{
    
    margin: 0;
    padding: 0px 0px;
    color: white;
    background-color: rgb(6, 28, 61);
    height: 50rem;
}
.navbar{
    display: block;
    position: absolute;
    left: -20px;
    top: 0px;
    font-size: 20px;
    
}
.search{
    display: inline-block;
    position: absolute;
    right: 20px;
    top: 21px;
    font-size: 20px;
}
.navbar li{
    display: inline-block;
    padding: 0px 33px;
}
.navbar li a{
    text-decoration: none;
    color: white;
    display: block;
}
.header{
    background-color: rgb(9, 20, 41);
    height: 68px;
}
.navbar li a.active, .navbar li a:hover{
    background-color: rgb(6, 28, 61);
    text-decoration: underline;
}
.search input{
    border: 2px solid black;
    border-radius: 10px;
    text-align: center;
    font-size: 17px;
}
img{
    width: 100%;
    height: cal(50rem-68px);
}
.form{
    border: 3px solid #760f73;
    width: 31%;
    padding: 25px 25px;
    border-radius: 9px;
    margin: 56px 50px;
    display: inline-block;
    position: absolute;
    left: 25px;
    top: 225px;
    font-size: 35px;
    text-align: center;
    color: #760f73;
}

.greet {
    display: inline-block;
    position: absolute;
    right: 56px;
    top: 278px;
    font-size: 61px
}

.submit{
    background-color: grey;
    color: #760f73;
    border: 2px solid black;
    border-radius: 3px;
    width: 180px;
    padding: 4px;
}
.select{
    
    color: -internal-light-dark(black, white);
    font-size: inherit;
    display: inline-block;
    text-align: start;
    background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));
    padding: 1px 2px;
    border-width: 2px;
    border-style: inset;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    
}
#select{
    width: 169px;
    font-size: 12px;
}
.success{
    width: 250px;
    height: 20px;
    margin: 25px;
    padding: 10px;
    background-color: green;
    border-radius: 5px;
    font-size: 20px;
}
    </style>
</head>

<body>
    <header class="header">
        <div class="navbar">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="search">
            <input type="text" name="search phones!" placeholder="search phones!">
        </div>
    </header>
    <img src="Assets\bg.jpg" alt="image">
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $mono=$_POST['mono'];
    $email=$_POST['email'];
    $moname=$_POST['moname'];
    $mocolor=$_POST['mocolor'];
    $movarient=$_POST['movarient'];
    $about=$_POST['about'];

    $servername="localhost";
    $username="root";
    $password="";
    $database="krishna phones";

    $conn=mysqli_connect($servername, $username, $password, $database);
    
    if(!$conn){
        die("We Are Anable to Connect. Sorry!" . mysqli_connect_error());
    }
    else{
        $sql="INSERT INTO `from custmer` (`name`, `mono`, `email`, `moname`, `mocolor`, `movarient`, `about`, `dt`) VALUES ('$name', '$mono', '$email', '$moname', '$mocolor', '$movarient', '$about', 'CURRENT_TIMESTAMP(6).000000');";
        $result=mysqli_query($conn,$sql);

        if($result){
            echo "Your Data Is Successfully Submited!";
        }
        else{
            echo "Something Went Wrong!";
        }
    }

}



?>
    <div class="form">
        Give a new Order
        <form action="my_first_DB.php" method="post">
            <input type="text" name="name" placeholder="Enter Your Name">
            <input type="text" name="mono" placeholder="Enter Your Mobile number">
            <input type="email" name="email" placeholder="Enter Your Email">
            <li class="select" id="select">Choose Brand:
                <select class="select" name="" id="">
                    <option value="Realme">Realme</option>
                    <option value="Samsung">Samsung</option>
                    <option value="Xiaomi">Xiaomi</option>
                    <option value="Oppo">Oppo</option>
                    <option value="Vivo">Vivo</option>
                    <option value="OnePlus">OnePlus</option>
                    <option value="Infinix">Infinix</option>
                </select></li>
            <input type="text" name="moname" placeholder="Model Name">
            <input type="text" name="mocolor" placeholder="Model Color">
            <input type="text" name="movarient" placeholder="Model Varient">
            <input type="text" name="about" placeholder="Type something about this">
            <button class="submit">Submit</button>
        </form>
    </div>
    <div class="greet" id="greet">
        Welcome to Krishna Phones!
    </div>
</body>

</html>