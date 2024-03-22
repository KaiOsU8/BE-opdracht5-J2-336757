<?php

namespace App\Http\Controllers;

use App\Models\Leverancier;
use Illuminate\Http\Request;

class LeverancierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leveranciers = \App\Models\Leverancier::with('productPerLeverancier')->get();

        return view('leverancier.index', compact('leveranciers'));
    }

    public function leverancier()
    {
        $leveranciers = \App\Models\Leverancier::with('productPerLeverancier')->get();

        return view('leverancier.overzicht', compact('leveranciers'));
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
    public function show($id)
    {
        $leverancier = \App\Models\Leverancier::findOrFail($id);

        //dd($id, $leverancier);
      
        return view('leverancier.show', compact('leverancier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leverancier $leverancier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Leverancier $leverancier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leverancier $leverancier)
    {
        //
    }
}
