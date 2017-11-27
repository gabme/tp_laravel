<!DOCTYPE html>
<html>
<head>
<title>Vestidos de novia</title>
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
                        <li>
						<a href="/index">
							Home
						</a>
					</li>
					<li>
						<a href="/marcas">
							FAQs
						</a>
					</li>
					<li>
						<a href="/productos">
							Productos
						</a>
					</li>
					@if (auth()->check())
						<li>
							<a>
							Bienvenido {{auth()->user()->nombre}}
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
<body>
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
		@yield("principal")
	</div>
</body>
</html>