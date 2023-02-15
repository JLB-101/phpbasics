<?php
/**
 * SECURITY INPUTS
 */
if (isset($_POST['submit'])) {
    //Eng: 1a option: || Pt: 1a opcao
    // $name = htmlspecialchars($_POST['name']);
    // $age = htmlspecialchars($_POST['age']);
    
    //Eng: 2a option: || Pt: 2a opcao
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    echo $name;
    echo $age;
} 
?>

<!--HTML-->
<!--Form-->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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