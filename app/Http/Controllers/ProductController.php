<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Exception;

class ProductController extends Controller
{
    protected $validationRules = [
        'title' => 'required|max:60',
        'type' => 'required|max:15',
        'cooking_time' => 'required|integer|min:1|max:255',
        'weight' => 'required|integer|min:1',
        'description' => 'required',
        'image' => 'nullable|url'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view("products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validazione
        $request->validate($this->validationRules);

        $data = $request->all();

        $newProduct = Product::create($data);

        return redirect()->route("products.show", $newProduct->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view("products.show", compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view("products.edit", compact("product"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // validazione
        $request->validate($this->validationRules);

        $data = $request->all();

        $product->update($data);

        return redirect()->route("products.show", $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route("products.index");
    }
}
