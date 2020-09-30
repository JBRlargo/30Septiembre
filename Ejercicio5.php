<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 5</title>
</head>
<body>
<?php
    include 'Biblioteca5.php';

    $tamanio=10;
    $minimo=-3;
    $maximo=9;
    $array= generaArrayInt($tamanio, $minimo, $maximo);

    print("<p>Se ha creado el siguiente array de enteros con el tamaño $tamanio, el mínimo $minimo y el máximo $maximo");
    print("<ul>");
    for ($i=0; $i < count($array); $i++) {
        print("<li>$array[$i]</li>");
    }
    print("</ul>");
    $minimo=minimoArrayInt($array);
    print("<p>El mínimo es ".$minimo."</p>");

    $encuentra= estaEnArrayInt($array, 5);

    if($encuentra){
        print("<p>Se encuentra el número 5");
    }else{
        print("<p>No se encuentra el número 5");
    }
?>
</body>
</html>