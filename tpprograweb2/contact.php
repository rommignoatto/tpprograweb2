<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
    <?php require('layouts/_css_form.php') ?>
    <?php require('layouts/_css.php') ?>
  </head>
  <body>

    <header>
    <?php require('layouts/_headercito.php') ?> 
    <?php require('layouts/_nav.php') ?>
   </header> 
    <main>
      <h2>Contactanos</h2>
      <div class="contenedor-form">
      <form class="form">
        <input class="cajas" type="text" placeholder="Nombre y Apellido" />
        <br />
        <input class="cajas"  type="text" placeholder="Email" required />
        <br />
        <input class="cajas" type="number" placeholder="Telefono" required />
        <br />
        <select name="" id="" required>
          <option selected>DNI</option>
          <option>LC</option>
          <option>LE</option>
          <option>CI</option>
          <option>Pasaporte</option>
        </select>
        <br />
        <label for="" style="color: white"> <input type="radio" name="sexo" />Masculino </label>
        <label for="" style="color: white; margin-left: 30px;">
          <input type="radio" name="sexo" checked />Femenino
        </label>
        <br />
        <input style="color: white;" type="checkbox" /><h7 style="color: white; margin-left: 5px;">Deseo recibir mas informacion de los productos
          por mail</h7>
        <br />
        <textarea
          rows="3"
          cols="40"
          placeholder="Dejanos tu consulta"
          class="cajas"
        ></textarea>
        <br />
        <input type="submit" class="btn" value="ENVIAR">
      </form>
    </main>
  </div>
    <footer>
    <?php require('layouts/_footer.php') ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>
