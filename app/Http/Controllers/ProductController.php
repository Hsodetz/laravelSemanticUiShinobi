<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Creamos una variable donde vamos a pasar todos los registros de los productos, para mostrarlos en la vista
        $products = Product::paginate(5);

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Retornamos la vista para que se vaya a la pagina de creacion de formulario
        return view('products.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Aqui recibimos los datos del formulario, lo almacenamos y nos redirijimos a una vista
        $product = Product::create($request->all());

        return redirect()->route('products.index')->with('info', "Producto guardado con exito");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //dd($product->id);
        //Aqui mostramos a la vista show y le pasamos la variable product para mostrarla en la vista
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //Aqui mostramos a la vista que contiene el formulario de edicion, y le pasamos el $product
        //para saber el id del mismo
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $product->update($request->all());

        return redirect()->route('products.edit', $product->id)->with('info', "Producto $product->name actualizado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();

        return back()->with('info', "Producto $product->name eliminado correctamente");
    }
}
