<!doctype html>
<html lang="en">
  <head>
    <title>Checkin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">


    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  </head>
  <body>
    
    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="http://localhost/Proyecto/">Check<span>in</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
    </header>

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('<?php echo base_url();?>assets/img/slider-1.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-5 text-center col-sm-12 element-animate">
           
            <div class="form-wrap overlap element-animate">
              <h2 class="h2">Identificate</h2>
              <h2> <?php echo $mensaje;?> </h2>
              <form action="<?php echo base_url();?>Login/ingresar" method="POST">
                
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Tu correo" name="txtUsuario">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Tu contraseña" name="txtContra">
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-block py-3" value="Entrar">
                </div>

              </form>
            </div>

            </div>
          </div>
        </div>
      </div>
    </section>
