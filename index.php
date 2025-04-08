<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/jpeg"
    href="https://res.cloudinary.com/dzfzqzdcu/image/upload/v1743554383/ari6vwivcy0ndoeqpmmw.jpg">
  <!-- Estilos -->
  <link rel="stylesheet" href="build/css/app.css?v=<?php echo time(); ?>">
  <!-- JS -->
  <script src="build/js/banner.js?v=<?php echo time(); ?>"></script>
  <!-- FUENTE MONTSERRAT -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <!-- CDN sin CORS para íconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <title>MC Aromas</title>
</head>

<body>

  <!--  NAVBAR  -->

  <nav class="navbar">
    <div class="nav-left">
      <i id="sidebar-icon" class="fas fa-bars"></i>
      <div class="search-container">
        <input type="text" placeholder="Buscar...">
        <button type="submit"><i class="fas fa-search"></i></button>
      </div>
    </div>

    <div class="nav-center">
      <img class="logo-central"
        src="https://res.cloudinary.com/dzfzqzdcu/image/upload/v1744059260/ea4zbrhdcpl4eu9mdgwz.png" alt="Logo">
    </div>

    <div class="nav-right">
      <img src="https://res.cloudinary.com/dzfzqzdcu/image/upload/v1744059294/y0illgpwo5zv2yhyhvxs.png" class="carrito"
        alt="Carrito">
    </div>
  </nav>


  <!--  BANNERS  -->

  <section class="banners">
    <div class="slider"></div>
    <div class="indicators"></div>
  </section>


  <!--  PRODUCTOS DESTACADOS  -->

  <section class="productos-destacados">
    <h2>Productos Destacados</h2>
    <div class="productos-destacados-container" id="productos-container">
      <!-- Acá se insertan los productos desde JS -->
    </div>
  </section>



  <!--  MARCAS  -->
  <section class="marcas">
    <div class="grid-mosaico">
      <div class="card saphirus">
        <div class="overlay">
          <a
            href="https://scontent.frcu1-1.fna.fbcdn.net/v/t39.30808-6/359813618_693823632757831_6437059828651980101_n.png?_nc_cat=104&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeG46YXkWgsooY7c49kqixS8jbFeV0sW08CNsV5XSxbTwM0JJWASTPKDodQpOX_y8h9YjGATMupxnqlxziMGfHA3&_nc_ohc=36Q7OrKv-iAQ7kNvwGAqOOI&_nc_oc=AdlHBTc0FPrgZ5jRHY1Ay2KaiRcLAKVrNHqDI1RqW-yTkNXLEhXWVf6QkMM3gEsrhl0TgsKslQIXvM9JKmjcAGrl&_nc_zt=23&_nc_ht=scontent.frcu1-1.fna&_nc_gid=WXaNKmwCDj_zZ1B9JR0oFA&oh=00_AfFNs37ACbPZaOIxnLRzgadWB8sqhddjmklwDnYFybWB4w&oe=67FB53C6">VER
            PRODUCTOS</a>
        </div>
      </div>

      <div class="card aromanza">
        <div class="overlay">
          <a href="#">VER PRODUCTOS</a>
        </div>
      </div>

      <div class="bloqueInferior">
        <div class="card sagrada">
          <div class="overlay">
            <a href="#">VER PRODUCTOS</a>
          </div>
        </div>
        <div class="card sandra">
          <div class="overlay">
            <a href="#">VER PRODUCTOS</a>
          </div>
        </div>
      </div>
    </div>
  </section>




</body>

</html>