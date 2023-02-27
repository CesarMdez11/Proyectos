<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máximo Común Divisor</title>

    <style>
        .borde{
            border: 5px solid black;
			padding: 6px;
            display: inline-block;
            color:white;
            width: 500px;
            height: 350px;
        }
        button{
            width: 120px;
            height: 40px;
        }
        input{
            width: 190px;
            height: 30px;
        }

    </style>
</head>
<body bgcolor="grey">
    <center>
    <h1>Máximo Común Divisor</h1>
    <div class="borde">
    <form method="post">
        <h3 for="num1">Ingrese el primer número:</h3>
        <input type="number" name="num1" required>
        <br>
        <h3 for="num2">Ingrese el segundo número:</h3>
        <input type="number" name="num2" required><br>
        <br>
        <button type="submit" name="submit">Calcular MCD</button>
    </form>
    <br>
    
    <?php
        function mcd($a, $b) {
            if($a == 0) {
                return $b;
            } else {
                return mcd($b % $a, $a);
            }
        }

        if(isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            echo "El MCD de ".$num1." y ".$num2." es ".mcd($num1, $num2);
        }
    ?>
    </center>
    </div>
</body>
</html>
