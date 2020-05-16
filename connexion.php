<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CVlogin - Shadrack Bodje</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">

</head>
<?php
  // on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['entrez'])) {
  if ((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['password']) && !empty($_POST['password']))) {

      $base = mysql_connect ('localhost', 'root', '');
      mysql_select_db ('esv', $base);

      // on teste si une entrée de la base contient ce couple login / pass
      $sql = 'SELECT count(*) FROM compte WHERE login="'.mysql_escape_string($_POST['email']).'" AND mot_de_passe="'.mysql_escape_string($_POST['password']).'"';
      $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
      $data = mysql_fetch_array($req);

      mysql_free_result($req);
      mysql_close();

      // si on obtient une réponse, alors l'utilisateur est un membre
      if ($data[0] == 1) {
          session_start();
          $_SESSION['email'] = $_POST['email'];
          header('Location: liste.php');
          exit();
      }
      // si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
      elseif ($data[0] == 0) {
          $erreur = 'Compte non reconnu. <br/> <a href="index.php">Retour au formulaire</a>';
      }
      // sinon, alors la, il y a un gros problème
      else {
          $erreur = 'Problème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
      }
  }
  else {
    $erreur = 'Au moins un des champs est vide.';
  }
}
   
  
?>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Shadrack Emmanuel Bodje</span>
      <span class="d-none d-lg-block">
      <a href="index.php"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile1.jpg" alt="photo de profile de Shadrack Emmanuel Bodje"></a>
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">_______________________</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">_______________________</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">_______________________</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">_______________________</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#interests">_______________________</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#awards">_______________________</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0">Shadrack Emmanuel
          <span class="text-primary">Bodje</span>
        </h1>
        <div class="subheading mb-5">05 rue Carnot 78130 Les Mureaux
          <a href="mailto:shadrack.bodje99@gmail.com">shadrack.bodje99@gmail.com</a>
        </div>
        <p class="lead mb-5">Je suis en Etudiant Bachelor 1 Informatique à Ynov Paris ingesup</p>
        <div class="social-icons">
          <a href="https://www.linkedin.com/in/shadrack-emmanuel-bodje-37a0b9183/">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="https://github.com/ShadrackBodje13">
            <i class="fab fa-github"></i>
          </a>
          <a href="https://twitter.com/ShadrackBodje">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://www.facebook.com/shadisnickel.bodje">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
      
    </section>

    
  <form action="" method="post">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="name@email.com" name="email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Mot de Passe</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Mot de Passe" name="password">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
  </form>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>

</body>
<!-- ---------------------------------------------------------------------------------------------------------------->
