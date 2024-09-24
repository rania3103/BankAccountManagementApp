<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Détails chéquier</title>
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

<!--tableau-->
<div class="container">
  <div class="row">
    <div class="col lg-6 m-auto mt-5">
        <table class="table align-middle mb-0 bg-white">
          <thead class="bg-light">
            <tr>
              <th style="color:#D8A08B;">Numéro de compte </th>
              <th style="color:#D8A08B;">Solde</th>
              <th style="color:#D8A08B;">Type de compte</th>
              <th style="color:#D8A08B;">Nom</th>
              <th style="color:#D8A08B;">Prénom</th>
              <th style="color:#D8A08B;">Cin</th>
              <th style="color:#D8A08B;">Numéro de téléphone</th>
              <th style="color:#D8A08B;">Email</th>
              <th style="color:#D8A08B;">Adresse</th>
            </tr>
          </thead>
          <tbody>
            <!----------------------php----------------->
          <?php
              $username="root";
              $password="";
              $database=new PDO("mysql:host=localhost;dbname=banque;",$username,$password); 
              $affiche=$database->prepare("SELECT * FROM compte AS c,chequier AS ch,utilisateur AS u
              WHERE c.idc=ch.idc AND u.idu=c.idu");
              $affiche->execute();
              while($row=$affiche->fetchObject()){
                echo"<tr>
                  <td>
                  <p class='fw-bold mb-1 badge badge-primary rounded-pill d-inline'>".$row->numcompte."</p>
                  </td>
                  <td>
                    <p class='fw-bold mb-1 badge badge-primary rounded-pill d-inline'>".$row->solde."</p>
                  </td>
                  <td>
                    <p class='fw-bold mb-1 badge badge-primary rounded-pill d-inline'>".$row->type."</p>
                  </td>
                  <td>
                    <p class='fw-bold mb-1 badge badge-primary rounded-pill d-inline'>".$row->nom."</p>
                  </td>
                  <td>
                    <p class='fw-bold mb-1 badge badge-primary rounded-pill d-inline'>".$row->prenom."</p>
                  </td>
                  <td>
                    <p class='fw-bold mb-1 badge badge-primary rounded-pill d-inline'>".$row->cin."</p>
                  </td>
                  <td>
                    <p class='fw-bold mb-1 badge badge-primary rounded-pill d-inline'>".$row->tel."</p>
                  </td>
                  <td>
                    <p class='fw-bold mb-1 badge badge-primary rounded-pill d-inline'>".$row->email."</p>
                  </td>
                  <td>
                    <p class='fw-bold mb-1 badge badge-primary rounded-pill d-inline'>".$row->adr."</p>
                  </td>
              </tr>";

              }
            
            ?>
          <!---------------end of php-------------->
            
            
          </tbody>
        </table>
        <!--end of tableau-->
    </div>
  </div>
</div>
        <!--last part--> 
        <hr class="my-5" />
  

    
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

 
</body>
</html>