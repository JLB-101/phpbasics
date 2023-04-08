<?php 


define('DB_HOST', 'localhost');
define('DB_USER', 'lb');
define('DB_PASS', '1234');
define('DB_NAME', 'php_dev');

//Create  connection | Criar conexão
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Check connection | Verifique a conexão
if ($conn->connect_error) {
   die('Connection Failed | Conexão falhou ' . $conn->connect_error);
}
// } else {
//     # code...
// }
echo 'CONNECTED!';


?>