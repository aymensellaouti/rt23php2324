<?php

$name = "aymen";
$message = "Hellp $name";

$stats = count_chars($message, 1);
//unset($message);
//var_dump($_SERVER);
?>
<!DOCTYPE html>
<html <?php ?> lang="en">

<head <?php ?>>
    <?php ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="<?php ?>">Document</title>
</head>

<body>
    <h1>
        <?= $message; ?>
    </h1>
    <table border="2">
        <tr>
            <th>Nombre</th>
            <th>Caractères</th>
        </tr>
        <?php foreach ($stats as $caracter => $occ) : ?>
            <tr>
                <td><?= chr($caracter) ?></td>
                <td><?= $occ ?></td>
            </tr>
        <?php endforeach  ?>
    </table>
</body>

</html>