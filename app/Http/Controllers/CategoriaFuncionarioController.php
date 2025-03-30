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
        return view('categoria', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(categoria_funcionario $categoria_funcionario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categoria_funcionario $categoria_funcionario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categoria_funcionario $categoria_funcionario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categoria_funcionario $categoria_funcionario)
    {
        //
    }
}
