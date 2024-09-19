<?php
include_once '../model/DTO/UsuarioDTO.php';
include_once '../model/DAO/UsuarioDAO.php';

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$cpf = $_POST['cpf'];
$cnpj = $_POST['cnpj'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//var_dump($nome, $cpf, $cnpj, $endereco, $telefone, $email, $senha);

$usuarioDTO = new UsuarioDTO();

$usuarioDTO->setNome($nome);
$usuarioDTO->setDataNascimento($data_nascimento);
$usuarioDTO->setCpf($cpf);
$usuarioDTO->setCnpj($cnpj);
$usuarioDTO->setEndereco($endereco);
$usuarioDTO->setTelefone($telefone);
$usuarioDTO->setSenha($senha);


 //var_dump($usuarioDTO);
$usuarioDAO = new UsuarioDAO();

$sucesso = $usuarioDAO->salvarUsuario($usuarioDTO);
echo "" . $sucesso;

?>