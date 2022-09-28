<?php

$lista_menu = array(
  array('codigo' => 1, 'nombre' => 'Cheese Burger', 'numero' => '1', 'precio' => 750, 'descuento' => 0, 'descripcion' => '160 grs. de carne, lechuga, cheddar y tomate'),
  array('codigo' => 2, 'nombre' => 'Bacon Cheese Burger', 'numero' => '2', 'precio' => 850, 'descuento' => 0, 'descripcion' => '160 grs. de carne, panceta ahumada y cheddar'),
  array('codigo' => 3, 'nombre' => 'The Duchess', 'numero' => '3', 'precio' => 1100, 'descuento' => 500, 'descripcion' => '320 grs. de carne, doble panceta ahumada y doble cheddar'),
  array('codigo' => 4, 'nombre' => 'Master', 'numero' => '4', 'precio' => 1100, 'descuento' => 0, 'descripcion' => '320 grs. de carne, doble cheddar, pepino, cebolla crispy y salsa Master'),
  array('codigo' => 5, 'nombre' => 'Kid', 'numero' => '5', 'precio' => 1100, 'descuento' => 0, 'descripcion' => '320 grs. de carne, doble cheddar, alioli trufado y manetca soft'),
  array('codigo' => 6, 'nombre' => 'Lover', 'numero' => '6', 'precio' => 1100, 'descuento' => 0, 'descripcion' => '320 grs. de carne, doble cheddar, cebolla morada y salsa Baconnaise'),
  array('codigo' => 7, 'nombre' => 'The Duchess Facts', 'numero' => '7', 'precio' => 1100, 'descuento' => 400, 'descripcion' => '320 grs. de carne, doble cheddar, doble panceta ahumada, cebolla grillada'),
  array('codigo' => 8, 'nombre' => 'Jackie Chan - Sin TACC', 'numero' => '8', 'precio' => 1300, 'descuento' => 0, 'descripcion' => '320 grs. de carne, doble cheddar, Jack Daniels Pulled Pork y pan sin TACC'),
  array('codigo' => 9, 'nombre' => 'Eggsplotion', 'numero' => '9', 'precio' => 900, 'descuento' => 20, 'descripcion' => '160 grs. de carne, cheddar, panceta ahumada, huevo frito'),
  array('codigo' => 10, 'nombre' => 'Blue Burger', 'numero' => '10', 'precio' => 950, 'descuento' => 0, 'descripcion' => '160 grs. de carne, queso azul, cebolla caramelizada y panceta ahumada'),
  array('codigo' => 11, 'nombre' => 'Slash Burger', 'numero' => '11', 'precio' => 950, 'descuento' => 50, 'descripcion' => '160 grs. de carne, provoleta, panceta ahumada, aros de cebolla y barbacoa Jack Daniels'),
  array('codigo' => 12, 'nombre' => 'Veggie Burger', 'numero' => '12', 'precio' => 750, 'descuento' => 0, 'descripcion' => '140 grs. de garbanzos, lechuga, american cheddar y tomate'),
  array('codigo' => 12, 'nombre' => 'Deluxe Fries', 'numero' => '13', 'precio' => 750, 'descuento' => 0, 'descripcion' => 'Papas con Cheddar y bacon'),
  array('codigo' => 12, 'nombre' => 'Cheezy Fries', 'numero' => '14', 'precio' => 750, 'descuento' => 0, 'descripcion' => 'Papas con Cheddar'),
  array('codigo' => 12, 'nombre' => 'Onion Rings', 'numero' => '15', 'precio' => 750, 'descuento' => 0, 'descripcion' => 'Aros de cebolla'),
  array('codigo' => 12, 'nombre' => 'Muzzarella Sticks', 'numero' => '16', 'precio' => 750, 'descuento' => 0, 'descripcion' => 'Bastones de Muzzarella'),
  array('codigo' => 12, 'nombre' => 'Tramontana', 'numero' => '17', 'precio' => 750, 'descuento' => 0, 'descripcion' => 'Helado de crema americana, dulce de leche natural, pelotitas de cereal, bañado con chocolate'),
  array('codigo' => 12, 'nombre' => 'Oreo', 'numero' => '18', 'precio' => 750, 'descuento' => 0, 'descripcion' => 'Helado de crema americana, dulce de leche natural, trozos de oreo, bañado con chocolate blanco'),
  array('codigo' => 12, 'nombre' => 'Cervezas', 'numero' => '19', 'precio' => 750, 'descuento' => 0, 'descripcion' => 'Tirada de 475cc. Bohemian Pilsener, Amber Lager, IPA y Porter'),
  array('codigo' => 12, 'nombre' => 'Gaseosas', 'numero' => '20', 'precio' => 750, 'descuento' => 0, 'descripcion' => 'Coca Cola Regular, Coca Cola Light, Coca Cola Zero, Sprite Zero, Fanta Zero, Schweppes Pomelo'),
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
    <div class="row row-cols-1 row-cols-md-3 g-1">
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