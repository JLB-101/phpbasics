<?php 
/*
* The array functions allow you to access and manipulate arrays. Simple and multi-dimensional arrays are supported.
* more on the link: https://www.w3schools.com/php/php_ref_array.asp

*As funções de array permitem acessar e manipular arrays. Matrizes simples e multidimensionais são suportadas.
*mais no link: https://www.w3schools.com/php/php_ref_array.asp
*/

$fruits = ['apple', 'orange', 'pear'];

//Eng: Get length || Pt: obtendo a tamanho
echo "<hr>fruit array length: ". count($fruits);

//search array
var_dump('<hr> search array:' . in_array('apple', $fruits) .'<hr>');

//add to array 
$fruits[] = 'grape';
array_push($fruits, 'mango');

//remove from array
array_pop($fruits);
array_shift($fruits);

//split into 2 chunks
$chunked_array = array_chunk($fruits, 2);

//print
print_r($fruits);

//number
echo "<hr>";
$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = array_merge($arr1, $arr2);
print_r($arr3);


echo "<hr>";
$a= ['green', 'red', 'yellow'];
$b= ["avacado", "apple", "banana"];
$c = array_combine($a, $b);
print_r($c);

echo "<hr>";
$keys = array_keys($c);
print_r($keys);

echo "<hr>";
$flipped = array_flip($c);
print_r($flipped);


echo "<hr>";
$numbers = range(1,20);
print_r($numbers);


echo "<hr>";
$newNumbers = array_map(function($number) {
    return "Number: ${number}";
}, $numbers);
print_r($newNumbers);

/** 
 * more on the link: https://www.w3schools.com/php/php_ref_array.asp
*/
?>