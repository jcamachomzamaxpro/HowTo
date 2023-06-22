<?php

$url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$name = $_SERVER['SCRIPT_NAME'];
$port = $_SERVER['SERVER_PORT'];
$protocolo = $_SERVER['SERVER_PROTOCOL'];

echo $url;
echo "<br><br>-----------------------------<br><br>";

echo $name;
echo "<br><br>-----------------------------<br><br>";

echo $port;
echo "<br><br>-----------------------------<br><br>";

echo $protocolo;
echo "<br><br>-----------------------------<br><br>";

?>