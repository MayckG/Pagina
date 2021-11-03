<!--  esse arquivo 'site' na Pasta layout dentro de 'Views' tem a finalidade de criar a estrutura padrão HTML que será usada em todo o projeto-->

@include('layout._includes.topo')
<!--  o include() irá realizar a chamada de parte do HTML que será padronizado, nesse caso o HEADER da página, que aqui foi chamado de TOPO -->


@yield('conteudoPagina')
<!--  o yield('conteudoPagina') receber o código do projeto que deve ser apresentado no BODY da pagina -->

@include('layout._includes.rodape')
<!--  o include() irá realizar a chamada de parte do HTML que será padronizado, nesse caso o FOOTER da página, que aqui foi chamado de rodape -->


<!--  abaixo o exemplo de como ficará o HTML após a junção das partes codificadas acima -->

<!--
    <html>
    <head>
        <title>@yield('tituloPagina')</title>
    </head>
    <body>
        <conteudoPagina>@yield('conteudoPagina')</conteudoPagina>
    </body>
    <footer>
        <conteudoRodape></conteudoRodape>
    </footer>
</html>

-->