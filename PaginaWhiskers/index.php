

<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 1) {
        echo '<script> alert("Usuario Creado exitosamente") </script>';
    }
    if ($_GET['status'] == 2) {
        echo '<script>alert("El usuario ya existe");</script>';
    }
    if ($_GET['status'] == 3) {
        echo '<script>alert("Acceso denegado");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Whiskers</title>
  <link rel="icon" type="image/x-icon" href="./assets/img/logofavico.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  
</head>

<body>
  <header>


    <nav>
      <div class="head-menu">
        <div class="buttons" class="d-grid gap-2 d-md-block">
          <button type="button" class="btn" id="btn1" data-bs-toggle="modal" data-bs-target="#register_modal">
            Registrarse</button>
          <button type="button" class="btn" id="btn2" data-bs-toggle="modal" data-bs-target="#login_modal">
            Ingresar</button>
        </div>
      </div>
      <ul class="menu" id="menu">
        <li><a href="#menu">Inicio</a></li>
        <li> <a href="#servicios">Servicios</a></li>
        <li> <a href="#demo">Sobre nosotros</a></li>
        <li> <a href="#equipo">Nuestro equipo</a></li>
        <li> <a href="#btn2">Blog</a></li>
        <li> <a href="#contacto">Contáctanos</a></li>
      </ul>


      </div>

    </nav>
  </header>


  <!-- Modal  registro-->
  <div class="modal fade" id="register_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="register_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="register_modalLabel">Registro de usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="back/register.php" method="POST" id="form-register">
            <div class="form-row">
              <div class="form-group col-md-8">
                <label for="inputnombres">Nombres</label>
                <input type="text" class="form-control" name="names" id="inputnombres" placeholder="Digite sus nombres"
                  required>
              </div>
              <div class="form-group col-md-8">
                <label for="inputapellidos">Apellidos</label>
                <input type="text" class="form-control" name="lastname" id="inputapellidos"
                  placeholder="Digite sus Apellidos" required>
              </div>
              <div class="form-group col-md-8">
                <label for="inputfecha_nacimiento">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="birth" id="inputfecha_nacimiento" required>
              </div>
              <div class="form-group col-md-8">
                <label for="inputnumero_id">Número de Identificación (usuario)</label>
                <input type="text" class="form-control" name="id_person" id="inputnumero_id" required>
              </div>


              <div class="form-group col-md-8 field email-field">
                <div class="input-field">
                  <label for="inputemail">Correo Electrónico</label>
                  <input type="email" class="email form-control" name="email" id="inputemail" required>
                </div>
                <span class="error email-error">
                  <i class="bx bx-error-circle error-icon"></i>
                  <p class="error-text">Please enter a valid email</p>
                </span>
              </div>

              <div class="form-group col-md-8 field create-password">
                <div class="input-field">
                  <label for="inputcontra">Contraseña</label>
                  <input type="password" class="password form-control" name="pass" id="inputcontra" required>
                  <i class="bx bx-hide password-hide"></i>
                </div>

                <span class="error password-error">
                  <i class="bx bx-error-circle error-icon"></i>
                  <p class="error-text">
                    Por favor, digite al menos 8 caracteres(numeros,simbolos,mayusculas y minusculas)
                  </p>
                </span>
              </div>


              <div class="form-group col-md-8 field confirm-password">
                <div class="input-field">
                  <label for="inputcontra">Confirmar Contraseña</label>
                  <input type="password" class="confirpassword form-control " name="confirpass" id="inputcontra" required />
                  <i class="bx bx-hide password-hide"></i>
                </div>
                <span class="error confirm-error">
                  <i class="bx bx-error-circle error-icon"></i>
                  <p class="error-text">Contraseña no coincide</p>
                </span>
              </div>

            </div>

            <div class="buttons-form">
              <button type="reset" class="btn btn-outline-primary">Limpiar</button>
              <button type="submit" name="register"   class="btn btn-outline-success">Registrarse</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>


  <!-- Modal  inicio de sesion-->
  <div class="modal fade" id="login_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="login_modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="login_modallLabel">Iniciar Sesión</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="back/login.php" method="POST">
            <div class="form-row">
              <div class="form-group col-md-8">
                <label for="inputnumero_id">Número de Identificación (usuario)</label>
                <input type="text" class="form-control" name="id_person" id="inputnumero_id" required>
              </div>
              <div class="form-group col-md-8">
                <label for="inputcontra">Contraseña</label>
                <input type="password" class="form-control" name="pass" id="inputcontra" required>
              </div>
            </div>
            <div class="buttons-form">
              <button name="login_btn" type="submit" class="btn btn-outline-success">Ingresa</button>

            </div>

          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./assets/img/banner/bannerGato.jpg" alt="Imagen Banner" class="d-block w-100">
        <div class="carousel-caption top-0 start-0 bottom-0">
          <h5 class="text ">Tu mascota merece lo mejor, ven y conoce el portafolio que
            Whiskers tiene para tu amigo peludo
          </h5>
          <button class="btn btn-carousel " id="btn3" data-bs-toggle="modal" data-bs-target="#login_modal"> saber
            más</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./assets/img/banner/ImagenBanner.jpg" alt="Imagen Banner" class="d-block w-100">
        <div class="carousel-caption top-0 start-0 bottom-0">
          <h5 class=" text ">En Whiskers encontrarás fácilmente el servicio que necesitas, ya sea por tipo de servicio,
            ubicación o raza de mascota.
          </h5>
          <button class=" btn btn-carousel" id="btn4" data-bs-toggle="modal" data-bs-target="#login_modal"> saber
            más</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./assets/img/banner/BannerGato2.jpg" alt="Imagen Banner" class="d-block w-100">
        <div class="carousel-caption top-0 start-0 bottom-0 ">
          <h5 class="text "> Los usuarios deben registrarse y crear una cuenta. Una vez que hayan creado una cuenta,
            pueden comenzar a buscar servicios.
          </h5>
          <button class="btn btn-carousel" id="btn5" data-bs-toggle="modal" data-bs-target="#login_modal"> saber
            más</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./assets/img/banner/BannerDog.jpg" alt="Imagen Banner" class="d-block w-100">
        <div class="carousel-caption top-0 start-50 bottom-0 end-0">
          <h5 class="text "> Te esperamos, ven y forma parte de esta espectacular familia.
          </h5>
          <button class="btn btn-carousel" id="btn6" data-bs-toggle="modal" data-bs-target="#login_modal"> saber
            más</button>
        </div>
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <section class="services" id="servicios">

    <h2 class="title">Nuestros servicios</h2>
    <div class="cards-services">
      <div class="card" style="width: 25%">
        <img src="./assets/img/servicios/vetDomicilio.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Veterinario a Domicilio</h5>
          <p class="card-text">Reduce el estres de tu mascota con nuestro servicio a domicilio, tu mascota en las
            mejores
            manos</p>
          <button type="button" class="btn btn-card" id="btn7" data-bs-toggle="modal"
            data-bs-target="#login_modal">Programa una visita</button>

        </div>
      </div>

      <div class="card" style="width: 25%;">
        <img src="./assets/img/servicios/grooming.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Grooming</h5>
          <p class="card-text">Servicios profesionales personalizados, para satisfacer las necesidades de tu mascota</p>
          <button type="button" class="btn btn-card" id="btn8" data-bs-toggle="modal"
            data-bs-target="#login_modal">Reserva tu cita</button>

        </div>
      </div>

      <div class="card" style="width: 25%;">
        <img src="./assets/img/servicios/paseo.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Paseadores</h5>
          <p class="card-text">Encuentra paseadores de confianza cerca de tu casa, tu mascota estara muy bien
            acompañado.</p>
          <button type="button" class="btn btn-card" id="btn9" data-bs-toggle="modal"
            data-bs-target="#login_modal">Agenda tu paseo</button>
        </div>
      </div>
    </div>

    </div>

  </section>

  <section class="team" id="equipo">
    <h2 class="title">Nuestro equipo</h2>

    <div class="people">
      <div class="person">
        <div class="photo person-vet"></div>
        <span class="person-name">Andreina</span>
        <span class="person-funtion">veterinaria</span>
      </div>
      <div class="person">
        <div class="photo person-grommer"></div>
        <span class="person-name">Roberta</span>
        <span class="person-funtion">Grommer profesional</span>
      </div>
      <div class="person">
        <div class=" photo person-vet-t"></div>
        <span class="person-name">Thiago</span>
        <span class="person-funtion">Veterinario</span>
      </div>
    </div>
  </section>

  <footer class="footer-pag">
    <div class="footer-head">
      <div class="cuadro1"></div>
      <div class="cuadro1"></div>
    </div>

    <div class="footer-sections">
      <div class="footer-section footer-menu">
        <ul class="menu">
          <li><a href="#menu">Inicio </a></li>
          <li> <a href="#servicios">Servicios</a></li>
          <li> <a href="#demo">Sobre nosotros</a></li>
          <li> <a href="#equipo">Nuestro equipo</a></li>
          <li> <a href="#btn2">Blog</a></li>
          <li> <a href="#contacto">Contáctanos</a></li>
        </ul>
      </div>
      <div class=" footer-section footer-contact" id="contacto">
        <h4>Síguenos en redes</h4>
        <div class="logos">
          <a href="https://www.facebook.com/?locale=es_LA" target="_blank"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram"></i></a>
          <a href="https://twitter.com/?lang=es" target="_blank"><i class="bi bi-twitter-x"></i></a>
          <a href="https://www.youtube.com/" target="_blank"><i class="bi bi-youtube"></i></a>
        </div>
      </div>

      <div class="footer-section">
        <iframe class="footer-map"
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1988.544608466384!2d-74.09889499265938!3d4.577997059587731!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f993fc81aa259%3A0x7bbe076ee289bb0a!2sClinica%20Veterinaria%20Animal%20Welfare!5e0!3m2!1ses!2sco!4v1698717150478!5m2!1ses!2sco"
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
    <div class="copyright">
      <div class="cuadro2"></div>
      <span>© Copyright 2023</span>
    </div>

  </footer>

<!-- <script src="js/validacionForm.js"></script> -->


</body>

</html>