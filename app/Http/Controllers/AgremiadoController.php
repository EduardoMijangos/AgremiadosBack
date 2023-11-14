<?php

namespace App\Http\Controllers;

use App\Models\Agremiado;
use Illuminate\Http\Request;

class AgremiadoController extends Controller
{

    public function registerAgremiado(Request $request){
        $agremiado = Agremiado::create([
            'nombre' => $request->nombre,
            'apellido_p' => $request->apellido_p,
            'apellido_m' => $request->apellido_m,
            'id_genero' => $request->id_genero,
            'NUP' => $request->NUP,
            'NUE' => $request->NUE,
            'RFC' => $request->RFC,
            'NSS' => $request->NSS,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'telefono' => $request->telefono,
            'cuota' => $request->cuota,
            'id_rol' => $request->id_rol
        ]);

        return response($agremiado, 201);
    }

    public function getAgremiados(){
        $agremiados = Agremiado::all();
        return response($agremiados, 200);
    }

    public function getAgremiado($id){
        $agremiado = Agremiado::find($id);
        if($agremiado){
            return response($agremiado, 200);
        }else{
            return response(['message' => 'Agremiado no encontrado'], 404);
        }
    }

    public function updateAgremiado(Request $request, $id){
        $agremiado = Agremiado::find($id);
        if($agremiado){
            $agremiado->nombre = $request->nombre;
            $agremiado->apellido_p = $request->apellido_p;
            $agremiado->apellido_m = $request->apellido_m;
            $agremiado->id_genero = $request->id_genero;
            $agremiado->NUP = $request->NUP;
            $agremiado->NUE = $request->NUE;
            $agremiado->RFC = $request->RFC;
            $agremiado->NSS = $request->NSS;
            $agremiado->fecha_nacimiento = $request->fecha_nacimiento;
            $agremiado->telefono = $request->telefono;
            $agremiado->cuota = $request->cuota;
            $agremiado->id_rol = $request->id_rol;
            $agremiado->save();
            return response($agremiado, 200);
        }else{
            return response(['message' => 'Agremiado no encontrado'], 404);
        }
    }

    public function deleteAgremiado($id){
        $agremiado = Agremiado::find($id);
        if($agremiado){
            $agremiado->delete();
            return response(['message' => 'Agremiado eliminado'], 200);
        }else{
            return response(['message' => 'Agremiado no encontrado'], 404);
        }
    }


}
