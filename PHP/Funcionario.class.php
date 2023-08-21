<?php 

    class Funcionario {
        private $nome;
        private $senha;
        private $email;
        private $cpf;
        private $cargo;

        public function __construct($nome, $senha, $email, $cpf, $cargo) {
            $this->nome = $nome;
            $this->senha = $senha;
            $this->email = $email;
            $this->cpf = $cpf;
            $this->cargo = $cargo;
        }
    }