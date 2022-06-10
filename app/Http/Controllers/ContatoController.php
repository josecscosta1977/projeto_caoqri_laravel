<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ContatoStoreRequest;

class ContatoController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContatoStoreRequest $request)
    {
        $contatos = new Contato;

        $contatos->nome = $request->nome;
        $contatos->email = $request->email;
        $contatos->cidade = $request->cidade;
        $contatos->estado = $request->estado;
        $contatos->telefone = $request->telefone;
        $contatos->mensagem = $request->mensagem;

        $contatos->save();

        return redirect('obg');
    }
}
