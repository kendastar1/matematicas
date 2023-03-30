<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="index.css">
  <meta charset="utf-8">
    <title>Universidad Simon bolivar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Cargando...</span>
        </div>
    </div>
    <div class="hola">
        <img src="img/tu.png" style="width:325px;">
        <a href="https://www.unisimon.edu.co/"><img src="./img/logouni.png" style="width: 550px; height: 75px;padding-left: 50px; padding-right: 50px;"></a>
        <div class="hola1">
            <div style="padding-right: 100px; padding-top: 5px;">visitanos en nuestras paginas:</div>
            <div class="hola100" style="padding-left:100px;">
                <a href="https://www.facebook.com/UnisimonCucuta/?locale=es_LA"><img src="./img/face.png" style="width: 25px;border-radius: 4px;"></a>
                <a href="https://mobile.twitter.com/unisimon/status/1166386447819202561"><img src="./img/twiter1.png" style="width: 25px;"></a>
                <a href="https://www.instagram.com/unisimon/?hl=es"><img src="./img/t.webp" style="width: 25px;"></a>
                <a href="https://www.youtube.com/c/universidadsimonbolivarcucuta"><img src="./img/youtube2.png" style="width: 25px; border-radius: 7px;"></a>
            </div>
        </div>

    </div>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="guardar_usuario.php" method="post">
                    <h2>Registrate.</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" id="email" required>
                        <label for="">Correo Electronico:</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="name" name="nombre" id="nombre" required>
                        <label for="">Nombre:</label>
                    </div>
                    <!--<div class="forget">
                        <label for=""><input type="checkbox">Remember Me  <a href="#">Forget Password</a></label>
                      
                    </div>-->
                    <button value="Registrar" style="border-radius: 20px;">Registrar</button>
                    <!--<div class="register">
                        <p>Don't have a account <a href="#">Register</a></p>
                    </div>-->
                </form>
            </div>
        </div>
    </section>
    <div >
        <div class="container-fluid bg-dark text-light footer pt-5  wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Programas extendidos en Cúcuta</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Av 3 No. 13-34 La Playa</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>Pregrado: +57 311-5220210</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>Posgrado: +57 317-511220560 y 318-22101460</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-3">Conecta con nosotros</h5>
                    <h5 class="text-white mb-3">Y haz parte de la comunidad #Unisimón</h5>
                  <!-- <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>

                    </div>-->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="https://www.unisimon.edu.co/cucuta/" target="_blank">Universidad Simón Bolívar. Todos los derechos reservados<a/> Departamento Sistemas de Información.
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->

                    </div>                 
                </div>
            </div>
        </div>
    </div>
   
     <!-- Footer Start -->  

    <!-- Back to Top -->


                        <!-- JavaScript Libraries -->
                        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                        <script src="lib/wow/wow.min.js"></script>
                        <script src="lib/easing/easing.min.js"></script>
                        <script src="lib/waypoints/waypoints.min.js"></script>
                        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

                        <!-- Template Javascript -->
                        <script src="js/main.js"></script>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>