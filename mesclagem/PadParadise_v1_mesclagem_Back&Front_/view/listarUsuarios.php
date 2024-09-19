<?php
    include '../control/listarUsuarioControl.php';

   // var_dump($todos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de todos os usuários</h1>
    <table border="1px">
        <tr>
            <th>Id do Usuário</th>
            <th>Nome</th>
            <th>Idade</th>
            <th colspan="2">Operações</th>
        </tr>
        <!--vamos colocar as linhas dentro do foreach-->
        <?php foreach($todos as $t) {?>
            <tr>
                <td> <?php echo  $t['id_usuario'];?> </td>
                <td> <?php echo  $t['nome'];?> </td>
                <td> <?php echo  $t['data_nascimento'];   ?> </td>
                <td>
                   <a href="../control/excluirUsuarioControl.php?id_usuario=<?php echo  $t['id_usuario'];?>">  
                        <button style="background-color: red;">Excluir</button>    
                    </a>
                </td>
                <td>
                    <button style="background-color: blue;">Alterar</button>
                </td>
            </tr>
        <?php } ?>

    </table>
    
</body>
</html>