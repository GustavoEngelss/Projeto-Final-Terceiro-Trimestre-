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
    <link rel="stylesheet" href="../assets/css/orcamento.css">


    <title>G.A Pneus</title>
</head>
<body>
    <section class="conteudo">

        <header class="cabecalho-orcamento">
            <h1>Orçamento</h1>
        </header>

        <form action="#" class="form-orcamento">

            <!-- LINHA 1 -->
            <section class="linha">

                <div class="grupo">
                    <label>Medida:</label>

                    <div class="medida">
                        <input type="text">
                        <span>/</span>
                        <input type="text" >
                        <span>R</span>
                        <input type="text" >
                    </div>
                </div>

            </section>

            <!-- LINHA 2 -->
            <section class="linha">

                <!-- TIPO PNEU -->
                <div class="grupo">
                    <label>Tipo Pneu:</label>
                    <select>
                        <option>Pneu Novo</option>
                        <option>Pneu Seminovo</option>
                    </select>
                </div>

                <!-- CATEGORIA -->
                <div class="grupo">
                    <label>Categoria:</label>
                    <select>
                        <option>Selecione</option>
                        <option>Pneus</option>
                        <option>Peças</option>
                        <option>Serviços</option>
                    </select>
                </div>

                <!-- VENDEDOR (AUTO) -->
                <div class="grupo">
                    <label>Vendedor:</label>
                    <input type="text" value="João Silva" readonly>
                </div>

                <!-- BOTÃO -->
                <div class="grupo-botao">
                    <button type="submit">Buscar</button>
                </div>

            </section>

        </form>

    </section>
    <script src="../assets/js/script.js"></script>
</body>
</html>