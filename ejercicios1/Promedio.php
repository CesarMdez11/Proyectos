<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Promedio</title>

    <style>
        .boton{
            width: 200px;
            height: 40px;
        }
        input{
            width: 200px;
            height: 30px;
        }
        .borde{
            border: 5px solid black;
			padding: 6px;
            display: grid;
            color:black;
            width: 400px;
            height: 490px;

        }

    </style>
</head>
<body bgcolor="grey">
	<center>
	<h1>Sacar Promedio</h1><br>
    <div class="borde">
	<form method="post" action="">
		<h3 for="nota1">Nota 1:</h3>
		<input type="number" name="nota1" id="nota1"><br>
		<h3 for="nota2">Nota 2:<h3>
		<input type="number" name="nota2" id="nota2"><br>
		<h3 for="nota3">Nota 3:</h3>
		<input type="number" name="nota3" id="nota3"><br>
		<h3 for="nota4">Nota 4:</h3>
		<input type="number" name="nota4" id="nota4"><br>
        <br>
		<input class="boton" type="submit" value="Calcular Promedio">
	</form>

	<?php
		
		if(isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3']) && isset($_POST['nota4'])) {
			
			$nota1 = (float) $_POST['nota1'];
			$nota2 = (float) $_POST['nota2'];
			$nota3 = (float) $_POST['nota3'];
			$nota4 = (float) $_POST['nota4'];

			$promedio = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
			echo "<p>El promedio de las notas es: " . $promedio . "</p>";
		}
	?>

	</center>
    </div>
</body>
</html>