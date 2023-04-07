<?php
/*
Eng: Sessions are a way to store information ( in variables ) to be used across multiple pages . Unlike cookies , sessions are stored on the server.

Pt: As sessões são uma forma de armazenar informações (em variáveis) para serem usadas em várias páginas.  Ao contrário dos cookies, as sessões são armazenadas no servidor.
*/

//Sessions: 
session_start();

if(isset($_POST['submit'])){
    $username= filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS );
    $password = $_POST['password'];

    if ($username=='john' && $password=='password') {
        $_SESSION['username'] = $username;
        header('Location : /13.1_dashboard.php');
    } else{
        echo'incoret login </br> login incorrecto <hr></br>'; 
    }

}
?>

<!--HTML-->
<!--Form-->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"> 
    
    <div class="username">
        <label for="username">username: </label><input type="text" name="username"  required></input>
    </div>
   
    <div  class="password">
        <labelb for="password">password: </label><input type="text" name="password" required></input>
    </div>
    
    <input type="submit" value="submit" name="submit">
</form>
<!-- end form-->