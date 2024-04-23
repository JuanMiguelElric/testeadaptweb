<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Triângulo;
use Illuminate\Http\Request;

class TrianguloController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'valor1'=>'required',
            'valor2'=>'required',
            'valor3'=>'required'
    
        ]);
        $soma1and2 = $data["valor1"] + $data["valor2"];
       
        
        
        if($data['valor1']   <= 0 || $data['valor2'] <= 0 || $data['valor3']<=0){
            echo(" há campos nulos ou igual a zero");
            echo("<br>retornar <a href='/'> retornar </a> ");
           
        }elseif($data['valor1'] != $data['valor2'] && $data['valor2'] != $data['valor3'] ){
            echo("Triângulo escaleno");
            echo("<br>retornar <a href='/'> retornar </a> ");
           
            

        }elseif($data['valor1'] == $data['valor2'] && $data['valor2'] != $data['valor3'] && $data['valor1'] != $data['valor3']){
            echo("Triângulo isóceles");
            echo("<br>retornar <a href='/'> retornar </a> ");
        }elseif($data['valor1'] == $data['valor2'] && $data['valor2'] == $data['valor3'] && $data['valor1'] == $data['valor3']){
            echo("Triângulo Equilátero");
            echo("<br>retornar <a href='/'> retornar </a> ");
        }
        if($soma1and2 == $data["valor3"]){
            echo("a soma dos dois lados é igual ao resultado do  terceiro lado");
            echo("<br>retornar <a href='/'> retornar </a> ");
        }

        // formula de  lei dos cossenos

       // $cosA = ($data['valor2'] + $data['valor3'] - $data['valor1'])/(2*$data['valor2']*$data['valor'])
        
      
            

    }
}
