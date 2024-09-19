<?php

include 'Conexao.php';
include_once '../model/DTO/UsuarioDTO.php';

class UsuarioDAO
{

    public $pdo = null;

    public function __construct()
    {
        $this->pdo = Conexao::getInstance();
    }

    public function salvarUsuario(UsuarioDTO $usuarioDTO)
    {
        try {
            $sql = "INSERT INTO usuario (nome, cpf) VALUES (?, ?)";
            $stmt = $this->pdo->prepare($sql);

            $nome = $usuarioDTO->getNome();
            $cpf = $usuarioDTO->getCpf();

            $stmt->bindValue(1, $nome);
            $stmt->bindValue(2, $cpf);

            $retorno = $stmt->execute();

            return $retorno;

        } catch (PDOExeption $exe) {
            echo $exe->getMessege();
        }
    }
    //função listar Usuários
    public function listarUsuarios()
    {
        try {
            $sql = "SELECT * FROM usuario";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            $retorno = $stmt->fetchALL(PDO::FETCH_ASSOC);
            return $retorno;

        } catch (PDOExeption) {
            echo $exe->getMessage();
        }
    }

}

?>