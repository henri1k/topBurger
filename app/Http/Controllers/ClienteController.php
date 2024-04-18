<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestCliente;
use App\Models\ClienteModel;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index(){
        $Cliente_models = ClienteModel::all();

            $ClientesComImagem = $Cliente_models->map(function($Cliente_models) {
                return [
                    'nome' => $Cliente_models->nome,
                    'email' => $Cliente_models->email,
                    'numero' => $Cliente_models->numero,
                    'imagem' => asset('storage/' . $Cliente_models->imagem),
                    'endereco' => $Cliente_models->endereco,
                    'cpf' => $Cliente_models->cpf,
                    'password' => $Cliente_models->password,


                ];

          });
 
    }

    public function store(FormRequestCliente $request){
        $ClienteData = $request->all();


        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $nomeImagem = time().'.'.$imagem->getClientOriginalExtension();
            $caminhoImagem= $imagem->storeAs('imagens/Clientes', $nomeImagem,'public');
            $ClienteData['imagem']= $caminhoImagem;
        }
        $Cliente_models = ClienteModel::create($ClienteData);
        return response()->json(['Cliente'=>$Cliente_models], 201);
    }

}

