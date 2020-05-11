<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=$titulo ?>
   
    <?php foreach($contenido as $key) : ?>
    <producto>
            <total><?=$key['total'] ?></total>
            <despcripcion><?=$key['descripcion'] ?></descripcion>
        </producto>
    <?php endforeach ?>
   
</body>
</html>