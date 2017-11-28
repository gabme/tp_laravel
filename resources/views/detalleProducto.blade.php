@extends("layouts.hyf")

@section("content")
    <h2>
        Detalle de producto: {{$product->name}}
    </h2>
    <ul>
        <li>
            Stock: {{$product->stock}}
        </li>
        <li>
            Precio: {{$product->price}}
        </li>
        <li>
            Descripcion: {{$product->description}}
        </li>
        <li>
            <a href="/marcas/{{$product->brand->id}}">
                Marca: {{$product->brand->name}}
            </a>
        </li>
        <li>
            <a href="/categorias/{{$product->category->id}}">
                Categoria: {{$product->category->name}}
            </a>
        </li>
    </ul>
    @if ($inWishlist)
        <form action="/quitarWishlist" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$product->id}}">
            <input type="submit" name="" value="Quitar de Wishlist" class="btn btn-warning">
        </form>
    @else
        <form action="/agregarWishlist" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$product->id}}">
            <input type="submit" name="" value="Agregar a Wishlist" class="btn btn-primary">
        </form>
    @endif
    <img src="/{{$product->image}}">
    @if (auth()->check())
        <form action="/borrarProducto" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$product->id}}">
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" name="" value="Borrar" class="btn btn-danger">
        </form>
    @endif
@endsection