<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>accueil</title>

  <!-- MDB icon -->
  <link rel="icon" href="../img/logo.jpg" type="image/x-icon" />

  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  />

  <!-- Google Fonts Roboto -->
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
  />
  <!-- bootstrap for css-->
  <link rel="stylesheet" href="../css/mdb.min.css" />

  <!--file for css-->
  <link rel="stylesheet" href="../css/style.css">
  <!--import jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!--animate.css-->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>

    <!--Main Navigation-->
    <header>
      <style>
        /* Carousel styling */
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
          height: 100vh;
        }

        .carousel-item:nth-child(1) {
          background-image: url('../img/az.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }
        .carousel-item:nth-child(2) {
          background-image: url('../img/f.webp');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }
        

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
          #introCarousel {
            margin-top: -58.59px;
          }
          #introCarousel,
          .carousel-inner,
          .carousel-item,
          .carousel-item.active {
            height: 50vh;
          }
        }

        .navbar .nav-link {
          color: #fff !important;
        }
      </style>

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
        <div class="container-fluid">
          <!-- Navbar brand -->
          <a class="navbar-brand nav-link" target="_blank" href="menu.php">
            <strong class="text-danger">ALBARAKA BANK</strong>
          </a>
          <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="#intro">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cartes.php" target="_blank">Nos cartes et financements</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="apropos.php" rel="nofollow"
                  target="_blank">A propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php" target="_blank">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sedeconnecter.php" >Se déconnecter</a>
              </li>
            </ul>

            <ul class="navbar-nav d-flex flex-row">
              <!-- Icons -->
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="#" rel="nofollow"
                  target="_blank">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="#" rel="nofollow" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->

      <!-- Carousel wrapper -->
      <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
          <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
        </ol>

        <!-- Inner -->
        <div class="carousel-inner">
          <!-- Single item -->
          <div class="carousel-item active">
            <div class="mask" >
            <div class="d-flex justify-content-center align-items-center h-100">
                
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <div class="mask" >
            <div class="d-flex justify-content-center align-items-center h-100">
                
              </div>
            </div>
          </div>

          
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only ">Previous</span>
        </a>
        <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Carousel wrapper -->
    </header>
    <!--Main Navigation-->

  <!--Main layout-->
  <main class="mt-5">
    <div class="container">
      <!--Section: Content-->
      <section>
        <div class="row">
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
              <img src="../img/presse.png" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-6 gx-5 mb-4">
            <h4 class="text-danger"><strong>Al baraka bank élue meilleure banque islamique en Tunisie</strong></h4>
            <p class="text-muted">
            Aprés avoir été classée meilleure institution financière en Tunisie pour l'année 2021 par le prestigieux magazine "Global Finance ",Al Baraka Bank vient d'etre élue meilleure banque islamique en Tunisie pour l'année 2021 par le magazine Islamic Finance News "IFN".
            Il est à rappeler qu'Al Baraka Bank est la première est la première banque opérant dans le domaine de la finance islamique en Tunisie et au Maghreb et qu'elle fait partie du groupe bancaire,leader mondial de la finance islamique,Al Baraka Bank Group"ABG".
            </p>
          </div>
        </div>
      </section>
      <!--Section: Content-->

      <hr class="my-5" />

      <!--Section: Content-->
      <section class="text-center">
        <h4 class="mb-5 text-danger"><strong>Nos services</strong></h4>

        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../img/virement.webp" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title text-danger">Virement</h5>
                <p class="card-text">
                Vous pouvez faire un virement
                </p>
                <a href="virement.php" class="btn btn-primary" target="blank"style="background-image: linear-gradient(135deg, #FFAA85 10%, #B3315F 100%);">Virement</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../img/ch.jpg" class="img-fluid" />
                <a href="#">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title text-danger">Demande chéquier</h5>
                <p class="card-text">
                Vous pouvez faire une demande chéquier
                </p>
                <a href="chequier.php" class="btn btn-primary"  target="blank"style="background-image: linear-gradient(135deg, #FFAA85 10%, #B3315F 100%);">Demande chéquier</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../img/cons.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
             
              <div class="card-body">
                <h5 class="card-title text-danger">Consultation</h5>
                <p class="card-text">
                   Consulter vos demandes chéquiers et virements
                </p>
                <?php $email=$_GET["email"];
                echo "<a href='consultercheq.php?email=$email' class='btn btn-primary' target='blank'style='background-image: linear-gradient(135deg, #FFAA85 10%, #B3315F 100%);'>Consulter</a>";
                ?>
                </div>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Content-->

      <hr class="my-5" />

    <div class="text-center py-4 align-items-center">
      <p>suivez nos pages</p>
      <a href="#" class="btn btn-primary m-1" role="button"
        rel="nofollow" target="_blank" style="background-image: linear-gradient(135deg, #FFAA85 10%, #B3315F 100%);">
        <i class="fab fa-youtube" ></i>
      </a>
      <a href="#" class="btn btn-primary m-1" role="button" rel="nofollow"
        target="_blank"style="background-image: linear-gradient(135deg, #FFAA85 10%, #B3315F 100%);">
        <i class="fab fa-facebook-f" ></i>
      </a>
    </div>
<footer>
    <!-- Copyright -->
    <div class="text-center p-3" style="background-image: linear-gradient(135deg, #FFAA85 10%, #B3315F 100%);">
      © 2023 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">AlBarakaBank Tunisie</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->

    <!-- bootstrap for js -->
    <script  type="text/javascript" src="../js/mdb.min.js"></script>
</body>
</html>