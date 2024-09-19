<?php

    class UsuarioDTO{
        private $nome;
        private $data_nascimento;
        private $cpf;
        private $cnpj;
        private $endereco;
        private $telefone;
        private $email;
        private $senha;
        private $id;

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }

        public function setDataNascimento($data_nascimento){
            $this->data_nascimento = $data_nascimento;
        }
        public function getDataNascimento(){
            return $this->data_nascimento;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }
        public function getCpf(){
            return $this->cpf;
        }

        public function setCnpj($cnpj){
            $this->cnpj = $cnpj;
        }
        public function getCnpj(){
            return $this->cnpj;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }
        public function getEndereco(){
            return $this->endereco;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        public function getTelefone(){
            return $this->telefone;
        }

        public function setEmail($email){
            $this->email = $email;
        }
        public function getEmail(){
            return $this->email;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function getSenha(){
            return $this->senha;
        }

        public function setId($id){
            $this->id = $id;
        }
        public function getId(){
            return $this->id;
        }
    }
?>