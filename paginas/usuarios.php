<?php 
    require_once "../assets/menu.php";
    require_once "../protec.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="../assets/css/usuario.css">


    <title>G.A Pneus</title>
</head>
<body>
    <section class="conteudo">

        <header class="cabecalho-usuario">

            <h1>Funcionário</h1>
            <form action="../modelo/ad-produto.php" class="acao">
                <button class="bnt-usuario">Adicionar Loguin</button>
                <input type="text" class="input-busca" placeholder="Pesquisar Funcionário">
            </form>
        </header>

        <div class="container mt-5">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Função</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>João Silva</td>
                    <td>
                    <span class="badge badge-warning badge-role">Gerente</span>
                    <span class="badge badge-dark badge-role">Admin</span>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-primary"><i class="bi bi-pencil-fill"></i></button>
                        <button class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></button>
                    </td>
                </tr>

                <tr>
                    <td>Maria Souza</td>
                    <td>
                    <span class="badge badge-success badge-role">Vendedora</span>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-primary"><i class="bi bi-pencil-fill"></i></button>
                        <button class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></button>
                    </td>
                </tr>

                <tr>
                    <td>Carlos Miguel</td>
                    <td>
                    <span class="badge badge-success badge-role">Vendedor</span>
                    <span class="badge badge-dark badge-role">Admin</span>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-primary"><i class="bi bi-pencil-fill"></i></button>
                        <button class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></button>
                    </td>
                </tr>
                
                <tr>
                    <td>Nicole do Santos</td>
                    <td>
                    <span class="badge badge-success badge-role">Caixa</span>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-primary"><i class="bi bi-pencil-fill"></i></button>
                        <button class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
    <script src="../assets/js/script.js"></script>
</body>
</html>