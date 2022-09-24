<?php

$lista_menu = array(
  array('codigo' => 1, 'nombre' => 'Pizza con jamón y huevo', 'numero' => '1', 'precio' => 2000, 'descuento' => 0, 'descripcion' => 'carne,cheddar,panceta,huevo'),
  array('codigo' => 2, 'nombre' => 'Pizza napolitana', 'numero' => '2', 'precio' => 2500, 'descuento' => 0, 'descripcion' => 'carne,cheddar,panceta,huevo'),
  array('codigo' => 3, 'nombre' => 'Pizza caprese', 'numero' => '3', 'precio' => 2700, 'descuento' => 500, 'descripcion' => 'carne,cheddar,panceta,huevo'),
  array('codigo' => 4, 'nombre' => 'Ensalada caesar', 'numero' => '4', 'precio' => 800, 'descuento' => 0, 'descripcion' => 'carne,cheddar,panceta,huevo'),
  array('codigo' => 5, 'nombre' => 'Ensalada rusa', 'numero' => '5', 'precio' => 500, 'descuento' => 0, 'descripcion' => 'carne,cheddar,panceta,huevo'),
  array('codigo' => 6, 'nombre' => 'Hamburguesa simple', 'numero' => '6', 'precio' => 900, 'descuento' => 0, 'descripcion' => 'carne,cheddar,panceta,huevo'),
  array('codigo' => 7, 'nombre' => 'Hamburguesa completa', 'numero' => '7', 'precio' => 1700, 'descuento' => 400, 'descripcion' => 'carne,cheddar,panceta,huevo'),
  array('codigo' => 8, 'nombre' => 'Coca cola', 'numero' => '8', 'precio' => 300, 'descuento' => 0, 'descripcion' => 'carne,cheddar,panceta,huevo'),
  array('codigo' => 9, 'nombre' => 'Fanta', 'numero' => '9', 'precio' => 300, 'descuento' => 20, 'descripcion' => 'carne,cheddar,panceta,huevo'),
  array('codigo' => 10, 'nombre' => 'Agua mineral', 'numero' => '10', 'precio' => 150, 'descuento' => 0, 'descripcion' => 'carne,cheddar,panceta,huevo'),
  array('codigo' => 11, 'nombre' => 'Helado', 'numero' => '11', 'precio' => 550, 'descuento' => 50, 'descripcion' => 'carne,cheddar,panceta,huevo'),
  array('codigo' => 12, 'nombre' => 'Flan casero', 'numero' => '12', 'precio' => 400, 'descuento' => 0, 'descripcion' => 'carne,cheddar,panceta,huevo'),
);

?>

<html lang="en" <head>
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
            <img src="./layouts/images/<?php echo $lista['numero'] ?>.jpg" class=" card-img-top" alt="<?php echo $lista['numero'] ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $lista['nombre'] ?></h5>
              <p><?php echo $lista['descripcion'] ?></p>
              <strong>
                <p class="card-text"><?php echo "$" . $lista['precio'] ?></p>
              </strong>
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