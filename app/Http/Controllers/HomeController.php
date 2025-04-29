<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoas;
use Exception;

class HomeController extends Controller
{
    public function index($id) {
        try {
            $usuario = Pessoas::find($id);
            if (!$usuario) {
                throw new Exception("Usuário não existe", 1);                
            }
            $nome = $usuario->nome;
        return response()->view("welcome", ["nome" => $nome, "scripts" => ["js/reload.js"]]);
        } catch (\Exception $th) {
            return response()->json(["success" => false, "error" => $th]);
        }
    }

    public function post() {
        try {
            $pessoa = Pessoas::create(['nome' => 'Joel']);
            return response()->view("welcome", ["nome" => $pessoa->nome]);
        } catch (\Exception $th) {
            echo $th;
            return response()->json(["success" => false, "error" => $th]);
        }
    }
}
