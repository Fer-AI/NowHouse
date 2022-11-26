<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo;
use Illuminate\Support\Facades\DB;

class tipo_controller extends Controller
{
    public function index(){
        $tipo = DB::table('tipo ')
        ->get();
        return $tipo;
    }

    public function save(Request $request){
        
        if($request->id == 0){
            $tipo  = new Tipo;
        }else{
            $tipo  = Tipo::find($request-> id);
        }

        
        $tipo ->casa = $request->casa;
        $tipo ->departamento = $request->departamento;
        $tipo ->terreno = $request->terreno;
        $tipo ->estudio = $request->estudio;
        $tipo ->duplex = $request->duplex;


        $tipo ->save();
        return $tipo;
    }

    public function delete(Request $request){
        $tipo  = tipo ::find($request->id);
        $tipo ->delete();
        return "tipo eliminado";
    }
}