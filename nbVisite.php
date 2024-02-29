<?php
session_start();
if (isset($_SESSION['nbVisite'])) {
    $_SESSION['nbVisite'] = $_SESSION['nbVisite'] + 1;
    $message = "Merci pour votre fidélité c'est votre 
    {$_SESSION['nbVisite']} visite";
} else {
    $_SESSION['nbVisite'] = 1;
    $message = "Bienvenu dans notre site :D";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1><?= $message ?></h1>

<body>

</body>

</html>