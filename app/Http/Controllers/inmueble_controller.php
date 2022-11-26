<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inmueble;
use Illuminate\Support\Facades\DB;

class inmueble_controller extends Controller
{
    public function index(){
        $inmueble = DB::table('inmueble')
        ->get();
        return $inmueble;
    }

    public function save(Request $request){
        
        if($request->id == 0){
            $inmueble = new Inmueble;
        }else{
            $inmueble = Inmueble::find($request-> id);
        }

        $inmueble->titulo = $request->titulo;
        $inmueble->precio = $request->precio;
        $inmueble->imagen = $request->imagen;
        $inmueble->descripcion = $request->descripcion;
        $inmueble->direccion = $request->direccion;
        $inmueble->habitaciones = $request->habitaciones;
        $inmueble->baños = $request->baños;
        $inmueble->patio = $request->patio;
        $inmueble->localizacion = $request->localizacion;
        $inmueble->id_tipo = $request->id_tipo;

        $inmueble->save();
        return $inmueble;
    }

    public function delete(Request $request){
        $inmueble = inmueble::find($request->id);
        $inmueble->delete();
        return "inmueble eliminada";
    }
}
