<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Category;

class ProductsController extends Controller
{
    public function removeWishlist(Request $request) {
        $wishlist = session("wishlist");

        foreach ($wishlist as $key => $wish) {
            if ($wish == $request["id"]) {
                unset($wishlist[$key]);
            }
        }

        session(["wishlist" => $wishlist]);

        return back()->with("status", "Producto eliminado de wishlist");
    }

    public function wishlist() {
        $products = [];

        $wishlist = session("wishlist");

        if ($wishlist) {
            foreach ($wishlist as $wish) {
                $products[] = Product::find($wish);
            }
        }

        return view("wishlist", compact("products"));
    }

    public function addWishlist(Request $request) {

        $wishlist = session("wishlist");

        if (!$wishlist) {
            $wishlist = [];
        }

        $wishlist[] = $request["id"];

        session(["wishlist" => $wishlist]);

        return back()->with("status", "Producto agregado a la wishlist");
    }

    public function delete(Request $request) {
        $producto = Product::find($request["id"]);
        $producto->delete();

        return redirect("/productos")->with("status", "Borraste el producto " . $producto->name . " con éxito");
    }

    public function add() {
        $categories = Category::all();
        $brands = Brand::all();

        return view("agregarProducto", compact("categories", "brands"));
    }

    public function store(Request $request) {

        $reglas = [
            "nombre" => "required|string",
            "precio" => "required|numeric|min:0",
            "descripcion" => "required|max:1000",
            "imagen" => "required|image"
        ];

        $mensajes = [
            "required" => "El campo :attribute es requerido",
            "numeric" => "El campo :attribute debe ser un número",
            "min" => "El campo :attribute tiene un mínimo de :min",
            "max" => "El campo :attribute tiene un máximo de :max",
            "image" => "El campo :attribute debe ser una imagen"
        ];

        $this->validate($request, $reglas, $mensajes);

        $foto = $request->file("imagen");

        $nombreFoto = $foto->store("public/products");

        $nombreFoto = str_replace("public", "storage", $nombreFoto);

        $producto = new Product();
        $producto->name = $request["nombre"];
        $producto->price = $request["precio"];
        $producto->description = $request["descripcion"];
        $producto->category_id = $request["categoria"];
        $producto->brand_id = $request["marca"];
        $producto->image = $nombreFoto;

        $producto->save();

        return redirect("/productos/" . $producto->id);
    }

    public function edit($id){
        $product = Product::find($id);
        $categories = Category::all();
        $brands = Brand::all();
        return view("editarProducto", compact("product","categories","brands"));
    }

    public function editedProduct(Request $request){
        $reglas = [
            "nombre" => "string",
            "precio" => "numeric|min:0",
            "descripcion" => "max:1000",
            "imagen" => "image"
        ];

        $mensajes = [
            "numeric" => "El campo :attribute debe ser un número",
            "min" => "El campo :attribute tiene un mínimo de :min",
            "max" => "El campo :attribute tiene un máximo de :max",
            "image" => "El campo :attribute debe ser una imagen"
        ];

        $this->validate($request, $reglas, $mensajes);

        $foto = $request->file("imagen");
        if($foto){
            $nombreFoto = $foto->store("public/products");

            $nombreFoto = str_replace("public", "storage", $nombreFoto);
        }

        $producto = Product::find();



        $producto->save();

        return redirect("/productos/" . $producto->id);
    }
    public function index() {
        $products = Product::paginate(2);

        return view("listadoProductos", compact("products"));
    }

    public function show($id) {
        $product = Product::find($id);

        $wishlist = session("wishlist");
        $inWishlist = false;
        if ($wishlist && in_array($id, $wishlist)) {
            $inWishlist = true;
        }

        return view("detalleProducto", compact("product", "inWishlist"));
    }

    public function search(Request $request) {
        $buscar = $request["buscar"];

        $products = Product::where("name", "LIKE", "%$buscar%")->paginate(15);

        return view("resultadoBusqueda", compact("products", "buscar"));

    }
}
