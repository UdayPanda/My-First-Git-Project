<?php
$rate = 4;
echo "Give Your Rating About Us<br>";
 
switch($rate)
{
    case 1:
        echo "Your Rating is 1<br>";
    break;
    
    case 2:
        echo "Your Rating is 2<br>";
    break;
    
    case 3:
        echo "Your Rating is 3<br>";
    break;
    
    case 4:
        echo "Your Rating is 4<br>";
    break;
    
    case 5:
        echo "Your Rating is 5<br>";
    break;
    
    default:
        echo "Your Rating is invalid<br>";
    break;

}

?>