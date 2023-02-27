<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Saludo </title>

    <style>
        .borde{
            border: 5px solid black;
			padding: 6px;
            display: grid;
            color:black;
            width: 400px;
            height: 190px;
        }
        input{
            width: 200px;
            height: 30px;
        }

    </style>
</head>
<body bgcolor="pink">
	<center><br>
	<h1>Saludo Personalizado</h1>
    <div class="borde">
	<form method="post" action="">
		<h3 for="nombre">Escribe tu nombre:</h3>
		<input type="text" name="nombre" id="nombre"><br>
		<br>

		<input class="boton" type="submit" value="Saludar">
	</form>

	<?php
		
		if(isset($_POST['nombre'])) {
			
			$nombre = $_POST['nombre'];

			
			echo "<p>Hola, " . $nombre . "¡Bienvenido(a), ah este proyecto!</p>";
		}
	?>
	</center>
    </div>
</body>
</html>
