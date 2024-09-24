<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>authentification</title>

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
                  <img src="../img/consul.jpg" class=" text-center img-fluid " style="border-top-left-radius: 1rem; border-bottom-left-radius: 1rem;"/>
                  <!--end of image-->
                </div>
                <div class="col-md-7 d-flex align-items-center">
                  <div class="card-body py-5 px-4 p-md-5">

                    <form id="flogin" method="post" >
                      <h1 class="fw-bold mb-4 text-danger animate__animated  animate__flash ">Bienvenue</h1>
                      <p class="mb-4" >Pour se connecter à votre compte veuillez enter votre adresse email et votre mot de passe.</p>
											<!--email-->
                      	<div class="input-group mt-3 mb-2 ">
                        <span class="input-group-text">
                          <i class="far fa-envelope"></i>
                        </span> 
                        <input type="email"  name="email" id="email" class="form-control mb-3" placeholder="utilisateur@example.com">
                        <small></small>
                      </div>
                      <!--psw-->
                      	<div class="input-group">
                        <span class="input-group-text">
                          <i class="fas fa-lock"></i>
                        </span> 
                        <input type="password"  name="psw" id="psw" class="form-control mb-3" placeholder="votre mot de passe" >
                        <small></small>
                      </div>
                      
            <!---------------------------------php-------------------------->
              <?php
                $username="root";
                $password="";
                $database=new PDO("mysql:host=localhost;dbname=banque;",$username,$password);
                if(isset($_POST['seconnecter'])){
                    $email=$_POST["email"]; 
                    $mdp=$_POST["psw"]; 
                    $affiche=$database->prepare("SELECT * FROM utilisateur WHERE email=:email and mdp=:mdp");
                    //bindParam is for security
                    $affiche->bindParam("email",$email);
                    $affiche->bindParam("mdp",$mdp);
                    $affiche->execute();
                    if($affiche->rowCount()==0){
                        echo'<div class="alert alert-danger font-weight-bold text-center
                        role="alert">
                        compte inexistant! </div>';
                        }
                    else{
                       header("location:http://localhost/albarakaBanque/php/menu.php?email=$email");
                    }
                    
                }
              ?>
              
                     <div class="d-flex justify-content-end pt-1 mb-4">
                        <button class="btn btn-primary btn-rounded bg-danger" type="submit"  name="seconnecter" >Se connecter</button>
                      </div>
                      <hr>
                      <a class="link float-end text-danger mb-1" href="oubliermdp.php">Mot de passe oublié? Cliquer ici.</a>
                      <a class="link float-end text-danger" href="inscription.php">vous n'avez pas un compte? Inscrivez-vous ici.</a>
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
  <!-- bootstrap for js -->
  <script  type="text/javascript" src="../js/mdb.min.js"></script>
  <!--file for js-->
  <!--script src="../js/authentification.js"></!--script-->

  </body>
  </html>