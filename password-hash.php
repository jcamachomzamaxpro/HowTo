<?php

$pass = 'Teofilo';

echo $pass;

$hash = password_hash($pass, PASSWORD_DEFAULT);

echo "<br>";
echo $hash;

$ingresar = 'Teofilo';

if (password_verify($ingresar, $hash)) {
    echo "<br>";
    echo "Si eres ese";
} else {
    echo "<br>";
    echo "Mal. No sos ese";
}

?>


<!-- PRACTICA -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password HASH</title>
</head>
<body>
    <h1>Practicando</h1>
    <h4>La password es "Pessi10"</h4>
    <form action="" method="post">
        <input type="text" name="lol">
        <input type="submit" value="Entrar" name="entrarBtn">
    </form>
</body>
</html>

<?php

$contra = 'Pessi10';


if ($_POST['entrarBtn']) {
    $inputPass = $_POST['lol'];
    
    $hash2 = password_hash($contra, PASSWORD_DEFAULT);
    
    if (password_verify($inputPass, $hash2)) {
        echo "Si eres ese";
    } else {
        echo "Mal, no sos ese";
    }
};


?>