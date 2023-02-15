<?php
/*Eng: PHP Functions:
    A function is a block of statements that can be used repeatedly in a program.
    A function will not execute automatically when a page loads.
    A function will be executed by a call to the function.
/*Pt: Funções PHP
    Uma função é um bloco de instruções que podem ser usadas repetidamente em um programa.
    Uma função não será executada automaticamente quando uma página for carregada.
    Uma função será executada por uma chamada para a função.
*/

//Eng: function register user || Pt: função registrar usuário
function registerUser()
{
    echo "User registered !!! <br>";
}
registerUser(); //using the function

//Eng: sum function || Pt: função soma
function sum($x, $y)
{
    return 'sum result:' . ($x + $y);
}
sum(1, 2); //using the function



//Eng: Arrow functions have the basic form fn (argument_list) => expr. || Pt: As funções de seta têm a forma básica fn (argument_list) => expr.
//Eng: sum result variable || Pt: variável resultado da soma
// $somResult = 0;
// //Eng: Arrow functions.  || Pt: As funções de seta.
// $somResult = fn($n1, $n2) => $n1 + $n2;
// echo $somResult(1,2);
