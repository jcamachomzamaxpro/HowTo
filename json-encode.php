
<?php

$parque = array(
    'fundador' => 'Julian Camacho',
    'visitantesXsemana' => 50000,
    'empleados' => 20,
    'precioEntrada' => 20000,
    'rankingPais' => 9,
    'ubicacion' => 'Bucaramanga'
);

var_dump($parque);

echo "<br>";

$datosParqueJS = json_encode($parque);

var_dump($datosParqueJS);

?>