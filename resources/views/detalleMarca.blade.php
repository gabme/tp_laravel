@extends("layouts.hyf")

@section("content")
    <h2>
        Detalle de marca: {{$brand->name}}
    </h2>
    <h3>
        Productos
    </h3>
    <ul>
        @foreach($brand->products as $product)
            <li>
                <a href="/productos/{{$product->id}}">
                    {{$product->name}}
                </a>
            </li>
        @endforeach
    </ul>
@endsection