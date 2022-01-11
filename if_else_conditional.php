<?php

$age = 25;

// if($a < 50){
//     echo "a is smaller than 50";
// }
// else{
//     echo "a si greater than 50";
// }
 
// if($age <= 18){
//     echo " You can't drive a car";
// }
// else{
//     echo " You can drive a car";
// }

if($age > 25)
{
    echo "You can drink alchohol<br>";
}
elseif($age <= 25 && $age >= 18)
{
    echo "You can only drink chai<br>";
}
else
{
    echo "You can only drink water<br>";
}

?>