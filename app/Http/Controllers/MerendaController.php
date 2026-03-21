<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merenda;

class MerendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $merenda = Merenda::All();

        return view('index',['merendas' => $merenda]);

    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cadastro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $merenda = new Merenda();

        $merenda->nome_prato = $request->nome_prato;
        $merenda->descricao = $request->descricao;
        $merenda->data = $request->data;
        $merenda->save();

        return redirect('/cadastro');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $merenda = Merenda::find($id);
        return view('editar',['merenda' => $merenda]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $merenda = Merenda::find($id);
        $merenda->nome_prato = $request->nome_prato;
        $merenda->descricao = $request->descricao;
        $merenda->data = $request->data;
        $merenda->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
