<?php

/*
Eng: Sessions are a way to store information ( in variables ) to be used across multiple pages . Unlike cookies , sessions are stored on the server.

Pt: As sessões são uma forma de armazenar informações (em variáveis) para serem usadas em várias páginas.  Ao contrário dos cookies, as sessões são armazenadas no servidor.
*/

//Sessions: 


if(isset($_POST['submit'])){$username= filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS ) ; $password = $_POST['password'];

if ($username == 'john' && $password = 'password') {
$_SESSION ['username'] = $username; header('Location : /php-crash/extras/dashboard.php');
} else{echo }

?>

<!--HTML-->
<!--Form-->
< form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"> 
    <div>
        <label for="name">Name: </label><input type="text" name="name"  required></input>
    </div>
    <div>
        <labelb for="age">age: </label><input type="number" name="age" required></input>
    </div>
    <div>
    <input type="submit" value="submit" name="submit">
    </div> 
</form>
<!--link-->

<!--end HTML-->