<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello PHP</h1>
    <?php
        $today = date("d m Y");
    ?>
    <p>
        Today-<?= $today ?>
    </p>
</body>
</html>