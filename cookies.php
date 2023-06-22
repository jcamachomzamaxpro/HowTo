<?php

// Se crean las cookies
setcookie("CookieEjemplo1", "Buenas noches");
setcookie("CookieEjemplo2", "Estoy aprendiendo PHP", time() + 300);
setcookie("CookieEjemplo3", "Cookie con fecha", strtotime('2023-12-31 23:59:59'));


// Se llaman a las cookies
echo "Mi primera cookie es: " . $_COOKIE["CookieEjemplo1"];
echo "<br><br>";

echo "Mi segunda cookie es: " . $_COOKIE["CookieEjemplo2"];
echo "<br><br>";

echo "Mi tercera cookie es: " . $_COOKIE["CookieEjemplo3"];
echo "<br><br>";

?>