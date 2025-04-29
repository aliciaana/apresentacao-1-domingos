<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoas;

class HomeController extends Controller
{
    public function index($id) {
        try {
            $usuario = Pessoas::find($id);
            if (!$usuario) {
                throw new Exception("Usuário não existe", 1);                
            }
            $nome = $usuario->nome;
            return response()->view("welcome.blade.php", ["nome" => $nome]);
        } catch (\Exception $th) {
            return response()->json(["success" => false, "error" => $th]);
        }
    }

    public function post() {
        try {
            Pessoas::create(['nome' => 'Ana']);
            return response()->view("welcome.blade.php", ["nome" => "Ana"]);
        } catch (\Exception $th) {
            echo $th;
            return response()->json(["success" => false, "error" => $th]);
        }
    }
}
