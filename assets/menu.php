<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="css/estilo.css">
        <title>G.A Pneus</title>
    </head>
    <body class="corpo-menu">
        <!--Sessão de navegação-->
        <nav class="menu-lateral">
            <form method="POST" action="../controller/princupal.php">
                <div class="bnt-expandir">
                    <i class="bi bi-code" id="btn-expandir"></i>
                </div>
                <ul>
                    <li class="item-menu">
                        <button class="button-menu" type="submit" name="acao" value="opem">
                            <span class="icon"><i class="bi bi-list-check"></i></span>
                            <span class="txt-link">O.S</span>
                        </button>
                    </li>
                    <li class="item-menu">
                        <button class="button-menu" type="submit" name="acao" value="add-cliente">
                            <span class="icon"><i class="bi bi-person"></i></span>
                            <span class="txt-link">Cliente</span>
                        </button>
                    </li>
                    <li class="item-menu">
                        <button class="button-menu" type="submit" name="acao" value="add-produtos">
                            <span class="icon"><i class="bi bi-box-seam"></i></span>
                            <span class="txt-link">Produtos</span>
                        </button>
                    </li>
                    <li class="item-menu">
                       <button class="button-menu" type="submit" name="acao" value="usuarios">
                            <span class="icon"><i class="bi bi-file-earmark-person"></i></span>
                            <span class="txt-link">Funcinário</span>
                       </button>
                    </li>
                    <li class="item-menu">
                        <button class="button-menu" type="submit" name="acao" value="relatorio">
                            <span class="icon"><i class="bi bi-file-earmark-bar-graph"></i></span>
                            <span class="txt-link">Relatório</span>      
                        </button>
                    </li>
                    <li class="item-menu">
                        <button class="button-menu" type="submit" name="acao" value="valores">                    
                            <span class="icon"><i class="bi bi-search"></i></span>
                            <span class="txt-link">Orçamento</span>
                        </button>
                    </li>
                    <li class="item-menu">
                        <button class="button-menu" type="submit" name="acao" value="sair">                    
                            <span class="icon"><i class="bi bi-arrow-return-left"></i></span>
                            <span class="txt-link">Sair</span>
                        </button>
                    </li>
                </ul>
            </form>
        </nav>
        <script src="js/script.js"></script>
    <body> 
</html>