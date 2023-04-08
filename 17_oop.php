<?php

 /* 1.Object Oriented Programming -- Programação Orientada a Objetos  */ 

/*
Eng: From PHP5 onwards you can write PHP in either a procedural or object oriented way.
     00P consists of classes that can hold " properties " and " methods " . Objects can be created from classes .

PT: Do PHP5 em diante, você pode escrever PHP de maneira procedural ou orientada a objetos. 
    00P consiste em classes que podem conter "propriedades" e "métodos".  Objetos podem ser criados a partir de classes.
*/



/*------------- 2.Class  ----------*/

//2.1.properties - are attributes that belong to a class | atributos que pertencem a uma classe.
//Acess Modifiers: public, private, protected | Modificadores de acesso: público, privado, protegido.
//public - can be acessed from anywhere | público - pode ser acessado de qualquer lugar.
//private - can only be acessed from inside the class | private - só pode ser acessado de dentro da classe.
//protected -  - can only be acessed from inside the class and by inheriting classes | protegido - -só pode ser acessado de dentro da classe e herdando classes.

//2.2.Creating a user class |criando uma classe de usuário
class User {

    //properties - are attributes that belong to a class | atributos que pertencem a uma classe.
    public $name;
    public $email;
    public $password;

   


    //2.4.A constructor is a method that runs when an object is created | Um construtor é um método que é executado quando um objeto é criado
    // function __construct($name, $email, $password){
    //     $this->name = $name;
    //     $this->email = $email;
    //     $this->password = $password;
    // }

    public function __construct(){

    }


    //2.3.method is fuction that belong to a class | método é função que pertence a uma classe
    //
    function set_name($name) {
        $this->name = $name;
    }

    //
    function get_name() {
       return $this->name;
    }

    function set_email($email) {
        $this->email = $email;
    }

    //
    function get_email() {
       return $this->email;
    }

    //output info |
    function print_User() {
        //getting info to print
         echo 'name: '.$this->get_name();
         echo 'email: '.$this->get_email();
    }
}



//3.instatiate a user object
$user1 = new User();
//3.1.initialize the variable name , giving name to the user | inicializa a variável name , dando nome ao usuário
$user1->$name = "Juliao0";

//output | saída na tela:
echo 'output | saída na tela: <br> name of user <br> nome do usuário :'. $user1->$name;
echo "<hr>";

//vardump($user1);
$user1->$email = "Juliao@outlook.com";
$user1->$password = "############";
var_dump($user1);
echo "<hr>";


//using method from the class, to give name to the user
$user1->set_email('Juliao1');


//method: output | saída na tela:
$user1->print_User();




//Inheritence
class Employee extends User {
    public $title;
     public function __construct($name, $email, $password, $title){

        //similar to super
        parent::__construct($name, $email, $password);
        $this->title = $title;  
     }

     public function get_title() {
        return $this->title;
     }
}


//3.instantiate an Employee object | instanciar um objeto Employee
$emmployee1 = new Employee('sara', 'sara@gmail.com', '######', 'Maneger');

//method: output | saída na tela:
echo '<br><hr><br>'.$emmployee1->get_title();



?>