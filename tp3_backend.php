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

    echo 'PUNTO 1: <br/>';
    for ($i=1; $i<=100 ; $i++) {
        echo ($i). '<br/>';
    }

    echo 'PUNTO 2: <br/>';
    for ($i=100; $i >0 ; $i--) {
        echo ($i). '<br/>';
    }

    // PUNTO 3 Y 4
    echo 'PUNTO 3 Y 4 : <br/>';
    for ($i = 1; $i <= 100 ; $i++){
        if ($i%2 == 0 ){
            echo ($i) . '<br/>';
        }else{
            echo ($i) . '<br/>';
        }
    };

    // PUNTO 5

    echo 'PUNTO 5: <br/>';
    $suma=0;
    for ($i = 0; $i<=20 ; $i++){
        $suma += $i;
        echo 'suma: '.($suma).'<br/>' ;
    }

    // PUNTO 6

    echo 'PUNTO : <br/>';
    $suma1 = 0;
    for ($i = 1; $i <=20 ; $i++){
        $suma1 += $i;
        if ($suma1 % 2 == 0){
            echo 'suma par: '. ($suma1). '<br/>';
        }
    };
    ?>
</body>
</html>