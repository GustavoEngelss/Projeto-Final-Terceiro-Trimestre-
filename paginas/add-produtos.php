<?php 
    require_once "../assets/menu.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/estilo.css">

    <title>G.A Pneus</title>
</head>
<body>
    <section class="conteudo">

        <header class="cabecalho">

            <h1>Gerenciamento de Produtos</h1>
            <form action="../modelo/ad-produto.php" class="acao">
                <button class="bnt-os">Adicionar Produto</button>
            </form>
        </header>

        <main class="d-flex justify-content-center">
        <div class="w-100 mt-4" style="max-width: 1100px;">

            <div class="card shadow">

                <!-- TABELA -->
                <div class="p-3">
                    <table class="table table-hover text-center">

                        <thead class="thead-light">
                            <tr>
                                <th>Código</th>
                                <th>Produto</th>
                                <th>Tipo</th>
                                <th>Unidade</th>
                                <th>V.M</th>
                                <th>Ações</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1254</td>
                                <td>175/65R14 Kelly Edge Touring Goodyear</td>
                                <td><span class="badge badge-primary">Pneu</span></td>
                                <td>254</td>
                                <td>R$299,00</td>
                                <td>
                                    <button class="btn btn-sm btn-primary"><i class="bi bi-pencil-fill"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></button>
                                </td>
                            </tr>

                            <tr>
                                <td>3854</td>
                                <td>185/70R14 Eff.Grip Goodyear</td>
                                <td><span class="badge badge-primary">Pneu</span></td>
                                <td>146</td>
                                <td>R$455,00</td>
                                <td>
                                    <button class="btn btn-sm btn-primary"><i class="bi bi-pencil-fill"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></button>
                                </td>
                            </tr>

                            <tr>
                                <td>8595</td>
                                <td>SP-2214 Pastilha JURID</td>
                                <td><span class="badge badge-success">Peça</span></td>
                                <td>5</td>
                                <td>R$90,00</td>
                                <td>
                                    <button class="btn btn-sm btn-primary"><i class="bi bi-pencil-fill"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></button>
                                </td>
                            </tr>

                            <tr>
                                <td>9154</td>
                                <td>Balanceamento</td>
                                <td><span class="badge badge-warning">Serviço</span></td>
                                <td>-</td>
                                <td>R$12,50</td>
                                <td>
                                    <button class="btn btn-sm btn-primary"><i class="bi bi-pencil-fill"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></button>
                                </td>
                            </tr>

                            <tr>
                                <td>9152</td>
                                <td>Alinhamento 3D</td>
                                <td><span class="badge badge-warning">Serviço</span></td>
                                <td>-</td>
                                <td>R$70,00</td>
                                <td>
                                    <button class="btn btn-sm btn-primary"><i class="bi bi-pencil-fill"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></button>
                                </td>
                            </tr>

                        </tbody>

                    </table>
                </div>

            </div>

        </div>
    </main>

    </section>
    <script src="../assets/js/script.js"></script>
</body>
</html>