<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tabla de multiplicar</title>
	<style>
		table {
			border-collapse: collapse;
			text-align: center;
			color: snow;
			border-color: darkblue;
		}

		td, th {
			border: 5px solid skyblue;
			padding: 15px;
		}
		.columna{
			color: red;
		}
        .borde{
            border: 5px solid black;
			padding: 6px;
            display: inline-block;
        }
	</style>
</head>
<body bgcolor="purple">
	<center><br>
		<h1>Tabla de Multiplicar</h1>
        <div class="borde">
	<table>
		<thead>
			<tr>
				<th class="columna">x</th>
				<?php
				// Imprimir las cabeceras de la tabla con los números del 1 al 10
				for ($i = 1; $i <= 10; $i++) {
					echo "<th>$i</th>";
				}
				?>
			</tr>
		</thead>
		<tbody>
			<?php
			// Bucle que recorre las filas de la tabla
			for ($i = 1; $i <= 10; $i++) {
				echo "<tr>";
				echo "<th>$i</th>";
				// Bucle que recorre las columnas de la tabla
				for ($j = 1; $j <= 10; $j++) {
					// Calcular el producto de los dos números
					$producto = $i * $j;
					// Imprimir el resultado en una celda de la tabla
					echo "<td>$producto</td>";
				}
				echo "</tr>";
			}
			?>
			</center>
		</tbody>
	</table>
    </div>
</body>
</html>
