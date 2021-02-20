<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculos;

class ControllerVeiculos extends Controller
{
    //
    function index(){
        //echo "exbindo mensagem Laravel";
        $veiculos = Veiculos::all();

        return view("veiculos.listagem", compact('veiculos'));
    }

    function novo(){
        $veiculo = new Veiculos();
        
        return view("veiculos.frmVeiculo", compact('veiculo'));
    }
}
