<?php 
    include('conexao.php');
    $mensagem = '';

    if(isset($_POST['acao'])){

        if(empty($_POST['email'])){
            $mensagem = 'Preencha seu e-mail';

        }else if(empty($_POST['senha'])){
            $mensagem = 'Preencha sua senha';

        }else{
            //limpando o campo, por segurança.
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            //consultando sql no banco.
            $sql_code = "SELECT * FROM usuarios WHERE usuario = '$email' and senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " .$mysqli->error);

            //Se der certo a quantidade = 1
            $quantidade = $sql_query->num_rows;
            if($quantidade == 1){
                //sanvaldo o dados do usurio do banco na variavel
                $usuario = $sql_query->fetch_assoc();

                //criando uma sessão.
                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION ['id'] = $usuario['id_usuario'];
                $_SESSION ['nome'] = $usuario['nome'];

                //redirecionando o usuario para a pagina principal.
                header('Location: paginas/ordem-servico.php');
                exit;

            }else{
                $mensagem = 'Falha ao logar! E-mail ou senha incorreta.';
            }
        }
    }
?>
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

        <?php if(!empty($mensagem)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $mensagem; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="">
            <h1>Loguin</h1>

            <div class="input-box">
                <input type="text" placeholder="Usuário" name="email">
                <i class="bi bi-person"></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Senha" name="senha">
                <i class="bi bi-lock"></i>
            </div>

            <button type="submit" class="bnt-login" name="acao">Loguin</button>

        </form>
    </main>
</body>
</html>