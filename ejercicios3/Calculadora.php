<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculadora</title>

	<style>
		input {
			
			text-align: center;
			color: black;
            display:inline-block;
            width: 60px; 
			height: 60px; 
			
		}
        .barr{
            border-collapse: 15px;

			text-align: center;
			color: black;
            width: 290px; 
			height: 30px; 


        }
        .borde{
            border: 5px solid black;
			padding: 6px;
            display: inline-block;
        }
	</style>

</head>
<body bgcolor="purple">
    <center>
	<h1>Calculadora simple</h1>
    <div class="borde">
	<form method="post" action="">
        <br>
		<input class="barr" type="text" name="resultado" value="<?php echo isset($_POST['resultado']) ? $_POST['resultado'] : ''; ?>"><br> 
        <br>
		<input type="submit" name="accion" value="7">
		<input type="submit" name="accion" value="8">
		<input type="submit" name="accion" value="9">
		<input type="submit" name="accion" value="/">
		<br>
		<input type="submit" name="accion" value="4">
		<input type="submit" name="accion" value="5">
		<input type="submit" name="accion" value="6">
		<input type="submit" name="accion" value="*">
		<br>
		<input type="submit" name="accion" value="1">
		<input type="submit" name="accion" value="2">
		<input type="submit" name="accion" value="3">
		<input type="submit" name="accion" value="-">
		<br>
		<input type="submit" name="accion" value="0">
		<input type="submit" name="accion" value=".">
		<input type="submit" name="accion" value="=">
		<input type="submit" name="accion" value="+">
		<br>
		<br>
		<input type="submit" name="accion" value="AC">
	</form>

	<?php
	if (isset($_POST['accion'])) {
		$accion = $_POST['accion'];
		$resultado = isset($_POST['resultado']) ? $_POST['resultado'] : '';

		if ($accion == 'AC') {
			$resultado = '';
		} elseif ($accion == '=') {
			$resultado = eval('return ' . $resultado . ';');
		} else {
			$resultado .= $accion;
		}

		echo '<script>document.getElementsByName("resultado")[0].value="' . $resultado . '";</script>';
	}
	?>
    </center>
    </div>
</body>
</html>
