<?php

session_start();

$_SESSION['username'] = "Zuluaga";
$_SESSION['password'] = "zuluag4321";


echo "nombre de usuario: " . $_SESSION['username'];
echo "<br> ";
echo "contraseña: " . $_SESSION['password'];
echo "<br> ";
?>