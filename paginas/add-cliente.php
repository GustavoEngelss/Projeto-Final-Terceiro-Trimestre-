<?php 
    require_once "../assets/menu.php";
    require_once "../protec.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/cliente.css">
    <link rel="stylesheet" href="../assets/css/menu.css">

    <title>G.A Pneus</title>
</head>
<body>
    <section class="conteudo">

        <header class="cabecalho-clientes">
            <h1>Adicionar Cliente</h1>
            <div class="acao">
                <button class="bnt-cadastro">Abrir Cadastro</button>
                <button class="bnt-cancelar">Cancelar</button>
            </div>
        </header>

        <form action="#" class="form-add-cliente">

            <section class="add-dados-cliente">

                <section class="name-section">
                    <i class="bi bi-file-earmark"></i>
                    <p>DADOS DO CLIENTE</p>
                </section>
                <hr>
                <section class="corpo-section">

                    <div class="campo">
                        <label>Código Cliente</label><br>
                        <input type="text" name="cod-cliente" id="cod-cliente">
                    </div>

                    <div class="campo">
                        <label>Nome Completo</label><br>
                        <input type="text" name="nome-cliente" id="nome-cliente">
                    </div>

                    <div class="campo">
                        <label>Tipo</label><br>
                        <select>
                            <option>Selecione</option>
                            <option>Física</option>
                            <option>Júridica</option>
                        </select>
                    </div>

                    <div class="campo">
                        <label>CPF / CNPJ</label><br>
                        <input type="text" name="doc-cliente" id="doc-cliente">
                    </div>

                    <div class="campo">
                        <label>Data De Nascimento</label><br>
                        <input type="text" name="data-cliente" id="data-cliente">
                    </div>

                    <div class="campo">
                        <label>Gênero</label><br>
                        <select>
                            <option>Selecione</option>
                            <option>Masculino</option>
                            <option>Feminino</option>
                            <option>Outros</option>
                        </select>
                    </div>

                </section>

            </section>
            <section class="add-contato-cliente">

                <section class="name-section">
                    <i class="bi bi-file-earmark"></i>
                    <p>CONTATOS DO CLIENTE</p>
                </section>
                <hr>
                <section class="corpo-section">

                    <div class="campo">
                        <label>WhatsApp</label><br>
                        <input type="text" name="whats-cliente" id="whats-cliente">
                    </div>

                    <div class="campo">
                        <label>Telefone (Fixo)</label><br>
                        <input type="text" name="tel-cliente" id="tel-cliente">
                    </div>

                    <div class="campo">
                        <label>E-mail</label><br>
                        <input type="text" name="email-cliente" id="email-cliente">
                    </div>

                </section>

            </section>
            <section class="endereso">

                <section class="name-section">
                    <i class="bi bi-file-earmark"></i>
                    <p>ENDEREÇO DO CLIENTE</p>
                </section>
                <hr>
                <section class="corpo-section">
                    <div class="campo">
                        <label>CEP:</label><br>
                        <input type="text" name="cep-cliente" id="cep-cliente">
                    </div>
                    <div class="campo">
                        <label>Rua:</label><br>
                        <input type="text" name="rua-cliente" id="rua-cliente">
                    </div>
                    <div class="campo">
                        <label>Número</label><br>
                        <input type="text" name="num-cliente" id="num-cliente">
                    </div>
                    <div class="campo">
                        <label>Bairro</label><br>
                        <input type="text" name="bairro-cliente" id="bairro-cliente">
                    </div>
                    <div class="campo">
                        <label>Cidade</label><br>
                        <input type="text" name="cidade-cliente" id="cidade-cliente">
                    </div>
                    <div class="campo">
                        <label>Estado</label><br>
                        <input type="text" name="estado-cliente" id="estado-cliente">
                    </div>
                </section>

            </section>
        </form>
    </section>

    <script src="../assets/js/script.js"></script>
</body>
</html>