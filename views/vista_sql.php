<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=$titulo ?>
    <ul>
    <?php foreach($contenido as $key) : ?>
        <li><?=$key['total'] ?></li>
    <?php endforeach ?>
    </ul>

    <pre>
        <?php
        $sql = 
      'create table productos
      (
          Id int NOT NULL,
          total int,
          descripcion varchar(100),
          primary key (Id) 
      );

   
      INSERT INTO productos (Id, total, descripcion)  VALUES ';
      ?>
      <?php $i=1 ?>
      <?php foreach($contenido as $key) : ?>
        <?php $sql = $sql ."('". 
        $i."','".$key['total'].
       "','".$key['descripcion'] ."'),";
        ?>

    <?php $i++; endforeach ?>
    <?php
    echo FCPATH;
        if ( ! write_file('/Applications/XAMPP/xamppfiles/htdocs/aod/file.sql', $sql))
        {
                echo 'Unable to write the file';
        }
        else
        {
                echo 'File written!';
        }
    ?>
    
    </pre>
</body>
</html>