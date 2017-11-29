<!DOCTYPE html>
<html>

<head>
<title>Vestidos de novia</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />


<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/fasthover.css') }}" rel="stylesheet" type="text/css" media="all" />
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-3.1.1.min.jss') }}"></script>
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>


<!-- header -->
    <body>
    <div class="header">
        <div class="container">
            <div class="header_logo">
                <h1><a href="/">VESTIDOS DE NOVIA<span>Para Novias Modernas</span></a></h1>
            </div>
    </div>
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="nav navbar-nav">
                        <li>
                        <a href="/">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/faqs">
                            FAQs
                        </a>
                    </li>
                    <li>
                        <a href="/productos">
                            Listado de Productos
                        </a>
                    </li>
                    @if (auth()->check())
                        <li>
                            <a style="color: red" href="/home">
                            Perfil de: {{auth()->user()->nombre}}
                            </a>
                        </li>
                        <li>
                            <form method="post" action="/logout">
                                {{csrf_field()}}
                                <input type="submit" value="Logout" class="btn btn-link">
                            </form>
                        </li>
                    @else
                        <li>
                            <a href="/register">
                                Registración
                            </a>
                        </li>
                        <li>
                            <a href="/login">
                                Ingresá
                            </a>
                        </li>
                    @endif
                    </ul>
                </div>
            </nav>

        </div>
    </div>
</div>
<div class="container">
    @yield('content')
</div>



<div class="footer">
        <div class="container">
            <div class="footer_grids">
                <div class="col-md-3 footer_grid">
                    <h3>Contacto</h3>
                    <p>Para más información encontranos en:</p>
                    <ul class="address">
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Av. Moroe 860, CABA.</li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@vestidos.com">info@vestidos.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                    </ul>
                </div>

                <div class="col-md-3 footer_grid">
                    <h4>Seguinos</h4>
                    <div class="social_button">
                        <ul>
                            <li><a href="http://www.facebook.com" class="facebook"> </a></li>
                            <li><a href="http://www.twitter.com" class="twitter"> </a></li>
                            <li><a href="http://www.google.com" class="googleplus"> </a></li>
                        </ul>
                    </div>
                </div>
        </div>
        </div>
    </div>
</body>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
<!-- //header -->