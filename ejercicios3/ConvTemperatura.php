<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conversión de Fa a Cel</title>

    <style>
		.border {
			border: 5px solid black; 
			padding: 6px; 
            display: block;
            color:white;
		}
	</style>

</head>
<body bgcolor="grey">
    <center>
        <br>
	<h1>Conversión de Fahrenheit a Celsius</h1>
    <div class="border">
	<form method="post" action="">
		<h3>Ingrese la temperatura en grados Fahrenheit:</h3><br>
		<input type="number" name="fahrenheit" required><br>
        <br>
		<input type="submit" name="submit" value="Convertir">
	</form>

	<?php
	if(isset($_POST['submit']))
	{
		$fahrenheit = $_POST['fahrenheit'];
		$celsius = ($fahrenheit - 32) * 5/9;
		echo "<p>La temperatura es de " . round($celsius, 2) . " grados Celsius.</p>";
	}
	?>
    </div>
    </center>
</body>
</html>
