<?php

    class Usuario {
        private $nome;
        private $senha;
        private $email;
        private $celular;
        private $perfil = "cliente";

        public function __construct($nome, $senha, $email, $celular) {
            $this->nome = $nome;
            $this->senha = $senha;
            $this->email = $email;
            $this->celular = $celular;
        }
    }