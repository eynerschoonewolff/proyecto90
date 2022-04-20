<?php
    session_start();
    
    if(!$_SESSION['estudiante']){
      header("Location: ../login.html");
    }else{
      include("../../database/con_db.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link rel="stylesheet" href="../../css/bootstrap.css">
  <script src="../../js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
  <div class="col-lg-12 text-center bg-light">
    <img src="../../img/cabezera.png" class="img-fluid w-25">
  </div>


  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5 px-5">
    <div class="container-fluid">
      <img src="../../img/logo_colegio.png" alt="" class="col-sm-2 col-lg-2 col-3 navbar-brand">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="inicioEstudiante.php">Inicio</a>
          <a class="nav-link" href="agendar.php">Agendar cita</a>
          <a class="nav-link" href="charlemosest.html">Charlemos</a>
          <a class="nav-link" href="blogest.php">Blog</a>
          <a class="nav-link" href="contactoest.php">Contacto</a>
        </div>
      </div>

      <div class="p-2 mt-3">
        <p class="fs-3">
          <?php echo $_SESSION['estudiante']['nombres']?>
        </p>
      </div>

      <div class="p-2 mt-2">
        <a class="btn btn-outline-danger" href="../../database/sign_out.php" role="button">Cerrar sesión</a>
      </div>
    </div>
  </nav>


  <div class="container shadow-lg">

    <div class="row">
      <div class="col-lg-3">
      </div>
      <div class="col-lg-6 d-grid gap-2 mx-auto">
        <p class="fs-1 fst-italic fw-light text-center mt-4">
          Bienvenido
          <?php echo $_SESSION['estudiante']['nombres']." ".$_SESSION['estudiante']['apellidos']?>
        </p>
        <img src="../../img/welcome.png" class="img-fluid d-grid gap-2 mx-auto" alt="..." style="width: 20rem;">
      </div>
      <div class="col-lg-3">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-lg-3">
      </div>
      <div class="col-lg-6 d-grid gap-2 mx-auto">
        <p class="fs-5 fst-italic fw-light text-center">
          Es un placer tenerte de vuelta
          <?php echo strtok($_SESSION['estudiante']['nombres'], " ");?>. Deseamos que tengas un lindo día y que la
          estadía en nuestro sitio web sea de
          tu agrado.
        </p>
      </div>
      <div class="col-lg-3">
      </div>
    </div>

    <div class="row mx-5">
      <p class="fs-3 text-center mt-2">Citas agendadas</p>
      <div class="col-lg-12 table-bordered table-responsive mb-4">
        <table class="table text-center" id="tablaContacto">
          <thead class="">
            <tr>
              <th scope="col">Psicólogo encargado</th>
              <th scope="col">Codigo</th>
              <th scope="col">Fecha</th>
              <th scope="col">Hora</th>
              <th scope="col">Estado</th>
            </tr>
          </thead>
          <tbody id="tablacontenidoContacto">
            <?php 
              $id_est = $_SESSION['estudiante']['identificacion'];

              $consulta = "SELECT ps.nombres, ps.apellidos, o.codigo, o.fecha, o.hora, o.estado from estudiante e, psicologo ps, orientacion o where o.id_estudiante = '$id_est'  and e.identificacion = '$id_est' and ps.identificacion = o.id_psicologo;";
              $resultado = mysqli_query($conex,$consulta);

              while($mostrar = mysqli_fetch_array($resultado)){
              ?>

            <tr>
              <td>
                <?php echo $mostrar['nombres']." ".$mostrar['apellidos'] ?>
              </td>
              <td>
                <?php echo $mostrar['codigo'] ?>
              </td>
              <td>
                <?php echo $mostrar['fecha'] ?>
              </td>
              <td>
                <?php echo $mostrar['hora'] ?>
              </td>
              <td>
                <?php echo $mostrar['estado'] ?>
              </td>
            </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>

  <footer class="text-center text-white bg-light mt-5">
    <!-- Grid container -->
    <div class="container pt-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
          data-mdb-ripple-color="dark"><i class="bi bi-facebook"></i></a>

        <!-- Twitter -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
          data-mdb-ripple-color="dark"><i class="bi bi-twitter"></i></a>

        <!-- Google -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
          data-mdb-ripple-color="dark"><i class="bi bi-google"></i></a>

        <!-- Instagram -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
          data-mdb-ripple-color="dark"><i class="bi bi-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
          data-mdb-ripple-color="dark"><i class="bi bi-linkedin"></i></a>
        <!-- Github -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
          data-mdb-ripple-color="dark"><i class="bi bi-github"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-dark p-3 bg-light">
      © 2022 Copyright:
      <a class="text-dark" href="#">ITSA</a>
    </div>
    <!-- Copyright -->
  </footer>
</body>

</html>