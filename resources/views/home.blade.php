@extends('layouts.hyf')

@section('content')
<div class="container">
        <header>
            <nav>
                <ul>
                    
                        <form class="buscar" method="GET" action="/buscarProductos">
                            <input class="form-control buscar" type="text" name="buscar">
                            <input type="submit" name="" value="Buscar" class="btn btn-primary">
                        </form>
                    
                </ul>
            </nav>
        </header>
        <div class="jumbotron">
            <h1>
                <marquee scrollamount="15">Bienvenido a tu perfil {{auth()->user()->nombre}}</marquee>
            </h1>
        </div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
