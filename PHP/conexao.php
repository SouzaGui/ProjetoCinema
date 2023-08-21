<?php

class Conexao
{
    private $db;
    private $dbHost = "localhost";
    private $dbName = "cinema";
    private $dbUser = "root";
    private $dbPass = "";

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=$this->dbHost;dbname=$this->dbName", $this->dbUser, $this->dbPass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("Erro ao conectar ao banco de dados: " . $e->getMessage());
        }
    }

    public function prepare($sql)
    {
        try {
            return $this->db->prepare($sql);
        } catch (PDOException $e) {
            die("Erro ao preparar a consulta: " . $e->getMessage());
        }
    }

    public function EncontrarRegistro($id) {
        $sql = "SELECT * FROM cadastro_user 
        WHERE cadastro_user.id_user = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function executarQuery($sql, $params = [])
    {
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch(PDOException $e) {
            die("Erro ao executar a consulta: " . $e->getMessage());
        }
    }

    public function ChecarRegistro(){
        $sql = "SELECT * FROM cadastro_user 
        WHERE nome_user = :nome AND senha_user = :senha";
        $stmt = $this->db->prepare($sql);
        
    }

    public function CadastrarRegistro($dados)
    {
        $sql = "INSERT INTO cadastro_user (nome_user, senha_user, email_user, celular_user, profile_user)
        VALUES (:nome, :senha, :email, :celular, :perfil)";
        
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute($dados);
            return $this->db->lastInsertId();
        } catch(PDOException $e) {
            die("Erro ao cadastrar registro: " . $e->getMessage());
        }
    }

    public function CadastrarFilme($dados)
    {
        $sql = "INSERT INTO cadastro_filme(nome_filme, genero_filme, elenco_filme, faixa_etaria_filme, data_lancamento_filme)
        VALUES (:titulo, :genero, :elenco, :faixaEtaria, :dataLancamento)";
        
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute($dados);
            return $this->db->lastInsertId();
        } catch(PDOException $e) {
            die("Erro ao cadastrar registro: " . $e->getMessage());
        }
    }

    public function CadastrarProduto($dados)
    {
        $sql = "INSERT INTO cadastro_produto(nome_produto, marca_produto, quantidade_produto, validade_produto , preco_produto)
        VALUES (:nomeProduto, :marca, :quantidade, :validade, :preco)";
        
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute($dados);
            return $this->db->lastInsertId();
        } catch(PDOException $e) {
            die("Erro ao cadastrar registro: " . $e->getMessage());
        }
    }

    public function CadastrarFuncionario($dados)
    {
        $sql = "INSERT INTO cadastro_funcionario(nome_funcionario, senha_funcionario, email_funcionario, cpf_funcionario , cargo_funcionario)
        VALUES (:nome, :senha, :email, :cpf, :cargo)";
        
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute($dados);
            return $this->db->lastInsertId();
        } catch(PDOException $e) {
            die("Erro ao cadastrar registro: " . $e->getMessage());
        }
    }

    public function ListarRegistros(){
        
        $sql = "SELECT * FROM cadastro_user";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function EditarRegistro($id, $dados){
        $sql = "UPDATE cadastro_user
        SET nome_user = :nome, senha_user = :senha, email_user = :email, celular_user = :celular
        WHERE cadastro_user.id_user = :id";
        $stmt = $this->db->prepare($sql);
        $dados['id'] = $id;
        return $stmt->execute($dados);
    }

    public function DeletarRegistro($id){
        $sql = "DELETE FROM cadastro_user
        WHERE cadastro_user.id_user = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }

    public function DeletarFilme($id){
        $sql = "DELETE FROM cadastro_filme
        WHERE cadastro_filme.id_filme = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }
    public function DeletarFuncionario($id){
        $sql = "DELETE FROM cadastro_funcionario
        WHERE cadastro_funcionario.id_funcionario = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }

    public function DeletarUsuario($id){
        $sql = "DELETE FROM cadastro_user
        WHERE cadastro_user.id_user = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }

    public function DeletarProduto($id){
        $sql = "DELETE FROM cadastro_produto
        WHERE cadastro_produto.id_produto = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }
}

?>