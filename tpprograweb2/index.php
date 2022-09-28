<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <?php require('layouts/_css.php') ?>
  <title>Food store</title>
</head>

<body>
  <header>
    <?php require('layouts/_headercito.php') ?>
    <?php require('layouts/_nav.php') ?>
  </header>
  <main>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <?php echo  '<img src="./layouts/images/hamb-banner.jpg" class="d-block w-100" alt="...">' ?>
          <div class="carousel-caption d-none d-md-block">
            <h5>Las mejores hamburguesas</h5>
            <p>Hechas en los locales todos los días</p>
          </div>
        </div>
        <div class="carousel-item">
          <?php echo  '<img src="./layouts/images/fries-banner.jpg" class="d-block w-100" alt="...">' ?>
          <div class="carousel-caption d-none d-md-block">
            <h5>Cortadas a manos</h5>
            <p>Las papas fritas más crocantes</p>
          </div>
        </div>
        <div class="carousel-item">
          <?php echo  '<img src="./layouts/images/beer-banner.jpg" class="d-block w-100" alt="...">' ?>
          <div class="carousel-caption d-none d-md-block">
            <h5>Cerveza tirada</h5>
            <p>Más de 15 canillas con las mejores cervezas artesanales</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div>
      <h1>SOMOS UNA HAMBURGUESERIA</h1>
      <h4>Al igual que con nuestra hamburguesa, nos tomamos el tiempo necesario en diseñar y desarrollar cada rincón de nuestro local. Por eso en Burgermanía vas a encontrar el mejor servicio y diseño para cubrir todas tus necesidades.
        </h6>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card">
          <img src="https://picsum.photos/50" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="https://picsum.photos/50" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="https://picsum.photos/50" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
    </div>
    <div>
      <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores voluptates rerum animi? Animi nemo iste rerum. Commodi cumque sapiente nostrum minus inventore at expedita odit ex, quae necessitatibus tenetur doloremque!locale_filter_matches
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam maiores nobis, voluptatem dignissimos in accusantium necessitatibus blanditiis sed repudiandae accusamus voluptatum possimus? Nobis temporibus nostrum iure officia, ab laborum adipisci.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe explicabo illo vero illum natus quis non excepturi adipisci voluptatibus eveniet, dicta provident voluptas perspiciatis quae eligendi incidunt, officiis eum labore!
      </h6>
    </div>

  </main>
  <?php require('layouts/_footer.php') ?>
</body>

</html>