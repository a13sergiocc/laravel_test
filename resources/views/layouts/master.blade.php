<html>
<head>
	<title>@yield('titulo')</title>

	<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

	<style>
		body {
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100%;
			color: #B0BEC5;
			display: table;
			font-weight: 100;
			font-family: 'Lato';
		}

		.container {
			text-align: center;
			display: table-cell;
			vertical-align: middle;
		}

		.content {
			text-align: center;
			display: inline-block;
		}

		.title {
			font-size: 96px;
			margin-bottom: 40px;
		}

		.quote {
			font-size: 24px;
		}
	</style>
</head>

<body>
	<div class="container">
		<nav>
			<a href=".">Inicio</a>
			@yield('navegacion')
		</nav>

		<div class="content">
			<div class="title">@yield('contenido')</div>
			<img src="http://laguiatv.abc.es/archivos/201112/e7617b6fe0e6c87f96ab1f39b2b1e0d1_rex-230-3.jpg">
		</div>
	</div>
</body>
</html>
