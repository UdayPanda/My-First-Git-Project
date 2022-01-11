<?php
$name ="Uday";
$number = 2000;
echo"My name is $name<br>";

// data types in php
// 1. String
// 2. Integer
// 3. Float
// 4. Boolean
// 5. Object
// 6. Array
// 7. NULL
$friend = "Aasutosh";
echo "$friend is Friend of $name";
//  Arrays in PHp
$Friend = array("Uday", "Dhananjay", "Surendra", "Aasutosh");
echo "<br>";
echo var_dump($Friend);
echo "<br>";
echo $Friend[0];
echo "<br>";
echo $Friend[1];
echo "<br>";
echo $Friend[2];
echo "<br>";
echo $Friend[3];
echo "<br>";
// echo $Friend[4]; It will not execute 
// NULL data type
$name = NULL;
echo var_dump($name);
// boolean data type
$meme = true;
$case = false;
echo "<br>";
echo var_dupm($meme);
echo "<br>";
echo var_dupm($case);

?>