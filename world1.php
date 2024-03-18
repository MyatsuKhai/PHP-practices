<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $theme ="light"?>
    <?php if ($theme =="dark") : ?>
        <div style="background:light; color: white; padding: 20px;height: 300px">
        <h1>Hello PHP</h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
    <?php else: ?>
        <div style="background:darkblue; color: white; padding: 20px;height: 300px">
        <h1>Hello PHP</h1>
        <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        </div>
        <?php endif ?>
</body>
</html>