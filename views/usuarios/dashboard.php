<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | CONTIGRO</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="/logo_tigrinho.png" type="image/png">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: "Poppins", sans-serif;
        }

        .fixed-logo {
            position: fixed;
            left: 0;
            top: 0;
            height: 100px;
            display: flex;
            align-items: center;
            padding: 10px;
            z-index: 1000;
        }

        .fixed-logo img {
            height: 100px;
            margin-right: 10px;
        }

        .fixed-logo span {
            color: #fff;
            font-size: 1.5rem;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="fixed-logo">
        <img src="/logo_tigrinho.png" alt="Logo da CONTIGRO">
        <span style="color: #000000;">CONTIGRO</span>
    </div>

    <div class="container mt-5">
        <h1 class="mb-4">Bem-vindo, <?php echo htmlspecialchars($_SESSION['nome']); ?>!</h1>

        <div class="d-flex justify-content-between mb-4">
            <div class="d-flex">
                <a href="/index.php?action=edit_profile&id=<?php echo $_SESSION['user_id']; ?>" class="btn btn-warning mr-2">Meu perfil</a>
                <a href="/logout.php" class="btn btn-danger">Logout</a>
            </div>
            <a href="/index.php?action=create_contato" class="btn btn-primary">Criar Novo Contato</a>
        </div>


        <h2 class="mb-4">Meus Contatos</h2>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Obs.</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($contatos) && count($contatos) > 0): ?>
                    <?php foreach ($contatos as $contato): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($contato['nome']); ?></td>
                            <td><?php echo htmlspecialchars($contato['email']); ?></td>
                            <td><?php echo htmlspecialchars($contato['telefone']); ?></td>
                            <td><?php echo htmlspecialchars($contato['endereco']); ?></td>
                            <td><?php echo htmlspecialchars($contato['observacao']); ?></td>
                            <td>
                                <a href="/index.php?action=edit_contato&id=<?php echo $contato['id']; ?>" class="btn btn-warning btn-sm">
                                    <img src="/pencil-square.svg" alt="Editar" style="width: 16px; height: 16px; vertical-align: middle;">
                                </a>
                                <a href="/index.php?action=delete_contato&id=<?php echo $contato['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este contato?')">
                                    <img src="/trash.svg" alt="Excluir" style="width: 16px; height: 16px; vertical-align: middle;">
                                </a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">Nenhum contato encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>