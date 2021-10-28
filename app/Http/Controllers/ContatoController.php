<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        //return "Esse é o Index do ContatoController";
        $contatos = [
            (object)["nome"=>"Maria","tel"=>"96965588"],
            (object)["nome"=>"Pedro","tel"=>"88543285"]
        ];
        return view('contato.index',compact('contatos'));
    }


    public function criar(Request $reg)
    {
        dd($reg['nome']);
        return "Esse é o Criar do ContatoController";
    }

    public function editar()
    {
        return "Esse é o Editar do ContatoController";
    }
}
