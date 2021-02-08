<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastroFormRequest;
use Illuminate\Http\Request;
use App\Cadastro;
use Illuminate\Support\Facades\Mail;
use App\Models\Order;

class CadastroController extends Controller
{
    public function create()
    {
        return view('dados.create');
    }

    public function store(CadastroFormRequest $request)
    {
        $path = $request->file('curriculo')->store('curriculo');


       Cadastro::create([
           'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'curriculo' => $path,
           'ip' => $ipAddress = $request->ip()
        ]);


        return redirect('/dados');
    }


}

