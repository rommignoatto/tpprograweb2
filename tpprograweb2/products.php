<?php

$lista_menu = array(
	array('codigo' => 1, 'nombre' => 'Pizza con jamón y huevo', 'categoria' => 'Pizzas', 'precio' => 2000, 'descuento' => 0, 'descripcion' => 'carne,cheddar,panceta,huevo'),
	array('codigo' => 2, 'nombre' => 'Pizza napolitana', 'categoria' => 'Pizzas', 'precio' => 2500, 'descuento' => 0, 'descripcion' => 'carne,cheddar,panceta,huevo'),
	array('codigo' => 3, 'nombre' => 'Pizza caprese', 'categoria' => 'Pizzas', 'precio' => 2700, 'descuento' => 500, 'descripcion' => 'carne,cheddar,panceta,huevo'),
	array('codigo' => 4, 'nombre' => 'Ensalada caesar', 'categoria' => 'Ensaladas', 'precio' => 800, 'descuento' => 0, 'descripcion' => 'carne,cheddar,panceta,huevo'),
	array('codigo' => 5, 'nombre' => 'Ensalada rusa', 'categoria' => 'Ensaladas', 'precio' => 500, 'descuento' => 0, 'descripcion' => 'carne,cheddar,panceta,huevo'),
	array('codigo' => 6, 'nombre' => 'Hamburguesa simple', 'categoria' => 'Hamburguesas', 'precio' => 900, 'descuento' => 0, 'descripcion' => 'carne,cheddar,panceta,huevo'),
	array('codigo' => 7, 'nombre' => 'Hamburguesa completa', 'categoria' => 'Hamburguesas', 'precio' => 1700, 'descuento' => 400, 'descripcion' => 'carne,cheddar,panceta,huevo'),
	array('codigo' => 8, 'nombre' => 'Coca cola', 'categoria' => 'Bebidas', 'precio' => 300, 'descuento' => 0, 'descripcion' => 'carne,cheddar,panceta,huevo'),
	array('codigo' => 9, 'nombre' => 'Fanta', 'categoria' => 'Bebidas', 'precio' => 300, 'descuento' => 20, 'descripcion' => 'carne,cheddar,panceta,huevo'),
	array('codigo' => 10, 'nombre' => 'Agua mineral', 'categoria' => 'Bebidas', 'precio' => 150, 'descuento' => 0, 'descripcion' => 'carne,cheddar,panceta,huevo'),
	array('codigo' => 11, 'nombre' => 'Helado', 'categoria' => 'Postres', 'precio' => 550, 'descuento' => 50, 'descripcion' => 'carne,cheddar,panceta,huevo'),
	array('codigo' => 12, 'nombre' => 'Flan casero', 'categoria' => 'Postres', 'precio' => 400, 'descuento' => 0, 'descripcion' => 'carne,cheddar,panceta,huevo'),
);

?>

<html lang="en"
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Productos</title>
    <?php require('layouts/_css.php') ?>
</head>
<body>
<header>
<?php require('layouts/_headercito.php') ?> 
<?php require('layouts/_nav.php') ?>
</header>
<main>
<div class="row row-cols-1 row-cols-md-3 g-4">
<?php foreach ($lista_menu as $lista) : ?>
<div class="col">
    <div class="card" style="width:300px">
      <img src= "https://picsum.photos/15" class="card-img-top" alt="<?php echo $lista['categoria'] ?>">
      <div class="card-body">
        <h5 class="card-title"><?php echo $lista['nombre'] ?></h5>
        <p><?php echo $lista['descripcion']?></p>
        <strong><p class="card-text"><?php echo "$". $lista['precio']?></p></strong>
      </div>
    </div>
</div>
<?php endforeach ?>
</div>
</main>
<footer>
<?php require('layouts/_footer.php') ?>

</footer>




</body>
</html>




