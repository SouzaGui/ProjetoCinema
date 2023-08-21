<?php

// class Admin {
//     private $nome;
//     private $senha;
//     private $email;
//     private $celular;
//     private $perfil = "admin;"

//     public function __construct($nome, $senha, $email, $celular) {
//         $this->nome = $nome;
//         $this->senha = $senha;
//         $this->email = $email;
//         $this->celular = $celular;
//     }

//     private function ChecarRegistro(){
//         $sql = "SELECT * FROM cadastro_user 
//         WHERE nome_user = :nome AND senha_user = :senha";
//         $stmt = $this->db->prepare($sql);
        
//     }

//     private function ListarRegistros(){
        
//         $sql = "SELECT * FROM cadastro_user";
//         $stmt = $this->db->query($sql);
//         return $stmt->fetchAll(PDO::FETCH_ASSOC);

//     }

//     private function EditarRegistro($id, $dados){
//         $sql = "UPDATE cadastro_user
//         SET nome_user = :nome, senha_user = :senha, email_user = :email, celular_user = :celular, profile_user = :perfil
//         WHERE cadastro_user.id_user = :id";
//         $stmt = $this->db->prepare($sql);
//         $dados['id'] = $id;
//         return $stmt->execute($dados);
//     }

//     private function DeletarRegistro($id){
//         $sql = "DELETE FROM cadastro_user
//         WHERE cadastro_user.id_user = :id";
//         $stmt = $this->db->prepare($sql);
//         $stmt->bindValue(':id', $id);
//         return $stmt->execute();
//     }

// }