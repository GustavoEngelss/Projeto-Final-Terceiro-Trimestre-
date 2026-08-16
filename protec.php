<?php

    //verifica se tem ou não uma sessão iniciada.
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    //verifica se tem um 'id' na sessão, se não tiver vai direcionar para pagina loguin.
    if (!isset($_SESSION['id'])) {
        header('Location: ../index.php');
        exit;
    }
?>
