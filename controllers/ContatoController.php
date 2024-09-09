<?php
require_once '../models/Contato.php';

class ContatoController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function list()
    {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: /index.php?action=login");
            exit();
        }

        $contato = new Contato($this->db);
        $contatos = $contato->getAllByUser($_SESSION['user_id']);
        include '../views/contatos/list.php';
    }

    public function create()
    {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: /index.php?action=login");
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $endereco = $_POST['endereco'];
            $observacao = $_POST['observacao'];

            $contato = new Contato($this->db);
            $contato->usuario_id = $_SESSION['user_id'];
            $contato->nome = $nome;
            $contato->email = $email;
            $contato->telefone = $telefone;
            $contato->endereco = $endereco;
            $contato->observacao = $observacao;
            $contato->create();

            header("Location: /index.php?action=dashboard");
            exit();
        }

        include '../views/contatos/create.php';
    }

    public function edit($id)
    {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header("Location: /index.php?action=login");
            exit();
        }

        $contato = new Contato($this->db);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $endereco = $_POST['endereco'];
            $observacao = $_POST['observacao'];

            $contato->id = $id;
            $contato->usuario_id = $_SESSION['user_id'];
            $contato->nome = $nome;
            $contato->email = $email;
            $contato->telefone = $telefone;
            $contato->endereco = $endereco;
            $contato->observacao = $observacao;
            $contato->update();

            header("Location: /index.php?action=dashboard");
            exit();
        } else {
            $contato->id = $id;
            $contatoData = $contato->getById($_SESSION['user_id']);
            include '../views/contatos/edit.php';
        }
    }

    public function delete($id)
    {
        session_start();

        error_log("Iniciando exclusão do contato com ID: " . $id);

        if (!isset($_SESSION['user_id'])) {
            error_log("Usuário não autenticado.");
            header("Location: /index.php?action=login");
            exit();
        }

        $contato = new Contato($this->db);
        $contato->id = $id;
        $contato->usuario_id = $_SESSION['user_id'];

        if ($contato->delete()) {
            error_log("Contato excluído com sucesso.");
            header("Location: /index.php?action=dashboard");
        } else {
            error_log("Erro ao excluir o contato.");
        }
        exit();
    }
}
