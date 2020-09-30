<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 2</title>
</head>
<body>
<?php

$dia=$_POST['dia'];
switch ($dia) {
    case 1:
        print("<p>Lunes<P>");
        break;
    case 2:
        print("<p>Martes<P>");
        break;
    case 3:
        print("<p>Miércoles<P>");
        break;
    case 4:
        print("<p>Jueves<P>");
        break;
    case 5:
        print("<p>Viernes<P>");
        break;
    case 6:
        print("<p>Sábado<P>");
        break;
    case 7:
        print("<p>Domingo<P>");
        break;
    
    default:
        print("<p>Introduzca un valor válido<P>");
        break;
}
?>
</form>
</body>
</html>