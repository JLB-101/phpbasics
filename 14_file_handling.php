<?php 
/* ----------- File Handling ------------*/

/**
 *Eng: File Handling is the ability to read and write files
 * on the server.
 * PHP has built in functions for reading and writing files.
 * 
 * Pt: Por: File Handling é a capacidade de ler e gravar arquivos no servidor.
 * O PHP possui funções integradas para leitura e gravação de arquivos.
 **
 */


 //read file | lendo arquivos ou ficheiros 
 $file = '14_users.txt';
 if(file_exists($file)){
    // echo(' - '.readfile($file)); //print-output list | imprimir a  lista

    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents.'<br>';
 }else {
    $handle = fopen($file, 'w');
    $contents = 'Brand'. PHP_EOL .'Sara' .PHP_EOL . 'Mike';
    fwrite($handle, $contents);
    fclose($handle);
 }
?>
