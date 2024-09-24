<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demande chéquier</title>

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
                  <img src="../img/bank3.webp" class=" text-center img-fluid " style="border-top-left-radius: 1rem; border-bottom-left-radius: 1rem;"/>
                  <!--end of image-->
                </div>
                <div class="col-md-7 d-flex align-items-center">
                  <div class="card-body py-5 px-4 p-md-5">

                  <form  method="post" id="fcheq">
                  <h2 class="font-weight-bold text-center mb-2 text-danger">
                         Demande chéquier
                    </h2>
                        <div class="form-group">
                            <select name="numcompte" id="numcompte" class="form-control">
                                <option value="0">choisissez votre numéro de compte</option>
                                <?php
                                    $username="root";
                                    $password="";
                                    $database=new PDO("mysql:host=localhost;dbname=banque;",$username,$password); 
                                    $affiche1=$database->prepare("SELECT * FROM compte ");
                                    $affiche1->execute();
                                    while($row=$affiche1->fetchObject()){
                                        echo" <option value=''>".$row->numcompte."</option>";
                                    }
                                ?>
                                   
                            </select>
                        
                            <small class="mx-5 px-4"></small>
                        </div>

                        <label for="nbrcheq" class="form-label text-capitalize mt-3 text-danger">
                            type de chéquier
                        </label>
                        <div class="form-check mb-3">
                            <label>
                                <input type="radio" name="chequier" id="barré" checked value="barre">barré
                                <input type="radio" name="chequier" id=" non barré" value="non barre">non barré
                            </label>
                        </div>
                        <label for="nbrcheq" class="form-label text-capitalize text-danger">
                            nombre de chéques
                        </label>
                        <div class="form-check mb-3">
                            
                            <label>
                                <input type="radio" name="nbrcheq" id="25" value="25"checked>25
                                <input type="radio" name="nbrcheq" id="50"value="50">50
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="nbrchequier" class="form-label text-capitalize text-danger" >
                                nombre de chéquier
                            </label>
                            <input type="number" name="nbrchequier" id="nbrchequier"class="form-control mb-2" min="1" max="4" value="1">
                            <small class="mx-5 px-5"></small>
                        </div>
                        <!------------------------php-------------------->
                        <?php
                            $username="root";
                            $password="";
                            $database=new PDO("mysql:host=localhost;dbname=banque;",$username,$password);
                            if(isset($_POST['valider'])){
                                $numcompte=$_POST["numcompte"]; 
                                $chequier=$_POST["chequier"];
                                $nbrcheq=$_POST["nbrcheq"];
                                $nbrchequier=$_POST["nbrchequier"];             
                                $affiche1=$database->prepare("SELECT idc FROM compte WHERE numcompte='$numcompte'");
                                $affiche1->execute();
                                $row=$affiche1->fetchObject();
                                
                                $insertion=$database->prepare("INSERT INTO chequier VALUES('',:chequier,:nbrcheq,:nbrchequier,'')");
                                //bindParam is for security
                                $insertion->bindParam("chequier",$chequier);
                                $insertion->bindParam("nbrcheq",$nbrcheq);
                                $insertion->bindParam("nbrchequier",$nbrchequier);
                                if($insertion->execute()){
                                        echo'<div class="alert alert-success font-weight-bold text-center
                                    role="alert">
                                    Demande de chéquier faite avec succés </div>';
                            
                                    }

                            }

                        ?>
                        <div class="form-group mt-4 text-center">
                            <button type="submit" class="btn btn-danger" name="valider">valider</button>
                            <button type="reset" class="btn btn-danger">annuler</button>
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
  <!-- bootstrap for js -->
  <script  type="text/javascript" src="../js/mdb.min.js"></script>
  <!--file for js-->
  <!--script src="../js/chequier.js"></!--script-->

  </body>
  </html>