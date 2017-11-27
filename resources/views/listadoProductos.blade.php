@extends('layouts.hyf')


@section('content')
	<h2>
		LISTADO DE VESTIDOS EN VENTA
	</h2>
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
			Precio: $ {{$product->amount}}
		</li>
		<li>
			Tipo de Producto: {{$product->product_type}}
		</li>

		@endforeach
	</ul>
@endsection