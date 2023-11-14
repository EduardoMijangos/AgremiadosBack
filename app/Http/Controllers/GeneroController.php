<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function registerGenero(Request $request){
        $genero = Genero::create([
            'genero' => $request->genero,
        ]);

        return response($genero, 201);
    }

    public function getGeneros(){
        $generos = Genero::all();
        return response($generos, 200);
    }

    public function getGenero($id){
        $genero = Genero::find($id);
        if($genero){
            return response($genero, 200);
        }else{
            return response(['message' => 'Genero no encontrado'], 404);
        }
    }

    public function updateGenero(Request $request, $id){
        $genero = Genero::find($id);
        if($genero){
            $genero->genero = $request->genero;
            $genero->save();
            return response($genero, 200);
        }else{
            return response(['message' => 'Genero no encontrado'], 404);
        }
    }

    public function deleteGenero($id){
        $genero = Genero::find($id);
        if($genero){
            $genero->delete();
            return response(['message' => 'Genero eliminado'], 200);
        }else{
            return response(['message' => 'Genero no encontrado'], 404);
        }
    }
}
