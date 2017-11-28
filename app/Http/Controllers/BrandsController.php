<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandsController extends Controller
{
    public function index() {
        $brands = Brand::all();

        return view("listadoMarcas", compact("brands"));
    }

    public function show($id) {
        $brand = Brand::find($id);

        return view("detalleMarca", compact("brand"));
    }
}
