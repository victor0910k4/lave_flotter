<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public readonly Persona $persona;

    public function __construct()
    {
        $this->persona = new Persona();
    }

    public function index()
    {
        $personas = $this->persona->all();
        return response()->json($personas);
    }

    public function store(Request $request)
    {
        $data = $request->only(['nome', 'arcana', 'nivel']);

        $created = $this->persona->create($data);

        if ($created) {
            return response()->json(['message' => 'Persona criado com sucesso', 'persona' => $created], 201);
        }

        return response()->json(['message' => 'Erro ao criar persona'], 500);
    }

    public function show(string $id)
    {
        $persona = $this->persona->find($id);

        if (!$persona) {
            return response()->json(['message' => 'Persona não encontrado'], 404);
        }

        return response()->json($persona);
    }

    public function update(Request $request, string $id)
    {
        $persona = $this->persona->find($id);

        if (!$persona) {
            return response()->json(['message' => 'Persona não encontrado'], 404);
        }

        $updated = $persona->update($request->only(['nome', 'arcana', 'nivel']));

        if ($updated) {
            return response()->json(['message' => 'Persona atualizado com sucesso', 'persona' => $persona]);
        }

        return response()->json(['message' => 'Erro ao atualizar persona'], 500);
    }

    public function destroy(string $id)
    {
        $persona = $this->persona->find($id);

        if (!$persona) {
            return response()->json(['message' => 'Persona não encontrado'], 404);
        }

        $persona->delete();

        return response()->json(['message' => 'Persona excluído com sucesso']);
    }
}
