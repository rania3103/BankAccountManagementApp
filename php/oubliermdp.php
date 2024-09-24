<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mot de passe oublié</title>

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
                  <img src="../img/mdp.webp" class=" text-center img-fluid " style="border-top-left-radius: 1rem; border-bottom-left-radius: 1rem;"/>
                  <!--end of image-->
                </div>
                <div class="col-md-7 d-flex align-items-center">
                  <div class="card-body py-5 px-4 p-md-5">
                  <form  method="post" id="foubli" >
                    <h3 class="fw-bold mb-4 text-danger ">Mot de passe oublié?</h3>


                        <div class="input-group mt-4">
                            <span class="input-group-text">
                                <i class="far fa-envelope"></i>
                            </span> 
                            <input type="email"  id="email" name="email"class="form-control mb-3" placeholder="entrer votre adresse email" >
                            <small></small>
                        </div>
      <!---------------------------php---------------------------->

              <?php
              $username="root";
              $password="";
              $database=new PDO("mysql:host=localhost;dbname=banque;",$username,$password);
              if(isset($_POST['valider'])){
                  $email=$_POST["email"]; 
                  $affiche=$database->prepare("SELECT email FROM utilisateur WHERE email=:email ");
                  //bindParam is for security
                  $affiche->bindParam("email",$email);
                  $affiche->execute();
                  if($affiche->rowCount()==0){
                      echo'<div class="alert alert-danger font-weight-bold text-center
                      role="alert">
                      email inexistant! </div>';
                      }
                  else{
                      /*require_once 'mail.php';
                      //send email
                      $mail->setFrom("raniaabassi33@gmail.com","Banque");
                      $mail->addAddress('$email');
                      $mail->Subject ="vérifier pour changer le mot de passe votre compte";
                      //envoyer le code dans le lien
                      echo $mail->Body = "<h1 >lien pour vérifier votre compte </h1> <br> <a href='http://localhost/albarakaBanque/php/nouveaumotdepasse.php?email=$email'>veuillez cliquer ici pour changer le mot de passe</a>";    
                      $mail->send(); 

                      */
                      
                      //the subject
                      $sub = "vérifier pour changer le mot de passe votre compte";
                      //the message
                      $msg = "<h1 >lien pour vérifier votre compte </h1> <br> <a href='http://localhost/albarakaBanque/php/nouveaumotdepasse.php?email=$email'>veuillez cliquer ici pour changer le mot de passe</a>";
                      //recipient email here
                      $rec = "raniaabassi33@gmail.com";
                      //send email
                      mail($rec,$sub,$msg);
  


                    }
                  
              }
              ?>
   
                      <button type="submit"  name="valider"class="btn btn-danger" >Lien pour changer le mot de passe</button>
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
  <!--script src="../js/oubliermdp.js"></!--script-->

  </body>
  </html>