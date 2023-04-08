<?php 

//checking

if(isset($_POST['submit'])){

    ///
    if(!empty($_FILES['upload']['name'])){
        // print_r($_FILES);
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/$file_name";

        //get file ext
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($Ffile_name));

        //validate file ext
        if(in_array($file_ext, $allowed_ext)){
            if($file_size <= 1000000){
                move_uploaded_file($file_tmp, $target_dir);

                $massage = '<p style="color:green;">file uploaded successfully</p><br> <p style="color:red;">arquivo enviado com sucesso</p><br>';
            }else{
                $massage = '<p style="color:red;">File is too large</p><br> <p style="color:red;">O Arquivo e muito grande</p><br>';
            }
    

        }else{
            $massage = '<p style="color:red;">Please choose a file</p><br> <p style="color:red;">Escolha um arquivo</p><br>';
        }


    }else {
        $massage = '<p style=" Invalid file</p><br> <p style="color:red;"> arquivo/ficheiro Invalido </p><br>';
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SEL']; ?>" method="POST" enctype="multipart/form-data">
    <di>
        <label for="upload">Eng: Select image to upload <br> Pt: Seleciona imagem para submeter</label>
        <!--fild | campo -->
        <input type="file" name="upload">
         <!--Button -- botao para submeter -->
         <input type="submit" value="submit" name='submit'>

    </di>
    </form>
</body>
</html>