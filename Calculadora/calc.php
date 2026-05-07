<?php
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $suma = $_POST['sumar'];
    $resta = $_POST['restar'];
    $multiplicacion = $_POST['multiplicar'];
    $division = $_POST['dividir'];

    if (isset($suma)) {
        $resultado = $numero1 + $numero2;
        echo "La suma de el " .$numero1. " más el " .$numero2. " es igual a " .$resultado;
    }

    if (isset($resta)) {
        $resultado = $numero1 - $numero2;
        echo "La resta de el " .$numero1. " menos el " .$numero2. " es igual a " .$resultado;
    }

    if (isset($multiplicacion)) {
        $resultado = $numero1 * $numero2;
        echo "La multiplicación de el " .$numero1. " por el " .$numero2. " es igual a " .$resultado;
    }

    if (isset($division)) {
        $resultado = $numero1 / $numero2;
        echo "La división de el " .$numero1. " entre el " .$numero2. " es igual a " .$resultado;
    }

    echo "<a href='index.html'>Volver a la calculadora</a>";

?>