<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nouveaumotdepasse</title>

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
                  <img src="../img/psw.jpg" class=" text-center img-fluid " style="border-top-left-radius: 1rem; border-bottom-left-radius: 1rem;"/>
                  <!--end of image-->
                </div>
                <div class="col-md-7 d-flex align-items-center">
                  <div class="card-body py-5 px-4 p-md-5">
                  <form  method="post" id="fnewpsw">
                  <h3 class="fw-bold mb-4 text-danger ">Changer votre mot de passe</h3>
                <div class="input-group mt-4">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span> 
                    <input type="password"  name="newpsw"id="newpsw" class="form-control  mb-3" placeholder="entrer votre nouveau mot de passe">
                    <small></small>
                </div>

                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span> 
                    <input type="password"  name="confnewpsw"id="confnewpsw" class="form-control  mb-3" placeholder="confirmer votre nouveau mot de passe">
                    <small></small>
                </div>


 <!---------------------------php---------------------------->

            <?php
            $username="root";
            $password="";
            $database=new PDO("mysql:host=localhost;dbname=banque;",$username,$password);
            if(isset($_POST['valider'])){
                $email=$_GET["email"]; 
                $newpsw=$_POST["newpsw"]; 
                $changer=$database->prepare("UPDATE utilisateur set mdp=:newpsw WHERE email=:email ");
                //bindParam is for security
                $changer->bindParam("email",$email);
                $changer->bindParam("newpsw",$newpsw);

                if($changer->execute()){
                    echo'<div class="alert alert-success font-weight-bold text-center
                    role="alert">
                Mot de passe changé avec succés</div>';
                header("location:authentification.php");
                    }
                else{
                    echo'<div class="alert alert-danger font-weight-bold text-center
                    role="alert">
                Erreur lors de la  modification du mot de passe</div>';

                }
                
            }
            ?>
                      <button type="submit"  name="valider"class="btn btn-danger" >Confirmer</button>
                      <button type="reset" class="btn btn-danger">annuler</button>
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
  <script src="../js/nouveaumotdepasse.js"></script>

  </body>
  </html>