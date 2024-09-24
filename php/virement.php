<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Virement</title>

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
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <style>
     html,
    body,
    .intro {
    height: 100%;
    }

    @media (min-width: 550px) and (max-width: 750px) {
    html,
    body,
    .intro {
        height: 550px;
    }
    }

    @media (min-width: 800px) and (max-width: 850px) {
    html,
    body,
    .intro {
        height: 550px;
    }
    }

    a.link {
    font-size: .875rem;
    }
    a.link:hover, 
    a.link:active {
    color: ;
    }
    .img-fluid, .img-thumbnail {
    max-width: 100%;
    height: 100%;
    
}
i{
    color:#DC3545;
}
    
  </style>
</head>
  <body>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <strong class="text-danger">ALBARAKA BANK</strong></a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item active">
                <a class="nav-link" aria-current="page"href="menu.php">Accueil</a>
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
    </div>
  </div>
</nav>

  <section class="intro">
  <div class="bg-image h-100">
    <div class="mask d-flex align-items-center h-100" style=" background-image: linear-gradient(135deg, #FFAA85 10%, #B3315F 100%);">
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-12 col-lg-9 col-xl-8">
            <div class="card" style="border-radius: 1rem;">
              <div class="row g-0">
                <div class="col-md-5">
                  <!--image-->
                  <img src="../img/vir2.webp" class=" text-center img-fluid " style="border-top-left-radius: 1rem; border-bottom-left-radius: 1rem;"/>
                  <!--end of image-->
                </div>
                <div class="col-md-7 d-flex align-items-center">
                  <div class="card-body py-5 px-4 p-md-5">

                  <form id="fvir"  method="post" >
                  <h2 class="font-weight-bold text-center mb-2 text-danger">
                         virement
                    </h2>
                        <div class="form-group ">
                            <label for="compdeb" class="form-label text-capitalize text-danger">
                                compte débit
                            </label>
                            <input type="text"  name="compdeb"id="compdeb"class="form-control mb-2">
                            <small class="mx-5"></small>
                        </div>

                        <div class="form-group">
                            <label for="compcred" class="form-label text-capitalize mt-3 text-danger">
                                Compte crédit
                            </label>
                            <input type="text" name="compcred" id="compcred"class="form-control mb-2">
                            <small class="mx-5"></small>
                        </div>

                        <div class="form-group">
                            <label for="mont" class="form-label text-capitalize mt-3 text-danger" >
                                montant
                            </label>
                            <input type="number" name="mont" id="mont"class="form-control mb-2">
                            <small class="mx-5"></small>
                        </div>

                        <!--datalist-->
                        <div class="form-group">
                            <label for="devise" class="form-label text-capitalize mt-3 text-danger" >
                                devise
                            </label>
                            <input type="text" class="form-control" list="devise" name="devise">
                            <datalist id="devise" >
                                <option value="TND">
                                <option value="DZD">
                                <option value="EUR">
                                <option value="USD">
                                <option value="YEN">
                                <option value="GBP">
                                <option value="AUD">
                                <option value="CAD">
                                <option value="CHF">
                                <option value="CNH">
                                <option value="SEK">
                                <option value="NZD">

                            </datalist>
                        </div>

                        <!----------------------------------php--------------------------->
                        <?php
                        $username="root";
                        $password="";
                        $database=new PDO("mysql:host=localhost;dbname=banque;",$username,$password);
                        if(isset($_POST['valider'])){
                            $compdeb=$_POST["compdeb"]; 
                            $compcred=$_POST["compcred"];
                            $montant=$_POST["mont"];
                            $devise=$_POST["devise"]; 
                            $affiche1=$database->prepare("SELECT numcompte FROM compte  WHERE numcompte =:compdeb  ");
                            //bindParam is for security
                            $affiche1->bindParam("compdeb",$compdeb);
                            $affiche2=$database->prepare("SELECT numcompte FROM compte WHERE numcompte =:compcred  ");
                            $affiche2->bindParam("compcred",$compcred);
                            $affiche1->execute();
                            $affiche2->execute();
                            if($affiche1->rowCount()==0 || $affiche2->rowCount()==0){
                                echo'<div class="alert alert-danger font-weight-bold text-center
                                role="alert">
                                Les numéros de comptes sont inexistants! </div>';
                                }
                            else{
                                
                                $insertion=$database->prepare("INSERT INTO virement VALUES('',:compdeb,:compcred,:montant,:devise,'')");
                                //bindParam is for security
                                $insertion->bindParam("compdeb",$compdeb);
                                $insertion->bindParam("compcred",$compcred);
                                $insertion->bindParam("montant",$montant);
                                $insertion->bindParam("devise",$devise);
                                $insertion->execute();
                                $modif1=$database->prepare("UPDATE compte SET solde=solde-$montant WHERE numcompte='$compdeb'");
                                $modif1->execute();
                                $modif2=$database->prepare("UPDATE compte SET solde=solde+$montant WHERE numcompte='$compcred'");
                                $modif2->execute();
                                if($insertion && $modif1 && $modif2 ){
                                    echo'<div class="alert alert-success font-weight-bold text-center
                                role="alert">
                                Virement fait avec succés </div>';
                                }
                                else{
                                    echo'<div class="alert alert-danger font-weight-bold text-center
                                role="alert">
                                Erreur lors de virement </div>';

                                }

                            }

                        }
                            ?>



                        <div class="form-group mt-4 text-center">
                            <button type="submit" class="btn btn-danger"name="valider" >valider</button>
                            <button type="reset" class="btn  btn-danger">annuler</button>
                        </div>

                        </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
 <!--Footer-->    
 <footer>
        <!-- Copyright -->
        <div class="text-center p-3 mt-3" style="background-image: linear-gradient(135deg, #FFAA85 10%, #B3315F 100%);">
        © 2023 Copyright:
        <a class="text-dark" href="#">al baraka bank</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!--Footer--> 

  <!-- bootstrap for js -->
  <script  type="text/javascript" src="../js/mdb.min.js"></script>
  <!--file for js-->
  <!--script src="../js/virement.js"></!--script-->

  </body>
  </html>