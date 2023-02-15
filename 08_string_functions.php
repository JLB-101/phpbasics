<?php 
/**
 * Eng: The PHP string functions are part of the PHP core. No installation is required to use these functions.
 * more on the link: https://www.w3schools.com/php/php_ref_string.asp
 * 
 * Pt: As funções de string do PHP fazem parte do núcleo do PHP. Nenhuma instalação é necessária para usar essas funções.
 * mais no link: https://www.w3schools.com/php/php_ref_string.asp
 */

 $string = 'Eng: Hello World !!! || Pt: Ola Mundo !!!';

 //Eng: get the length of a string || Pt: obter o comprimento de uma string
 echo strlen($string);
 echo '<br>';


 //Eng: find the pasition of the first occurence of a substring in a string || Pt: encontre a passagem da primeira ocorrência de uma substring em uma string
echo strpos($string, 'o');
echo '<br>';

//Eng: find the positon of the last occurence of a substring in a string || Pt: encontre a posição da última ocorrência de uma substring em uma string
echo strrpos($string, 'o');
echo '<br>';

//Eng: Reverse a string || Pt: Inverter uma string
echo strrev($string);
echo '<br>';

//Eng: covert all characters to lowercase || Pt: converter todos os caracteres para minúsculos
echo strtolower($string);
echo '<br>';

//Eng: covert all characters to uppercase || Pt: converta todos os caracteres para maiúsculos
echo strtoupper($string);
echo '<br>';

//Eng: uppercase the first character of each word || Pt: maiúsculo o primeiro caractere de cada palavra
echo ucwords($string);
echo '<br>';


//Eng: uppercase the first character of each word 
echo str_replace('World', 'Everyone', $string);
echo '<br>';



/* more on the link: https://www.w3schools.com/php/php_ref_string.asp
 * /

  

?>