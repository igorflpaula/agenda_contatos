<?php

class Contato
{
    private $conn;
    public $id;
    public $usuario_id;
    public $nome;
    public $email;
    public $telefone;
    public $endereco;
    public $observacao;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getAllByUser($user_id)
    {
        $query = "SELECT * FROM contatos WHERE usuario_id = :usuario_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':usuario_id', $user_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($user_id)
    {
        $query = "SELECT * FROM contatos WHERE id = :id AND usuario_id = :usuario_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':usuario_id', $user_id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create()
    {
        $query = "INSERT INTO contatos (usuario_id, nome, email, telefone, endereco, observacao) VALUES (:usuario_id, :nome, :email, :telefone, :endereco, :observacao)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':usuario_id', $this->usuario_id);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':endereco', $this->endereco);
        $stmt->bindParam(':observacao', $this->observacao);
        $stmt->execute();
    }

    public function update()
    {
        $query = "UPDATE contatos SET nome = :nome, email = :email, telefone = :telefone, endereco = :endereco, observacao = :observacao WHERE id = :id AND usuario_id = :usuario_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':usuario_id', $this->usuario_id);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':endereco', $this->endereco);
        $stmt->bindParam(':observacao', $this->observacao);
        $stmt->execute();
    }

    public function delete()
    {
        $query = "DELETE FROM contatos WHERE id = :id AND usuario_id = :usuario_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':usuario_id', $this->usuario_id);

        if ($stmt->execute()) {
            error_log("Contato excluído com sucesso.");
            return true;
        } else {
            error_log("Erro ao executar a consulta: " . implode(":", $stmt->errorInfo()));
            return false;
        }
    }
}
