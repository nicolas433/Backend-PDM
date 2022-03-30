<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atividade;

class AtividadesController extends Controller
{
    public function create(Request $request)
    {
        $data = \Carbon\Carbon::parse($request->get('data'))->toDateTimeString();

        $atividade = Atividade::create([
            'titulo' => $request->get('titulo'),
            'descricao' => $request->get('descricao'),
            'data' => $data,
            'tarefa' => $request->get('tarefa'),
        ]);

        return response()->json(['response' => $atividade]);
    }

    public function list()
    {
        $atividades = Atividade::get();

        return response()->json(['response' => $atividades]);
    }
}
