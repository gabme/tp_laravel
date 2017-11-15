<!DOCTYPE html>
<html>
<head>
<title>FAQ's | Vestidos de novia</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />


<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>
<body>

<!-- header -->
    <body>
    <div class="header">
        <div class="container">
            <div class="header_logo">
                <h1><a href="index.php">VESTIDOS DE NOVIA<span>Para Novias Modernas</span></a></h1>
            </div>
    </div>
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li> <a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Registrarse</a></li>
                        <li><a href="{{ url('faqs') }}">FAQ's</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
 <!-- Authentication Links -->
                        @guest
                        
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

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