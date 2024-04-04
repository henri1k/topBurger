<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index(){
        $Clientes = Cliente::all();

            $ClientesComImagem = $Clientes->map(function($Cliente) {
                return [
                    'nome' => $Cliente->nome,
                    'preco' => $Cliente->preco,
                    'ingredientes' => $Cliente->ingredientes,
                    'imagem' => asset('storage/' . $Cliente->imagem),
                    'telefone' => $Cliente->telefone,
                    'endereco' => $Cliente->endereco,
                    'email' => $Cliente->email,
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
        $Cliente = Cliente::create($ClienteData);
        return response()->json(['Cliente'=>$Cliente], 201);
    }

}

