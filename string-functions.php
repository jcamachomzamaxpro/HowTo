<?php

$dato1 = 'Buenas';
echo $dato1 . "<br>";
echo "Ejemplo de strlen: " . strlen($dato1);

echo "<br><br>-----------------------------<br><br>";

$dato2 = 'Este es un ejemplo de un strpos()';
echo $dato2 . "<br>";
echo "Ejemplo de strlen: " . strpos($dato2, "de");

echo "<br><br>-----------------------------<br><br>";

$dato3 = 'Soy frontEnd';
echo $dato3 . "<br>";
echo str_replace("frontEnd", "FullStack", $dato3);

echo "<br><br>-----------------------------<br><br>";

$dato4 = 'Uso de StrToLower()';
echo $dato4 . "<br>";
echo strtolower($dato4);

echo "<br><br>-----------------------------<br><br>";

$dato5 = 'Uso de StrToUpper()';
echo $dato5 . "<br>";
echo strtoupper($dato5);

echo "<br><br>-----------------------------<br><br>";

$dato6 = 'Uso de substr()';
echo $dato6 . "<br>";
echo substr($dato6, 0, 9);

echo "<br><br>-----------------------------<br><br>";
?>