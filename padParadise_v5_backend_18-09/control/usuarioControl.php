<?php

    include_once '../model/DTO/UsuarioDTO.php';
    include_once '../model/DAO/UsuarioDAO.php';

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

   // var_dump($nome, $idade);

   $usuarioDTO = new UsuarioDTO();

   $usuarioDTO->setNome($nome);
   $usuarioDTO->setIdade($idade);

   // var_dump($usuarioDTO);

    $usuarioDAO = new UsuarioDAO();

    $sucesso = $usuarioDAO->salvarUsuario($usuarioDTO);

    echo "".$sucesso;

?>