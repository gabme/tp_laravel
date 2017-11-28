@extends('layouts.hyf')

@section('content')
<div class="container">
        <div class="jumbotron">
            <h1>
                <marquee scrollamount="15">Bienvenido a tu perfil {{auth()->user()->nombre}}</marquee>
            </h1>
        </div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <a href="/agregarProducto"><h3>Agregar Producto</h3></a>
                <form>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
