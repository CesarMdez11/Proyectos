<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Números Romanos</title>

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
<body bgcolor="grey">
	<center><br>
	<h1>Números Romanos a Enteros</h1>
    <div class="borde">
	<form method="post" action="">
		<h3 for="numero_romano">Escribe un número en notación romana:</h3>
		<input type="text" name="numero_romano" id="numero_romano"><br>
		<br>

		<input type="submit" value="Convertir">
	</form>

	<?php
		
		function romano_a_arabigo($numero_romano) {
			
			$valores = array(
				'M' => 1000,
				'CM' => 900,
				'D' => 500,
				'CD' => 400,
				'C' => 100,
				'XC' => 90,
				'L' => 50,
				'XL' => 40,
				'X' => 10,
				'IX' => 9,
				'V' => 5,
				'IV' => 4,
				'I' => 1
			);

			$entero = 0;
			foreach($valores as $simbolo => $valor) {
				while(strpos($numero_romano, $simbolo) === 0) {
					$entero += $valor;
					$numero_romano = substr($numero_romano, strlen($simbolo));
				}
			}
			return $entero;
		}
		if(isset($_POST['numero_romano'])) {
			
			$numero_romano = $_POST['numero_romano'];
			$entero = romano_a_arabigo($numero_romano);
			echo "<p>El número romano " . $numero_romano . " equivale a " . $entero;
		}
	?>

	</center>
    </div>
</body>
</html>
