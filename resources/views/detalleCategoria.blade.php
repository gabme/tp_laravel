@extends("layouts.hyf")

@section("content")
    <h2>
        Detalle de categoria: {{$category->name}}
    </h2>
    <h3>
        Productos
    </h3>
    <ul>
        @foreach($category->products as $product)
            <li>
                <a href="/productos/{{$product->id}}">
                    {{$product->name}}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
