<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class ControllerClientes extends Controller
{
    //
    function index(){
        //echo "exbindo mensagem Laravel";
        $clientes = Clientes::all();

        return view("clientes.listagem", compact('clientes'));
    }

    function novo(){
        $cliente = new Clientes();
        $cliente->id = 0;
        $cliente->nome ="";
        $cliente->cpf="";
        $cliente->email="";
        $cliente->cep="";
        $cliente->telefone="";
        $cliente->id_veiculo_cliente=0;

        $cliente = Clientes::all();
        
        return view("clientes.frmCliente", compact('cliente'));
    }

    function salvar(Request $request){
        if($request->input("id")==0){
            $cliente = new Clientes();
        } else{
            $cliente->save();
            return redirect()->route("veiculo_novo");
        }
    }
}
