<?php
require_once '../controllers/UsuarioController.php';
require_once '../controllers/ContatoController.php';
require_once '../config/database.php';

$database = new Database();
$db = $database->getConnection();

$usuarioController = new UsuarioController($db);
$contatoController = new ContatoController($db);

$action = isset($_GET['action']) ? $_GET['action'] : 'login';

switch ($action) {
    case 'login':
        $usuarioController->login();
        break;
    case 'register':
        $usuarioController->register();
        break;
    case 'dashboard':
        $usuarioController->dashboard();
        break;
    case 'create_contato':
        $contatoController->create();
        break;
    case 'edit_profile':
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if ($id) {
            $usuarioController->edit($id);
        } else {
            header("Location: /index.php?action=dashboard");
            exit();
        }
        break;

    case 'edit_contato':
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if ($id) {
            $contatoController->edit($id);
        } else {
            header("Location: /index.php?action=dashboard");
            exit();
        }
        break;
    case 'delete_contato':
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if ($id) {
            $contatoController->delete($id);
        } else {
            header("Location: /index.php?action=dashboard");
            exit();
        }
        break;
    default:
        $usuarioController->login();
        break;
}
