<?php

namespace App\Http\Controllers;

use App\Models\Ataque;
use Illuminate\Http\Request;

class AtaqueController extends Controller
{
    public readonly Ataque $ataque;

    public function __construct()
    {
        $this->ataque = new Ataque();
    }

    public function index()
    {
        $ataques = Ataque::All();
        return response()->json(['ataques' => $ataques]);
    }


    public function store(Request $request)
    {
        $data = $request->only(['nome', 'tipo', 'dano']);

        $created = $this->ataque->create($data);

        if ($created) {
            return response()->json(['message' => 'Ataque criado com sucesso', 'Ataque' => $created], 201);
        }

        return response()->json(['message' => 'Erro ao criar Ataque'], 500);
    }

    public function show(string $id)
    {
        $ataque = $this->ataque->find($id);

        if (!$ataque) {
            return response()->json(['message' => 'Ataque não foi encontrado'], 404);
        }

        return response()->json($ataque);
    }

    public function update(Request $request, string $id)
    {
        $ataque = $this->ataque->find($id);

        if (!$ataque) {
            return response()->json(['message' => 'Ataque não foi encontrado'], 404);
        }

        $updated = $ataque->update($request->only(['nome', 'tipo', 'dano']));

        if ($updated) {
            return response()->json(['message' => 'Ataque atualizado com sucesso', 'Ataque' => $ataque]);
        }

        return response()->json(['message' => 'Erro ao atualizar o Ataque'], 500);
    }

    public function destroy(string $id)
    {
        $ataque = $this->ataque->find($id);

        if (!$ataque) {
            return response()->json(['message' => 'Ataque não encontrado'], 404);
        }

        $ataque->delete();

        return response()->json(['message' => 'Ataque excluído com sucesso']);
    }
}
