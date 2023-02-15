<?php
/**get and post php
 * Eng: $_GET and $_POST are Superglobal variables in PHP which used to collect data from HTML form and URL.
 * 
 * Pt:$_GET e $_POST são variáveis ​​superglobais em PHP usadas para coletar dados de formulário HTML e URL.
 */

if (isset($_POST['submit'])) {
    echo 'Name: '.$_POST['name'].'<br>';
    echo 'Age  : '.$_POST['age'].'<hr>';
} 
?>
<!-- <a href="<?php //echo $_SERVER['PHP_SELF']; ?>?name=brand">click</a> -->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name: </label><input type="text" name="name"  required></input>
    </div>
    <div>
        <labelb for="age">age: </label><input type="number" name="age" required></input>
    </div>
    <div>
    <input type="submit" value="submit" name="submit"
    >
    </div> 
</form>

<!--link-->

<!--end HTML-->