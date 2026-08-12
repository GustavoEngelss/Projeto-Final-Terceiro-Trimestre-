
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="assets/css/loguin.css">
    
    <title>G.A Pneus</title>
</head>
<body class="corpo-loguin">
    <div class="titulo">
        <img src="assets/img/img-icon-loguin.png" alt="img-loguin" class="img-icon-loguin">
        <h1 class="">G.A Pneus</h1>
    </div>
    <main class="box">
        <form method="POST" action="controller/princupal.php">
            <h1>Loguin</h1>

            <div class="input-box">
                <input type="email" placeholder="Usuário">
                <i class="bi bi-person"></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Senha">
                <i class="bi bi-lock"></i>
            </div>
            
            <a href="paginas/ordem-servico.php" type="submit" class="bnt-login" name="acao">Loguin</a>
        </form>
    </main>
</body>
</html>