<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">

    <a href="/add" class="btn btn-primary btn-sm" >Adicionar Usuario</a>
        <!-- Card -->
        <div class="card">
            <div class="card-header">
                Lista de Usuários
            </div>
            <div class="card-body">
                <?php if (!empty($users) && is_array($users)): ?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Ações</th> <!-- Coluna para os botões -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $usuario): ?>
                                <tr>
                                    <td><?= esc($usuario['id']) ?></td>
                                    <td><?= esc($usuario['name']) ?></td>
                                    <td><?= esc($usuario['email']) ?></td>
                                    <td>
                                        <!-- Botão para editar -->
                                        <a href="/edit<?= esc($usuario['id']) ?>" class="btn btn-warning btn-sm">Alterar</a>
                                        
                                        <!-- Botão para deletar -->
                                        <a href="delete<?= esc($usuario['id']) ?>" class="btn btn-danger btn-sm" 
                                           onclick="return confirm('Tem certeza que deseja deletar este usuário?');">Deletar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p class="text-center">Nenhum usuário encontrado.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
