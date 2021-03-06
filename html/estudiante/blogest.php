<?php
    session_start();
    
    if(!$_SESSION['estudiante']){
      header("Location: ../login.html");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
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
                <a class="btn btn-outline-danger" href="../../database/sign_out.php" role="button">Cerrar sesi??n</a>
            </div>
        </div>
    </nav>

    <div class="container shadow-lg my-4 py-3">

        <div class="row my-5">
            <div class="col-lg-1 col-md-0 col-sm-0">
            </div>

            <div class="col-lg-10">
                <div class="card" style="max-width: 100%;">
                    <div class="row g-0">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <img src="../../img/blog-04.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <div class="card-body">
                                <h5 class="card-title">??No m??s! ??C??mo combatir el maltrato en j??venes y ni??os? </h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                <button type="button" class="btn btn-outline-primary">Leer m??s</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-1 col-md-0 col-sm-0">
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-1 col-md-0 col-sm-0">
            </div>

            <div class="col-lg-10">
                <div class="card" style="max-width: 100%;">
                    <div class="row g-0">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <img src="../../img/blog-02.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <div class="card-body">
                                <h5 class="card-title">Maltrato psicol??gico, tan real como el maltrato f??sico</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                <button type="button" class="btn btn-outline-primary">Leer m??s</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-1 col-md-0 col-sm-0">
            </div>
        </div>

    </div>
    <!--container-->

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
            ?? 2022 Copyright:
            <a class="text-dark" href="#">ITSA</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="../../js/JS property/usuariologin.js"></script>
</body>

</html>