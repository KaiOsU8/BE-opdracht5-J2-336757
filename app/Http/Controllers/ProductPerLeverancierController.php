<?php

namespace App\Http\Controllers;

use App\Models\ProductPerLeverancier;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Leverancier;

class ProductPerLeverancierController extends Controller
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
    public function create($productId, $leverancierId)
    {
        $product = Product::find($productId);
        $leverancier = Product::find($leverancierId);


    
        return view('leverancier.create', ['product' => $product, 'leverancier' => $leverancier]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $productId, $leverancierId)
    {
        $request->validate([
            'Aantal' => 'required|integer',
            'DatumEerstVolgendeLevering' => 'required|date',
            'LeverancierId' => 'required|integer',
        ]);
    
        $product = \App\Models\Product::find($productId);
    
        if ($product === null) {
            return redirect()->back()->withErrors('Product not found');
        }
    
        $product->productPerLeverancier()->create([
            'Aantal' => $request->Aantal,
            'DatumEerstVolgendeLevering' => $request->DatumEerstVolgendeLevering,
            'LeverancierId' => $request->input('LeverancierId'),
        ]);
    
        return redirect()->route('leverancier.show', $leverancierId);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductPerLeverancier $productPerLeverancier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductPerLeverancier $productPerLeverancier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductPerLeverancier $productPerLeverancier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductPerLeverancier $productPerLeverancier)
    {
        //
    }
}
