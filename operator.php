<?php
/*Operators in PHP
1. Arithmatic Operators 
2. Assignment Operators
3. Comparision Operators
4. Logical Operators
 */
$a = 24;
$b = 12;
echo "For a + b the result is ".($a + $b)."<br>";
echo "For a - b the result is ".($a - $b)."<br>";
echo "For a * b the result is ".($a * $b)."<br>";
echo "For a / b the result is ".($a / $b)."<br>";
echo "For a % b the result is ".($a % $b)."<br>";
echo "For a ^ b the result is ".($a ** $b)."<br>"; //for using rase to the power
// Assignment Operators
/*$a += 6;
echo "The value of a is: ".($a);

$a -= 6;
echo "The value of a is: ".($a);

$a *= 6;
echo "The value of a is: ".($a);

$a /= 6;
echo "The value of a is: ".($a);*/

$a %= 6;
echo "The value of a is: ".($a);
echo "<br>";

// Comparsion Oparetors ==, < ,> ,<= ,>= always use the var_dump() function

$x = 7;
$y = 8;
echo "Is x < y or not : ";
echo var_dump($x < $y);
echo "<br>";
// Same as above all the operators will use

// logical Operators

$n = true;
$m = False;

echo "For n and m resutl is:";
echo var_dump($n and $m);
echo "<br>";

echo "For n or m resutl is:";
echo var_dump($n or $m);
echo "<br>";

echo "For n && m resutl is:";
echo var_dump($n && $m);
echo "<br>";

echo "For n || m resutl is:";
echo var_dump($n || $m);
echo "<br>";

echo "For !m resutl is:";
echo var_dump(!$m);
echo "<br>";


?> 