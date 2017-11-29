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

			<ul>
			Descripcion: {{$product->description}}
		</ul>
		<ul>
			Precio: $ {{$product->price}}
		</ul>
		<ul>
			Tipo de Producto: {{$product->category_id}}
		</ul>
		<br>
		@endforeach
	</ul>
	<?php echo $products->render(); ?>
@endsection