<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Mi tabla</title>
  </head>
  <body>
    <div>
    	
    </div>
    <h1>Representación tabular de la tabla productos</h1>
    <table class="table table-striped">
 	<thead>
 		<th>Id</th>
 		<th>Vendedor</th>
 		<th>Total</th>
 		<th>Descripción</th>
 		<th>IVA</th>
 		<th>Total con IVA</th>
 	</thead>
 	<tbody>
 		<?php foreach ($datosCompletos as $key): ?>
 			<tr>
 				<td><?=$key->Id  ?></td>
 				<td><?=$key->vendedor  ?></td>
 				<td><?=$key->total  ?></td>
 				<td><?=$key->descripcion  ?></td>
 				<td><?=$key->iva  ?></td>
 				<td><?=$key->iva + $key->total  ?></td>
 			</tr>
 		<?php endforeach ?>
 	</tbody>
 </table>


 <h1>Representación en JSON</h1>
 <?php 
print json_encode($datosCompletos);


 ?>

<h1>Script para crear  la tabla productos</h1>


<div class="alert alert-success" role="alert">
 create table productos 
</div>


<h1>Script para recuper la información de la tabla productos</h1>


<div class="alert alert-success" role="alert">
  select * from productos;
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>