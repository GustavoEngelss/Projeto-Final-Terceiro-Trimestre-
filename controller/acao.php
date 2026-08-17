<?php 
    session_start();
    require_once "../conexao.php";

    //criando usuario 
    if(isset($_POST['create_usuario'])){
        //pega os dados do forulario e joga para o banco 
        $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
        $usuario = mysqli_real_escape_string($mysqli, trim($_POST['email']));
        $senha = isset($_POST['senha']) ?mysqli_real_escape_string($mysqli, trim($_POST['senha'])) : '';

        //validação campo vazio
        if(empty($nome) || empty($usuario) || empty($senha)){
            $_SESSION['mensagem'] = 'Preencha todos os campos!';
            header('Location: ../paginas/usuarios.php');
            exit;
        }

        $sql = "INSERT INTO usuarios (nome, usuario, senha) VALUES ('$nome', '$usuario', '$senha')";

        mysqli_query($mysqli, $sql);

        //validação se deu certo volta automatico para a tela de usuarios e mensagem de sucesso ou de erro 
        if(mysqli_affected_rows($mysqli) > 0){
            $_SESSION['mensagem'] = 'Usuário criado com sucesso';
            header('Location: ../paginas/usuarios.php');
            exit;
        }else{
            $_SESSION['mensagem'] = 'Erro ao criar usuário';
            header('Location: ../paginas/usuarios.php');
            exit;
        }
    }

    //editando usuario 
    if(isset($_POST['update_usuario'])){
        $usuario_id = mysqli_real_escape_string($mysqli, $_POST['usuario_id']);

        //pega os dados do forulario e joga para o banco 
        $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
        $usuario = mysqli_real_escape_string($mysqli, trim($_POST['email']));
        $senha = isset($_POST['senha']) ?mysqli_real_escape_string($mysqli, trim($_POST['senha'])) : '';

        //validação campo vazio
        if(empty($nome) || empty($usuario) || empty($senha)){
            $_SESSION['mensagem'] = 'Preencha todos os campos!';
            header('Location: ../paginas/usuarios.php');
            exit;
        }
        $sql = "UPDATE usuarios SET nome='$nome', usuario='$usuario', senha='$senha' WHERE id_usuario='$usuario_id'";
        mysqli_query($mysqli, $sql);

        //validação se deu certo volta automatico para a tela de usuarios e mensagem de sucesso ou de erro 
        if(mysqli_affected_rows($mysqli) > 0){
            $_SESSION['mensagem'] = 'Usuário atualizado com sucesso';
            header('Location: ../paginas/usuarios.php');
            exit;
        }else{
            $_SESSION['mensagem'] = 'Erro ao atualizar usuário';
            header('Location: ../paginas/usuarios.php');
            exit;
        }

    }

    //deletando o usuario
    if(isset($_POST['delete_usuario'])){
        $usuario_id = mysqli_real_escape_string($mysqli, $_POST['delete_usuario']);
        $sql = "DELETE from usuarios WHERE id_usuario = '$usuario_id'";

        mysqli_query($mysqli, $sql);

        if(mysqli_affected_rows($mysqli) > 0){
            $_SESSION['mensagem'] = 'Usuário deletado com sucesso';
            header('Location: ../paginas/usuarios.php');
            exit;
        }else{
            $_SESSION['mensagem'] = 'Erro ao deletar usuário';
            header('Location: ../paginas/usuario.php');
            exit;
        }
    }
?>