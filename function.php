<?php

echo "This Program to find average of total marks <br>";

function avgmark($mark)
{
    $avg = 0;
    $i = 0; 
    foreach($mark as $value){
        $avg += $value;
        $i++;

        return $avg/$i;
    }
}

$uday = [98,95,94,98,100];
$result = avgmark($uday);
echo "The Average of total marks of uday is : $result";

?>