<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora en PHP</title>

    <style>
        * {
            background-color: lightgrey;
            font-size: 20px;
            font-weight: bold;
            padding: 10px;
        }

        a {
            display: inline-block;
            font-size: 30px;
            color: white;
            text-decoration: none;
            background-color: red;
            border: 5px solid;
            border-color: violet;
            border-radius: 10px;
            margin-top: 20px;
            justify-content: center;
        }

        a:hover {
            background-color: blueviolet;
            text-decoration: underline;
            transition: all 1s;
        }
    </style>

</head>

<body>

    <?php
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    if (isset($operacion)) {

        if ($operacion == "sumar") {
            $resultado = $numero1 + $numero2;
            echo "La suma de el " . $numero1 . " más el " . $numero2 . " es igual a " . $resultado;
        }

        if ($operacion == "restar") {
            $resultado = $numero1 - $numero2;
            echo "La resta de el " . $numero1 . " menos el " . $numero2 . " es igual a " . $resultado;
        }

        if ($operacion == "multiplicar") {
            $resultado = $numero1 * $numero2;
            echo "La multiplicación de el " . $numero1 . " por el " . $numero2 . " es igual a " . $resultado;
        }

        if ($operacion == "dividir") {
            if ($numero2 == 0) {
                echo "ERROR: no es posible dividir entre cero";
            } else {
                $resultado = $numero1 / $numero2;
                echo "La división de el " . $numero1 . " entre el " . $numero2 . " es igual a " . $resultado;
            }
        }

        echo "<br> <a href='index.html'>Volver a la calculadora</a>";
    }

    ?>

</body>

</html>