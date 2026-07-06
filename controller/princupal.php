<?php 
    require_once "../assets/menu.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $acao = $_POST['acao'] ?? '';
        
        switch($acao)
        {
            case 'opem':
                echo '<!DOCTYPE html>
                <html lang="pt-br">
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

                            <h1>Ordem de Serviço</h1>
                            <form class="acao" method="POST"  action="../modelo/abrir-os.php">
                                <button class="bnt-os" name="acao" value="abr-os">Abrir O.S</button>
                                <input type="text" class="input-busca" placeholder="Pesquisar O.S...">
                            </form>

                        </header>

                         <div class="p-3">
                                    <table class="table table-hover text-center">

                                        <thead class="thead-light">
                                            <tr>
                                                <th>Nº O.S</th>
                                                <th>Cliente</th>
                                                <th>Carro</th>
                                                <th>Placa</th>
                                                <th>Vendedor</th>
                                                <th>Valor</th>
                                                <th>Status</th>
                                                <th>Data</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>1254</td>
                                                <td>João Miguel</td>
                                                <td>VW/Gol</td>
                                                <td>ISI-9873</td>
                                                <td>Gustavo</td>
                                                <td>R$1750,00</td>
                                                <td>Aberta</td>
                                                <td>25/04/2026</td>
                                            </tr>


                                        </tbody>

                                    </table>
                                </div>
                    </section>

                    <script src="../assets/js/script.js"></script>
                </body>
                </html>';
            break;
            case 'add-cliente':
                echo'<!DOCTYPE html>
                <html lang="pt-br">
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

                            <h1>Adicionar Cliente</h1>
                            <div class="acao">
                                <button class="bnt-os">Abrir Cadastro</button>
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
                                        <label>Código Cliente</label>
                                        <input type="text" name="cod-cliente" id="cod-cliente">
                                    </div>

                                    <div class="campo">
                                        <label>Nome Completo:</label>
                                        <input type="text" name="nome-cliente" id="nome-cliente">
                                    </div>

                                    <div class="campo">
                                        <label>Tipo:</label>
                                        <select>
                                            <option>Selecione</option>
                                            <option>Física</option>
                                            <option>Júridica</option>
                                        </select>
                                    </div>

                                    <div class="campo">
                                        <label>CPF / CNPJ</label>
                                        <input type="text" name="doc-cliente" id="doc-cliente">
                                    </div>

                                    <div class="campo">
                                        <label>Data De Nascimento</label>
                                        <input type="text" name="data-cliente" id="data-cliente">
                                    </div>

                                    <div class="campo">
                                        <label>Gênero</label>
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

                                <section class="corpo-section">

                                    <div class="campo">
                                        <label>WhatsApp</label>
                                        <input type="text" name="whats-cliente" id="whats-cliente">
                                    </div>

                                    <div class="campo">
                                        <label>Telefone (Fixo)</label>
                                        <input type="text" name="tel-cliente" id="tel-cliente">
                                    </div>

                                    <div class="campo">
                                        <label>E-mail</label>
                                        <input type="text" name="email-cliente" id="email-cliente">
                                    </div>

                                </section>

                            </section>
                            <section class="endereso">

                                <section class="name-section">
                                    <i class="bi bi-file-earmark"></i>
                                    <p>ENDEREÇO DO CLIENTE</p>
                                </section>

                                <section class="corpo-section">
                                    <div class="campo">
                                        <label>CEP:</label>
                                        <input type="text" name="cep-cliente" id="cep-cliente">
                                    </div>
                                    <div class="campo">
                                        <label>Rua:</label>
                                        <input type="text" name="rua-cliente" id="rua-cliente">
                                    </div>
                                    <div class="campo">
                                        <label>Número</label>
                                        <input type="text" name="num-cliente" id="num-cliente">
                                    </div>
                                    <div class="campo">
                                        <label>Bairro</label>
                                        <input type="text" name="bairro-cliente" id="bairro-cliente">
                                    </div>
                                    <div class="campo">
                                        <label>Cidade</label>
                                        <input type="text" name="cidade-cliente" id="cidade-cliente">
                                    </div>
                                    <div class="campo">
                                        <label>Estado</label>
                                        <input type="text" name="estado-cliente" id="estado-cliente">
                                    </div>
                                </section>

                            </section>
                        </form>
                    </section>
                    
                    <script src="../assets/js/script.js"></script>
                </body>
                </html>';
            break;
            case 'add-produtos':
                echo '<!DOCTYPE html>
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
                </html>';
            break;
            case 'usuarios':
                echo '<!DOCTYPE html>
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

                            <h1>Funcionário</h1>
                            <form action="../modelo/ad-produto.php" class="acao">
                                <button class="bnt-os">Adicionar Loguin</button>
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
                </html>';
            break;
            case 'relatorio':
                echo '<!DOCTYPE html>
                <html lang="pt-br">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
                    <link rel="stylesheet" href="../assets/css/estilo.css">

                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

                    <title>G.A Pneus</title>
                </head>
                <body>
                    <section class="conteudo">

                        <header class="cabecalho">
                            <h1>Relatório</h1>
                        </header>

                        <div class="box-info">
                            <div style="background:linear-gradient(45deg, #FF5370, #ff869a)" class="box-info-single">
                                <div class="info-text">
                                    <h3>Lucro Bruto</h3>
                                    <h5>$40.000</h5>
                                </div>
                                <i class="bi bi-cash"></i>
                            </div>

                            <div style="background:linear-gradient(45deg, #2ed8b6, #59e0c5)" class="box-info-single">
                                <div class="info-text">
                                    <h3>Lucro Líquido</h3>
                                    <h5>$25.000</h5>
                                </div>
                                <i class="bi bi-cash"></i>
                            </div>

                            <div style="background:linear-gradient(45deg, #4099ff, #73b4ff)" class="box-info-single">
                                <div class="info-text">
                                    <h3>Total de Pneus Vendidos </h3>
                                    <h5>325</h5>
                                </div>
                                <i class="bi bi-car-front"></i>
                            </div>
                        </div>

                        <div class="graficos">

                            <div class="grafico-quadrado">
                                <canvas id="meuGrafico"></canvas>
                            </div>

                            <div class="card-graficoR">
                                <div class="topo">
                                    <h4>Meta da Loja</h4>
                                    <i class="bi bi-bar-chart-line-fill"></i>
                                    <div class="porcentagem">
                                        <span>78%</span>
                                    </div>
                                </div>
                                <div class="desempenho">
                                    <h2>Desempenho Mensal</h2>
                                    <p>
                                        Sua loja já atingiu 78% da meta mensal
                                        de faturamento em serviços e vendas.
                                    </p>
                                    <a href="#" class="bnt-desempenho">
                                        <i class="bi bi-graph-up"></i>
                                        Ver Gráfico Pessoal
                                    </a>
                                </div>

                            </div>
                        </div>
                         
                    </section>
                        
                    <script>
                        const ctx = document.getElementById("meuGrafico");
                        new Chart(ctx, {
                            type: "bar",
                            data: {
                                labels: [
                                    "1","2","3","4","5","6","7","8","9","10",
                                    "11","12","13","14","15","16","17","18","19","20",
                                    "21","22","23","24","25","26","27","28","29","30"
                                ],

                                datasets: [
                                    {
                                        label: "Lucro Limpo",
                                        data: [
                                            1000,1500,1200,1800,2000,1700,1400,2300,2100,2600,
                                            1900,2400,1600,2800,2200,2500,1800,2900,3100,2300,
                                            1700,3300,2700,2100,4000,3200,1900,2600,3700,3500
                                        ],
                                        backgroundColor: "blue",
                                        borderRadius: 5
                                    },

                                    {
                                        label: "Lucro Bruto",
                                        data: [
                                            2000,2500,2200,2800,3000,2600,2400,3200,3100,3600,
                                            2900,3400,2300,3900,3300,3500,2700,4100,4300,3200,
                                            2600,4500,3700,3000,5000,4200,2800,3600,4800,4600
                                        ],
                                        backgroundColor: "red",
                                        borderRadius: 5
                                    }
                                ]
                            },

                            options: {
                                responsive: true,

                                scales: {
                                    y: {
                                        beginAtZero: true,

                                        ticks: {
                                            callback: function(value) {
                                                return value.toLocaleString("pt-BR");
                                            }
                                        }
                                    }
                                }
                            }
                        });
                    </script>
                    <script src="../assets/js/script.js"></script>
                </body>
                </html>';
            break;
            case 'valores':
                echo '<!DOCTYPE html>
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
                </html>';
        }
    }
?>