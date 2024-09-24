<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
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

           
    
  </style>

</head>
<body >
<section class="vh-100" style=" background-image: linear-gradient(135deg, #FFAA85 10%, #B3315F 100%);">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-1 pb-2 pb-md-0 mb-md-5 text-danger">Inscription</h3>
            
            <form method="post" id="finscri">

              <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-user-alt"></i>
                            </span>
                            <input type="text"  id="pren" name="pren" class="form-control mb-3" placeholder="prénom">
                            <small ></small>

                    </div>
                  

                </div>
                <div class="col-md-6 mb-3">

                        <div class="input-group ">
                            <span class="input-group-text">
                                <i class="fas fa-user-alt"></i>
                            </span>
                            <input type="text"  id="nom" name="nom" class="form-control mb-3" placeholder="nom">
                            <small></small>
                        </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-3 d-flex align-items-center">
                    
                        <div class="form-group ">
                        <h6 class="mb-2 pb-1 text-danger">Date de naissance: </h6>
                            <input type="date"  id="datenais" name="datenais" class="form-control  mb-3"required >
                        </div>

                </div>
                <div class="col-md-6 mb-3">

                  <h6 class="mb-2 pb-1 text-danger">Genre: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="h"name="genre" value="h" checked/>
                    <label class="form-check-label" for="f">Femme</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="f" name="genre" value="f"/>
                    <label class="form-check-label" for="h">Homme</label>
                  </div>

                  

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-3 pb-2">

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="far fa-envelope"></i>
                            </span> 
                            <input type="email"  id="email"name="email" class="form-control mb-3" placeholder="utilisateur@gmail.com">
                            <small></small>
                        </div>

                </div>
                <div class="col-md-6 mb-3 pb-2">

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="far fa-id-card"></i>
                            </span> 
                            <input type="text"  id="cin" name="cin" class="form-control mb-3" placeholder="votre carte d'identité">
                            <small></small>
                        </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-3 pb-2">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-phone"></i>
                            </span> 
                            <input type="text"  id="tel" name="tel"class="form-control mb-3" placeholder="votre numero de télephone">
                            <small></small>
                        </div>
                </div>
                <div class="col-md-6 mb-3 pb-2">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-map-marker-alt"></i>
                            </span> 
                            <textarea  id="adr" name="adr"rows="2"class="form-control mb-3" placeholder="adresse"></textarea>
                            <small></small>
                        </div>
                    
                </div>

              </div>

              <div class="row">
                <div class="col-md-6 mb-3 pb-2">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span> 
                            <input type="password"  id="psw" name="psw" class="form-control mb-3" placeholder="votre mot de passe">
                            <small></small>
                        </div>
                </div>
                <div class="col-md-6 mb-3 pb-2">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span> 
                            <input type="password"  id="confpsw" name="confpsw" class="form-control mb-3" placeholder=" confirmer votre mot de passe" >
                            <small></small>
                        </div>
                    
                </div>

              </div>
                                                                         <!-------------------------php---------------------------->
                    <?php
                    $username="root";
                    $password="";
                    $database=new PDO("mysql:host=localhost;dbname=banque;",$username,$password);
                    if(isset($_POST['valider'])){
                        $email=$_POST["email"]; 
                        $affiche=$database->prepare("SELECT * FROM utilisateur WHERE email=:email");
                        //bindParam is for security
                        $affiche->bindParam("email",$email);
                        $affiche->execute();
                        if($affiche->rowCount()>0){
                            echo'<div class="alert alert-danger font-weight-bold text-center
                            role="alert">
                            l email est déja utilisé </div>';
                            }
                        else{
                            $nom=$_POST["nom"];
                            $pren=$_POST["pren"];
                            //changer format date 
                            $datenais=date('Y-m-d',strtotime($_POST["datenais"]));
                            $email=$_POST["email"]; 
                            $cin=$_POST["cin"];
                            $tel=$_POST["tel"];
                            $genre=$_POST["genre"];
                            $adr=$_POST["adr"];
                            $psw=$_POST["psw"];
                            //cryptage mot de passe
                            $codesecurite=md5($psw);
    
                            $insertion=$database->prepare("INSERT INTO utilisateur VALUES('',:nom,:pren,:datenais,:email,:cin,:tel,:genre,:adr,:psw,'',:codesecurite)");
                            //bindParam is for security
                            $insertion->bindParam("nom",$nom);
                            $insertion->bindParam("pren",$pren);
                            $insertion->bindParam("datenais",$datenais);
                            $insertion->bindParam("email",$email);
                            $insertion->bindParam("cin",$cin);
                            $insertion->bindParam("tel",$tel);
                            $insertion->bindParam("genre",$genre);
                            $insertion->bindParam("adr",$adr);
                            $insertion->bindParam("psw",$psw);
                            $insertion->bindParam("codesecurite",$codesecurite);
                            if($insertion->execute()){
                                echo'<div class="alert alert-success font-weight-bold text-center
                            role="alert">
                            Inscription faite avec succés </div>';
                            //envoyer une adresse email avec code securite
                            
                            /*require_once "mail.php";
                            $mail->setFrom("raniaabassi33@gmail.com","Banque");
                            $mail->addAddress($email);
                            $mail->Subject ="code de confirmation de votre compte";
                            //envoyer le code dans le lien
                            $mail->Body ="<h1>merci pour votre inscription</h1>";
                            
                            $mail->send();*/
                            }
    
                        }
                    
                    }

                        ?>

              <div class="mt-1 pt-1 mb-2">
                    <button type="submit" name="valider"class="btn btn-danger ">valider</button>
                    <button type="reset" class="btn btn-danger " >annuler</button>
              </div>
              <span>avez-vous déja un compte? <a href="authentification.php"class="text-danger">se connecter ici</a></span>


            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
   



<!-- bootstrap for js -->
<script  type="text/javascript" src="../js/mdb.min.js"></script>
<!--file for js-->
<script src="../js/inscription.js"></script>
</body>
</html>