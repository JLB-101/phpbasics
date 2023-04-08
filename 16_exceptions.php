<?php
/*Eng: A exceptions can be thrown, and caught("catched") within PHP.
 Code may be surrounded in a try block to facitltate the catching of 
 potential exceptiond. Each try must have at least one corresponding
 catch or finally block.

 Pt: Uma exceção pode ser lançada e catch("catched") dentro do PHP.
  O código pode ser cercado por um bloco try para facilitar a captura de possíveis exceções.
  Cada tentativa deve ter pelo menos um correspondente
  pegar ou finalmente bloquear.
*/

//
function inverse($x) {
    if(!$x) {
        //throw Exception | lançar exceção
        throw new Exception('Division by zero');
    }
    return 1/$x;
}


try {
    //code...
    echo inverse(5);
    echo inverse(0);
} catch (Exception $e) {
    //throw $th;
    echo 'Caught Exception | Exceção capturada: ', $e->getMessage(), ' '.'<br>';
}finally{
    echo 'Second Finally <br>';
}


try {
    //code...
    echo inverse(0);
} catch (Exception $e) {
    echo 'Caught Exception | Exceção capturada: ', $e->getMessage(), ' '.'<br>';
}finally{
    echo 'Second Finally <br>';
}

?>