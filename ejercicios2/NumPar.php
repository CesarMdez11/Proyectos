<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par o impar</title>

    <style>
        .borde{
            border: 5px solid black;
			padding: 6px;
            display: grid;
            color:black;
            width: 400px;
            height: 250px;
        }
        input{
            width: 190px;
            height: 30px;
        }
        button{
            width: 120px;
            height: 30px;
        }
    </style>    
</head>
<body bgcolor="pink">
    <center><br>
    <h1>Par o impar</h1>
    <div class="borde">
    <form method="post">
        <h3 for="num">Ingrese un número:</h3>
        <input type="number" name="num" required><br>
        <br>
        <button type="submit" name="submit">Verificar</button>
    </form>
    <br>
    <?php
        function par($x) {
            if($x % 2 == 0) {
                return true;
            } else {
                return false;
            }
        }

        if(isset($_POST['submit'])) {
            $num = $_POST['num'];
            if(par($num)) {
                echo $num." es par";
            } else {
                echo $num." es impar";
            }
        }
    ?>
    </center>
    </div>
</body>
</html>
