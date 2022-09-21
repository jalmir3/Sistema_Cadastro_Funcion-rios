<?php 
    include_once 'bd.php';        
    include_once 'utils.php';
    $lista = pesquisarTodosFuncionarios();
    
    
?>
    
<html>
<meta charset="UTF-8">
<head>
</head>
<body>
   
    <div style="text-align: center">
    <h1>Lista de Funcionários</h1>
    <p><a href="incluir.html">Cadastrar Funcionário</a></p>
        <table border=1 style="margin: 0px auto">
            <thead>
                <tr>
                    <th>Nome</td>
                    <th>Imagem</td>
                </tr> 
            </thead>
            <tbody>
                <?php
                
                foreach($lista as $funcionario){ ?>
                <tr>
                    <td><?php echo $funcionario['nome'];?></td>
                    <td><img style="width: 60px; height: 60px;" src="<?php echo baseUrl($funcionario['foto_endereco']);?>"></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>
</body>
</html>