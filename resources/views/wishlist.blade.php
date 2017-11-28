@extends("layouts.hyf")

@section("content")
    <h2>
        Mi Wishlist
    </h2>
    <ul>
        @forelse($products as $product)
            <li>
                <a href="/productos/{{$product->id}}">
                    {{$product->name}}
                </a>
            </li>
        @empty
            <p>
                No hay nada en tu wishlist
            </p>
        @endforelse
    </ul>
@endsection