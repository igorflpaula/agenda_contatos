<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contato | CONTIGRO</title>
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
        <?php if (!isset($contatoData)): ?>
            <div class="alert alert-warning">
                Contato não encontrado!
            </div>
        <?php else: ?>
            <h1 class="mb-4">Editar Contato</h1>

            <form action="/index.php?action=edit_contato&id=<?php echo htmlspecialchars($contatoData['id']); ?>" method="post">
                <div class="form-group">
                    <label for="nome">Nome*:</label>
                    <input type="text" id="nome" name="nome" class="form-control" value="<?php echo htmlspecialchars($contatoData['nome']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email*:</label>
                    <input type="email" id="email" name="email" class="form-control" value="<?php echo htmlspecialchars($contatoData['email']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone*:</label>
                    <input type="text" id="telefone" name="telefone" class="form-control" value="<?php echo htmlspecialchars($contatoData['telefone']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" class="form-control" value="<?php echo htmlspecialchars($contatoData['endereco']); ?>">
                </div>
                <div class="form-group">
                    <label for="observacao">Observações:</label>
                    <input type="text" id="observacao" name="observacao" class="form-control" value="<?php echo htmlspecialchars($contatoData['observacao']); ?>">
                </div>
                <button type="submit" class="btn btn-warning">Atualizar Contato</button>
            </form>

            <a href="/index.php?action=dashboard" class="btn btn-secondary mt-3">Voltar para Dashboard</a>
        <?php endif; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>