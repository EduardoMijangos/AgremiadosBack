<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function registerRol(Request $request){
        $rol = Rol::create([
            'rol' => $request->rol,
        ]);

        return response($rol, 201);
    }

    public function getRols(){
        $rols = Rol::all();
        if($rols->count() > 0){
            return response($rols, 200);
        }else{
            return response(['message' => 'Rol no encontrado'], 404);
        }
    }

    public function getRol($id){
        $rol = Rol::find($id);
        if($rol){
            return response($rol, 200);
        }else{
            return response(['message' => 'Rol no encontrado'], 404);
        }
    }

    public function updateRol(Request $request, $id){
        $rol = Rol::find($id);
        if($rol){
            $rol->rol = $request->rol;
            $rol->save();
            return response($rol, 200);
        }else{
            return response(['message' => 'Rol no encontrado'], 404);
        }
    }

    public function deleteRol($id){
        $rol = Rol::find($id);
        if($rol){
            $rol->delete();
            return response(['message' => 'Rol eliminado'], 200);
        }else{
            return response(['message' => 'Rol no encontrado'], 404);
        }
    }

}
