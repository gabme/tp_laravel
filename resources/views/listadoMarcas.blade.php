@extends("layouts.hyf")

@section("content")
    <h2>
        Marcas
    </h2>
    <ul>
        @foreach($brands as $brand)
            <li>
                <a href="/marcas/{{$brand->id}}">
                    {{$brand->name}}
                </a>
            </li>
        @endforeach
    </ul>
@endsection