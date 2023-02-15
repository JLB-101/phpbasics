<?php

/**PHP Comparison Operators
 * (==) --  Equal.      | (<) -- Less than. 
 * (===) -- Identical.  | (>) -- Greater than
 * (!=) --  Not equal.  | (>=) -- Greater than or equal to
 * (<>) --  Not equal.  | (<=) -- Less than or equal to
 * (!==) -- Not identical| (<=>) -- Spaceship
 * 
 */
//Eng: age variable. Pt: variável de idade:
$age = 0; //age-idade
$name = "john"; //name-nome
$x = "john"; //name-nome
echo "<h2>Eng: Name: {$name}<h2>";
echo "<h3> Age: {$age} | Idade: {$age} </h3>";

//Eng: making conditions. Pt: fazendo condições:
if ($age >= 18) {
    echo "<p>Eng: you are old enough to vote. Pt: você tem idade para votar </p>";
} elseif ($age < 17 && $age > 12) {
    echo "<p>Eng: you are not old enough to vote. Pt: você nao tem idade para votar </p>";
} else {
    echo "<p>Eng: go play baby. Pt: vá brincar bebê </p>";
}

/*PHP Logical Operators:
(and)-- "And" -> ($x and $y) {Eng: True if both $x and $y are true. || Pt: Verdadeiro se $x e $y forem verdadeiros.}	
(or) --	"Or"  -> ($x or $y)  {Eng: True if either $x or $y is true. || Pt: Verdadeiro se $x ou $y for verdadeiro}		
(xor)--	"Xor" -> ($x xor $y) {Eng: True if either $x or $y is true, but not both || Pt: Verdadeiro se $x ou $y for verdadeiro, mas não ambos}	
(&&) -- "And" -> ($x && $y)  {Eng: True if both $x and $y are true. || Pt: Verdadeiro se $x e $y forem verdadeiros.}	
(||) --	"Or"  -> ($x || $y)  {Eng: True if either $x or $y is true. || Pt: Verdadeiro se $x ou $y for verdadeiro.}	
(!)  -- "Not" -> (!$x)       {Eng: True if $x is not true. || Pt: Verdadeiro se $x não for verdadeiro.}
*/

//Eng: age variable. Pt: variável de idade:
$age = 18;
echo "<hr><h3>Eng: Name: {$name}<h3>";
echo "<h3> Age: {$age} | Idade: {$age} </h3>";

//Eng: making conditions. Pt: fazendo condições:
if (($age > 18) || ($age == 18)) {
    echo "<p>Eng: you are old enough to vote. Pt: você tem idade para votar</p>";
}

if ($name == "john " && $name == $x) {
    echo "<p>Eng: Welcome Mr jonh. Pt: Bem e Sr. john </p>";
} elseif ($name != "john" and $x != $name) {
    echo "<p>Eng: Sorry you aren't Mr jonh. Pt: Desculpe, você não é o Sr. Jonh.</p>";
}


// switch:

$favorcolor = "red";

switch ($favorcolor) {
    case 'red':
        echo 'your favorite color is red';
        break;
    case 'blue':
        echo 'your favorite color is blue';
        break;
    case 'green':
        echo 'your favorite color is greenv';
        break;
}
