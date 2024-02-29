<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="processForm.php" method="post" enctype="multipart/form-data">
        <input type="text" name="username">
        <input type="number" name="age">
        <input type="file" name="file">
        <input type="submit" value="envoyer">
    </form>
</body>

</html>