<form action="<?= base_url('edituser' . $user['id']) ?>" method="post">
    <?= csrf_field() ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Editar Usuário
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" placeholder="Insira seu nome" name="name" value="<?= esc($user['name']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Insira seu email" name="email" value="<?= esc($user['email']); ?>" required>
                </div>
                <input type="submit" value="Atualizar" class="btn btn-primary">
            </div>
        </div>
    </div>
</form>
