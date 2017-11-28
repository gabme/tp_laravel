@extends('layouts.hyf')


@section('content')
	<h2>
		LISTADO DE VESTIDOS EN VENTA
	</h2>
	<br>
	<ul>
		@foreach($products as $product)
			<li>
				<a href="/productos/{{$product->id}}">
					{{$product->name}}
				</a>
			</li>

			<li>
			Descripcion: {{$product->description}}
		</li>
		<li>
			Precio: $ {{$product->price}}
		</li>
		<li>
			Tipo de Producto: {{$product->category_id}}
		</li>
		<br>
		@endforeach
	</ul>
@endsection