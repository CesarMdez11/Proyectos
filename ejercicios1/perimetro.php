<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Circulo</title>

    <style>

        .borde{
            border: 5px solid black;
			padding: 6px;
            display: grid;
            color:black;
            width: 400px;
            height: 260px;
        }
        input{
            width: 200px;
            height: 30px;
        }

    </style>
</head>
<body bgcolor="grey">
	<center><br>
	<h1>Perímetro y Área de un Círculo</h1>
    <div class="borde">
	<form method="post" action="">
		<h3 for="radio">Radio:</h3>
		<input type="number" name="radio" id="radio"><br>
		<br>

		<input type="submit" value="Calcular">
	</form>

	<?php
		
		if(isset($_POST['radio'])) {
			
			$radio = (float) $_POST['radio'];
			$perimetro = 2 * pi() * $radio;
			$area = pi() * pow($radio, 2);
			
			echo "<p>El perímetro del círculo es: " . $perimetro . "</p>";
			echo "<p>El área del círculo es: " . $area . "</p>";
		}
	?>
	</center>
    </div>
</body>
</html>
