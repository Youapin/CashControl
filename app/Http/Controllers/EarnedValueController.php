<?php

namespace App\Http\Controllers;

use App\Models\EarnedValue;
use Illuminate\Http\Request;

class EarnedValueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // NÃO HAVERÁ INDEX DE NADA EM VALORES GANHOS
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
    public function show(EarnedValue $earnedValue)
    {
        // NÃO HAVERÁ STORE DE NADA EM VALORES GANHOS
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EarnedValue $earnedValue)
    {
        // NÃO HAVERÁ EDIT DE NADA EM VALORES GANHOS
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EarnedValue $earnedValue)
    {
        // NÃO HAVERÁ UPDATE DE NADA EM VALORES GANHOS
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EarnedValue $earnedValue)
    {
        // NÃO HAVERÁ DESTROY DE NADA EM VALORES GANHOS
    }
}
