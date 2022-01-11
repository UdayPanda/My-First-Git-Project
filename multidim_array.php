<?php

$multiDim = array(
            array(4,9,7,5),
            array(8,8,0,1), 
            array(7,6,4,9)    
);
// normal form of printing multi dimentional array
// echo $multiDim[0][1];

// printing multi dimentional array by using for loop
// for($i=0;$i<count($multiDim);$i++)
// {
//     echo var_dump($multiDim[$i]);
//     echo "<br>";
// }

// priting multi dimentional array by using nested for loop 
for($i=0;$i<count($multiDim);$i++)
{
    for($j=0;$j<count($multiDim[$i]);$j++)
    {
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";
}

?>