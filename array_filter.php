<?php

$tienda = array(
    array("producto" => "Gaseosas", "stock" => 80, "precio" => 5000),
    array("producto" => "Arroz", "stock" => 200, "precio" => 3200),
    array("producto" => "Leche", "stock" => 160, "precio" => 4500),
    array("producto" => "Queso", "stock" => 60, "precio" => 20000)
);


$tiendaMenos5k = array_filter($tienda, function($producto) {
    return $producto['precio'] <= 5000;
});

echo "Filtra los productos que valen 5000 o menos <br><br>";
print_r($tiendaMenos5k);
?>