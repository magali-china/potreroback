<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //imprimir Hola mundo
    echo "Hola Mundo"."<br>";
    
    //crear variable y luego imprimirla
    $saludo = "Hola Mundo";
    echo $saludo."<br>";

    //Crear dos variables y luego hacer las cuentas
    $valor1 = 10;
    $valor2 = 20;
    $resultadoSuma = $valor1 + $valor2;
    $resultadoResta = $valor1-$valor2;
    $resultadoMultiplicacion = $valor1*$valor2;
    $resultadoDivision = $valor1/$valor2;
    $resultadoResto = $valor1%$valor2;

    echo "La suma de 10 + 20 es " . $resultadoSuma."<br>" ;
    echo "La resta de 10 - 20 es " . $resultadoResta."<br>";
    echo "La multiplicacion de 10 * 20 es ". $resultadoMultiplicacion."<br>";
    echo "La division de 10/20 es " . $resultadoDivision."<br>";
    echo "El resto de la division entera es ". $resultadoResto."<br>";

    //Pasar de  Celsius a Fahrenheit
    function celsiusAFahrenheit($celsius)
    {
        return $celsius * 9 / 5 + 32;
    }
    $celsius = 20;
    $fahrenheit = celsiusAFahrenheit($celsius);
    echo "Los $celsius grados centígrados equivalen a $fahrenheit grados fahrenheit"."<br>";

    // Datos del rectángulo
    $base = 18; // en cm
    $altura = 12; // en cm

    // Calcular el perímetro del rectángulo
    $perimetroRectangulo = 2 * ($base + $altura);

    // Calcular el área del rectángulo
    $areaRectangulo = $base * $altura;

    // Mostrar los resultados
    echo "Perímetro del rectángulo: " . $perimetroRectangulo . " cm\n";
    echo "Área del rectángulo: " . $areaRectangulo . " cm²\n"."<br>";

    // Datos del círculo
    $radio = 30; // en cm
    $pi = 3.14; // Valor de pi

    // Calcular el perímetro del círculo (circunferencia)
    $perimetroCirculo = 2 * $pi * $radio;

    // Calcular el área del círculo
    $areaCirculo = $pi * pow($radio, 2);

    // Mostrar los resultados
    echo "Perímetro del círculo: " . $perimetroCirculo . " cm\n";
    echo "Área del círculo: " . $areaCirculo . " cm²\n";
    
    ?>
</body>
</html>