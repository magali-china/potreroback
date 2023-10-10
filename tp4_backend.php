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
    //1
    print "<h1>Ejercicio 1</h1>\n";

    $numeros = [2,4,6,8,10,12,14,16,18,20];

    foreach ($numeros as $i ){
        print "<pre>\n";
        print ($i);
        print "<pre>\n";
    }

    //2
    print "<h1>Ejercicio 2</h1>\n";

    $nombres = ["Pedro", "Ana",34,1];

    print_r($nombres);

    //3
    print "<h1>Ejercicio 3</h1>\n";

    $asociativo = [
        'nombre' => "Pedro", 
        'apellido' => "Torres", 
        'direccion' => "Av Mayor 3703",
        'telefono' => 1122334455,
    ];

    print_r($asociativo);

    //4
    print "<h1>Ejercicio 4</h1>\n";

    $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];

    foreach($ciudades as $key => $value){
        print "<pre>\n";
        print("La ciudad con el indice : $key tiene el nombre: $value");
        print "<pre>\n";
    };

    //5

    print "<h1>Ejercicio 5</h1>\n";

    $citys = [
        'MD' => "Madrid", 
        'BCL' => "Barcelona", 
        'LD' => "Londres",
        'NY' => "New York",
        'LA' => "Los Angeles", 
        'CCG' => "Chicago"
    ];

    foreach ($citys as $key => $value) {
        print "<pre>\n";
        print ("El índice de $value es $key");
        print "<pre>\n";
    };

    ?>
</body>
</html>