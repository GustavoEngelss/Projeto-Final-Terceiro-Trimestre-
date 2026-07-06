<?php 
    require_once "../assets/menu.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/estilo.css">

    <title>G.A Pneus</title>
</head>
<body>
    <section class="conteudo">

        <header class="cabecalho">

            <h1>Abrindo Ordem de Serviço</h1>
            <div class="acao">
                <button class="bnt-os">Abrir O.S</button>
                <button class="bnt-cancelar">Cancelar</button>
            </div>

        </header>
        <form action="#" class="form-os">

            <div class="dados-os">
                <section class="name-section">
                    <i class="bi bi-file-earmark"></i>
                    <p>DADOS DA ORDEM</p>
                </section>
                <hr>
                <section class="corpo-section">

                    <div class="campo">
                        <label for="#">N° O.S:</label>
                        <input type="text" name="num-os" id="num-os">
                    </div>

                    <div class="campo">
                        <label for="#">Abertura:</label>
                        <input type="text" name="data-os" id="data-os">
                    </div>

                    <div class="campo">
                        <label for="#">Status:</label>
                        <select>
                            <option>Aberta</option>
                            <option>Fechada</option>
                            <option>Efetivada</option>
                        </select>
                    </div>
                </section>
            </div>
            <div class="dados-cliente">
                <section class="name-section">
                    <i class="bi bi-file-earmark"></i>
                    <p>DADOS DO CLIENTE E VEICULO</p>
                </section>
                <hr>
                <section class="corpo-section">
                    <div class="campo">
                        <label for="#">Cliente: Código</label>
                        <input type="text" name="cod-cliente" id="cod-cliente" placeholder="Buscar código...">
                    </div>

                    <div class="campo">
                        <label for="#">Nome do Cliente</label>
                        <input type="text" name="name" id="name">
                    </div>

                    <div class="campo">
                        <label for="#">Número (Tel)</label>
                        <input type="text" name="num-cliente" id="num-cliente">
                    </div>

                    <div class="campo">
                        <label for="#">Marca:</label>
                        <input type="text" name="car-marca" id="car-marca">
                    </div>

                    <div class="campo">
                        <label for="#">Modelo:</label>
                        <input type="text" name="car-modelo" id="car-modelo">
                    </div>

                    <div class="campo">
                        <label for="#">Ano:</label>
                        <input type="text" name="car-ano" id="car-ano">
                    </div>

                    <div class="campo">
                        <label for="#">Placa:</label>
                        <input type="text" name="car-placa" id="car-placa">
                    </div>

                    <div class="campo">
                        <label for="#">KM:</label>
                        <input type="text" name="car-km" id="car-km">
                    </div>

                </section>
            </div>
            <div class="dados-pag-obs"> 
                <section class="name-section">
                    <i class="bi bi-credit-card-2-back"></i>
                    <p>DADOS DE PAGAMENTO E OBSERVAÇÕES</p>
                </section>
                <hr>
                <section class="corpo-section">
                    <div class="campo">
                        <label for="#">Tipo de Pagemaneto:</label>
                        <input type="text" name="tipo-pag" id="tipo-pag">
                    </div>

                    <div class="campo">
                        <label for="#">Condição de Pagamento:</label>
                        <input type="text" name="condi-pag" id="condi-pag">
                    </div>

                    <div class="campo-obs">
                        <label>Observação:</label>
                        <textarea name="obs" id="obs"></textarea>
                    </div>

                </section>
            </div>

        </form>
    </section>

    <script src="../assets/js/script.js"></script>
</body>
</html>