<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index() {
    	$products = Product::all();

    	return view("listadoProductos", compact("products"));
    }

    public function show($id) {
    	$product = Product::find($id);

    	return view("detalleProducto", compact("product"));
    }

    public function search(Request $request) {
    	$buscar = $request["buscar"];

    	$products = Product::where("name", "LIKE", "%$buscar%")->paginate(15);

    	return view("resultadoBusqueda", compact("products", "buscar"));

    }
}