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
        
        return view("clientes.frmCliente", compact('cliente'));
    }
}
