<!-- extende a pagina de layout com nome 'site' que está no diretório 'views\layout' -->
@extends('layout.site')  

<!-- utilizando o página 'site' envia o valor que deverá ser substituído pela variável 
'tituloPagina' nesse caso 'Contatos' -->
@section('tituloPagina','Contatos')


<!-- inicia a seção da variável 'conteudoPagina' que esta no arquivo 'site' e contempla 
toda a informação que será apresentada no BODY da página através da variável -->
@section('conteudoPagina')

    <h3>Essa é a View Contato Index</h3>

    @foreach($contatos as $contato)
        <p>{{ $contato->nome }}</p>
        <p>{{ $contato->tel }}</p>
    @endforeach

@endsection
