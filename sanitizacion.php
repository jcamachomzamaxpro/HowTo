<?php

$script = '<script>alert("Soy un script malicioso");</script>';
echo $script;


$ejemploSanatized = filter_var($script, FILTER_SANITIZE_STRING);
echo "<br><br>";

echo $ejemploSanatized;

?>