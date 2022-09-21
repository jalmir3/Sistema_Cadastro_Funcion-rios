<html>
    <meta charset='utf-8'>
<body>
    <?php
    include_once("bd.php");
    $nome=$_POST['nome'];
    
    

    $tipo = array("image/jpeg","image/jpg","image/gif","image/jpeg","image/bmp");
 
    if(in_array($_FILES['arquivo']['type'],$tipo)) {
        $diretorio= 'imagens/';
        $upfile = $diretorio.$_FILES['arquivo']['name'];
        var_dump($upfile);
        $resultado= move_uploaded_file($_FILES['arquivo']['tmp_name'],$upfile);
        if($resultado == true){
            $salvo = salvarFuncionario($nome,$upfile);
            echo 'Arquivo salvo com sucesso';
            header('location:listagem.php');

        }
        else{
            header('location:incluir.html');
        }
    } 
    else {
         echo 'Esse arquivo não é um arquivo suportado, os tipos suportados são: jpg, jpeg, gif e bmp';
    }
    echo "<br/>";
    echo '<br> <button onclick="history.back()">Voltar</button>';
        

    ?>
</body>
</html>
