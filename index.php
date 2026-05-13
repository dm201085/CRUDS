<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body class="bt-light>
    <div class="container vh-100 d-flex justify-content align-items-center">
        <div class="card p-4 shadow" style="width: 25rem;">
            <h3 class="text-center mb-4">Acesso ao Sistema</h3>

            <form action="logar.php" method="POST">
                <div class="mb-3">
                    <label class="form-label"> E-mail</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input type="password" name="senha" class="form-control" required>
                </div>
                <button type="submit" class="form-label">Senha</button>
            </form>

            <?php if(isset($_GET['erro'])): ?>
                <div class="alert alert-danger mt-3">e-mail ou senha inválidos!</div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>