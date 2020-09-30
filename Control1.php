
<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 1</title>
</head>
<body>
<?php

$radio=$_POST['radio'];
$perimetro=2*pi()*$radio;
$area=pi()*pow($radio, 2);
    print("
    <p>Radio: $radio</p>
    <p>Perímetro: $perimetro</p>
    <p>Área: $area</p>");
?>
</form>
</body>
</html>

