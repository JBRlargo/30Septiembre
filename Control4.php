<!DOCTYPE html>
<html>
<head>
<title>Piezas en Ajedrez</title>
</head>
<body>
<?php
    
    $numero= $_REQUEST['numero'];

    print("<h1>TABLA DE MULTIPLICAR DEL $numero");

    print("<table>");
    for ($i=0; $i <= 10; $i++) { 
        print("<tr><td>$i x$numero=".$numero*$i."</td></tr>");
    }
    print("</table");
?>
</body>
</html>