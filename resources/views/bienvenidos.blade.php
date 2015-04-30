<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenidos</title>
</head>
<body>
	<p>Bienvenidos, {{ $nombre }}</p>
	<p>Tienes un {{ $coche }}</p>

	<p>Lista de colores</p>
	<ul>
		<li>{{ $listado[0] }}</li>
		<li>{{ $listado[1] }}</li>
		<li>{{ $listado[2] }}</li>
	</ul>

	@if ($coche == "BMW")
		<p>Los BMW son muy caros</p>
	@endif

	<ul>
		@for ($i=0; $i<count($listado); $i++)
			<li>{{ $listado[$i] }}</li>
		@endfor
	</ul>

	
</body>
</html>