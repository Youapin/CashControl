<?php

namespace App\Http\Controllers;

use App\Models\Extract;
use Illuminate\Http\Request;

class ExtractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //  NÃO HAVERÁ CREATE DE NADA EM EXRATO
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // NÃO HAVERÁ STORE DE NADA EM EXRATO
    }

    /**
     * Display the specified resource.
     */
    public function show(Extract $extract)
    {   
        /**$NameEarned = Name::find();
        $Category = Category::find();
        $Value = Value::find();
        $Date = Date::find();
        $Prove = Prove::find();
        $Recurring = Recurring::find();*/

        return view();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Extract $extract)
    {
        // NÃO HAVERÁ EDIT DE NADA EM EXRATO
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Extract $extract)
    {
        // NÃO HAVERÁ UPDATE DE NADA EM EXRATO
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Extract $extract)
    {
        //
    }
}
