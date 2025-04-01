<?php

namespace App\Http\Controllers;

use App\Models\categoria_funcionario;
use Illuminate\Http\Request;

class CategoriaFuncionarioController extends Controller
{
    public readonly Categoriafuncionario $categoriafuncionario;
    public function __construct()
    {
        $this->categoriafuncionario = new Categoriafuncionario();
    }
    public function index()
    {
        $categorias_funcionarios = $this->categoriafuncionario->all();
        return view('categoria_funcionario_pasta.categoria_funcionario', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoria_funcionario_pasta.criar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categoria_funcionario $categoria_funcionario)
    {
        return view('categoria_funcionario_pasta.editar', ['categoria_funcionario' => $categoria_funcionario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->categoria_funcionario->where('id_categoria_func', $id)->delete();

    return redirect()->route('categoria_func.index');
    }
}
