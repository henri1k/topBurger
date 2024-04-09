<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\ClienteModel;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index(){
        $Clientes = ClienteModel::all();

            $ClientesComImagem = $Clientes->map(function($Cliente) {
                return [
                    'nome' => $Cliente->nome,
                    'email' => $Cliente->email,
                    'numero' => $Cliente->numero,
                    'imagem' => asset('storage/' . $Cliente->imagem),
                    'endereco' => $Cliente->endereco,
                    'cpf' => $Cliente->cpf,
                    'password' => $Cliente->password,


                ];

          });
 
    }

    public function store(Request $request){
        $ClienteData = $request->all();


        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $nomeImagem = time().'.'.$imagem->getClientOriginalExtension();
            $caminhoImagem= $imagem->storeAs('imagens/Clientes', $nomeImagem,'public');
            $ClienteData['imagem']= $caminhoImagem;
        }
        $Cliente = ClienteModel::create($ClienteData);
        return response()->json(['Cliente'=>$Cliente], 201);
    }

}

