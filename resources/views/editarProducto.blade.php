@extends('layouts.hyf')

@section('content')
    <h2>
        Editar Producto
    </h2>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="nombre">
                Nombre:
            </label>
            <input class="form-control" type="text" name="nombre" value="{{old("nombre")}}">
        </div>
        <div class="form-group">
            <label for="precio">
                Precio:
            </label>
            <input class="form-control" type="text" name="precio" value="{{old("precio")}}">
        </div>
        <div class="form-group">
            <label for="descripcion">
                Descripcion:
            </label>
            <textarea class="form-control" name="descripcion">
				{{old("descripcion")}}
			</textarea>
        </div>
        <div class="form-group">
            <label for="categoria">
                Categoria:
            </label>
            <select class="form-control" name="categoria">
                @foreach($categories as $category)
                    @if ($category->id == old("categoria"))
                        <option value="{{$category->id}}" selected>
                            {{$category->name}}
                        </option>
                    @else
                        <option value="{{$category->id}}">
                            {{$category->name}}
                        </option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="marca">
                Marca:
            </label>
            <select class="form-control" name="marca">
                @foreach($brands as $brand)
                    @if ($brand->id == old("marca"))
                        <option value="{{$brand->id}}" selected>
                            {{$brand->name}}
                        </option>
                    @else
                        <option value="{{$brand->id}}">
                            {{$brand->name}}
                        </option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="imagen">
                Imagen:
            </label>
            <input type="file" name="imagen" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="" value="Editar Producto" class="btn btn-primary">
        </div>
    </form>
@endsection