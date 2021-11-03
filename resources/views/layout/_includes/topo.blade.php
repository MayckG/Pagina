<?php     
    $_SESSION['login'] = true;
    $_SESSION['permissao'] = 9;

?> 

<html>
    <head>
        <title>@yield('tituloPagina')</title>
        <header>
            <div class="container">
                <div id="logo">
                    <!--  <img src="imagens/logo.png">  -->
                </div>
                <div id="menu">
                    <?php 
                        if(isset($_SESSION['login'])){
                            //administrador
                            if($_SESSION['permissao'] === 9){
                                echo "<a href='index.php?requisicao=painel'>Painel de Controle</a>";
                                //echo "<a href='index.php?requisicao=cotacao'>Cotação</a>";
                                echo "<a href='index.php?requisicao=consolidado'>Consolidado</a>";
                                echo "<a href='index.php?requisicao=pedido'>Pedido</a>";
                                echo "<a href='index.php?requisicao=meus_pedidos'>Meus Pedidos</a>";
                                echo "<a href='index.php?requisicao=financeiro'>Financeiro</a>";
                                //echo "<a href='index.php?requisicao=distribuidora'>Distribuidora</a>";
                                //echo "<a href='index.php?requisicao=relatorio'>Relatórios</a>";
                                echo "<a href='index.php?requisicao=logout'>Sair</a>";
                            }
                            //Financeiro
                            if($_SESSION['permissao'] === 8){
                                echo "<a href='index.php?requisicao=painel'>Painel de Controle</a>";
                                //echo "<a href='index.php?requisicao=cotacao'>Cotação</a>";
                                //echo "<a href='index.php?requisicao=consolidado'>Consolidado</a>";
                                //echo "<a href='index.php?requisicao=pedido'>Pedido</a>";
                                echo "<a href='index.php?requisicao=meus_pedidos'>Meus Pedidos</a>";
                                echo "<a href='index.php?requisicao=financeiro'>Financeiro</a>";
                                //echo "<a href='index.php?requisicao=distribuidora'>Distribuidora</a>";
                                //echo "<a href='index.php?requisicao=relatorio'>Relatórios</a>";
                                echo "<a href='index.php?requisicao=logout'>Sair</a>";
                            }
                            //vendedor
                            else if($_SESSION['permissao'] === 5){
                                echo "<a href='index.php?requisicao=painel'>Painel de Controle</a>";
                                echo "<a href='index.php?requisicao=cotacao'>Cotação</a>";
                                echo "<a href='index.php?requisicao=consolidado'>Consolidado</a>";
                                echo "<a href='index.php?requisicao=pedido'>Pedido</a>";
                                echo "<a href='index.php?requisicao=meus_pedidos'>Meus Pedidos</a>";
                                //echo "<a href='index.php?requisicao=financeiro'>Financeiro</a>";
                                //echo "<a href='index.php?requisicao=distribuidora'>Distribuidora</a>";
                                //echo "<a href='index.php?requisicao=relatorio'>Relatórios</a>";
                                echo "<a href='index.php?requisicao=logout'>Sair</a>";
                            }
                            //cliente
                            else if($_SESSION['permissao'] === 1){
                                echo "<a href='index.php?requisicao=painel'>Painel de Controle</a>";
                                echo "<a href='index.php?requisicao=cotacao'>Cotação</a>";
                                //echo "<a href='index.php?requisicao=consolidado'>Consolidado</a>";
                                //echo "<a href='index.php?requisicao=pedido'>Pedido</a>";
                                echo "<a href='index.php?requisicao=meus_pedidos'>Meus Pedidos</a>";
                                //echo "<a href='index.php?requisicao=financeiro'>Financeiro</a>";
                                //echo "<a href='index.php?requisicao=distribuidora'>Distribuidora</a>";
                                //echo "<a href='index.php?requisicao=relatorio'>Relatórios</a>";
                                echo "<a href='index.php?requisicao=logout'>Sair</a>";
                            }
                        }
                    ?>
                </div>
            </div>
        </header>
    </head>
    <body>