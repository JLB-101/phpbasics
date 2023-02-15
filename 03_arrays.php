<pre>
<?php 
//Eng: simple Array
//Pt:  Array simples
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0]; //int

$fruits = array('apple_maca', 'orange_laranja','banana', '...'); //strings

/*
*Eng:arrays have an index to define the position where the element is located, starts counting from zero to. 
*
*Pt:arrays possuem um índice para definir a posição onde o elemento está localizado, começa a contar de zero a..
*/

//output , saída (php-html):
echo "<h3>numbers: index zero -- element: {$numbers[0]} </h3>";

echo "<h3>numbers: index five -- element: {$numbers[5]} </h3>";

echo "<h3>fruits:  index one  -- element: {$fruits[1]} </h3>";

//output, saída:
var_dump($numbers);
var_dump($fruits);
?>
</pre>
