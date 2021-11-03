<?php     
    $_SESSION['login'] = true;
    $_SESSION['permissao'] = 9;
    $_SESSION['usuario']= "User";
    $_SESSION['requisicao']= "login";
?> 

<!-- extende a pagina de layout com nome 'site' que está no diretório 'views\layout' -->
@extends('layout.site')  

<!-- utilizando o página 'site' envia o valor que deverá ser substituído pela variável 
'tituloPagina' nesse caso 'Contatos' -->
@section('tituloPagina','Contatos')


<!-- inicia a seção da variável 'conteudoPagina' que esta no arquivo 'site' e contempla 
toda a informação que será apresentada no BODY da página através da variável -->
@section('conteudoPagina')
            
    <div id="usuario"> 
        <?php 
            if(isset($_SESSION['login']))
                if($_SESSION['permissao'] === 1)
                    echo "<p>Bem vindo(a), <strong>". $_SESSION['usuario'] ."</strong> [CNPJ ". $_SESSION['cnpj'] ." - ". $_SESSION['razao_social'] ." - ANP ". $_SESSION['anp'] ."]</p>";
                else
                    echo "<p>Bem vindo(a), <strong>". $_SESSION['usuario'] ."</strong></p>";
        ?>
    </div>
    <div id="tela">
    </div>
    <div >
        <div id="principal">
        </div>
    </div>

@endsection


