
<?php 
//Sessions: 
session_start();

if(isset($_SESSION['username'])){
    echo'<h1> Wellcome ' .$_SESSION['username'] . '</h1> </br>';
    echo'<h1> Bem vindo ' .$_SESSION['username'] . '</h1> </br> <hr> <a href="13.2_logout.php"> - homepage </a>'; 

}else{
    echo'<h1> Bem vindo </h1> <br> <a href="13.2_logout.php"> - Logout </a> ';
}
?>
