<?php

namespace App\Http\Controllers;

use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Mostrar la lista de productos.
     */
    public function index()
    {
        $productos = Producto::all();

        return view('productos.index', compact('productos'));
    }
}