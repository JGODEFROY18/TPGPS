<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Le GPS - GPS Localisation</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic%7CRaleway:400,300,700"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

  <!-- Fixed navbar -->
  <div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand smothscroll" href="#home"><b>GPS</b></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="accueil.php">Home</a></li>
          <li><a href="modification.php">Compte</a></li>
          <li><a href="Admin.php">Admin</a></li>
          <li><a href="fonctions/deconnexion.php">Deconnexion</a></li>
        </ul>
      </div>
    </div>
  </div>

  <section id="home">
    <div id="headerwrap">
      <div class="container">
        <div class="row centered">
          <div class="col-lg-12">
            <h1>Bienvenue sur le site de <b>GPS</b></h1>
            <h3>Le site Web qui permet aux usagers de
              visionner les informations en provenance de la station M56i.</h3>
            <br>
          </div>

          <div class="col-lg-2">
            <h5>Lowrence ! </h5>
            <p>La plupart des ??crans Lowrance sont dot??s d'??crans SolarMax haute r??solution non-IPS avec une clart?? et
              des couleurs exceptionnelles.</p>
            <center>
              <img src="img/m56.PNG" alt="">
            </center>
          </div>
          <div class="col-lg-8">
            <img class="img-responsive" src="img/app-bg.png" alt="">
          </div>
          <div class="col-lg-2">
            <br>
            <img class="hidden-xs hidden-sm hidden-md" src="img/arrow2.png" alt="">
            <h5>Positionement GPS</h5>
            <p>Nous allons traiter le site Web qui permet aux usagers de visionner les informations en provenance de la
              station M56i. Nous nous attacherons ?? ne traiter que les donn??es de Positionement GPS.</p>
          </div>
        </div>
      </div>
      <!--/ .container -->
    </div>
    <!--/ #headerwrap -->
  </section>


  <section id="desc">
    <!-- INTRO WRAP -->
    <div id="intro">
      <div class="container">
        <div class="row centered">
          <h1>Designed</h1>
          <br>
          <br>
          <div class="col-lg-4">
            <img src="img/intro01.png" alt="">
            <h3>Responsable Technique</h3>
            <p>Sous la bienveillance du CP, le RT doit ??tudier et pr??parer la mise en place d???une solution PHP Orient??
              objet. Il doit mettre en place l???architecture du projet ( serveur / BDD / param??trage ) </p>
          </div>
          <div class="col-lg-4">
            <img src="img/intro02.png" alt="">
            <h3>Chef d'??quipe</h3>
            <p>Suivi du projet avec une r??union r??guli??rement en compagnie des autres CP et de l???Enseignant. R??daction
              du cahier des charges avec les recommandations techniques du RT</p>
          </div>
          <div class="col-lg-4">
            <img src="img/intro03.png" alt="">
            <h3>Developeur</h3>
            <p>D??velopper le projet en se basant uniquement sur le cahier des charges en cours de validations par le CP.
              Il commencera donc ?? d??velopper le site avecses connaissances puis avec l???aide du RT.</p>
          </div>
        </div>
        <br>
        <hr>
      </div>
      <!--/ .container -->
    </div>

    <section id="contact">
      <div id="footerwrap">
        <div class="container">
          <div class="col-lg-5">
            <p>
            <h3>Address</h3>
            Association ou organisation<br>
            146 Bd de Saint-Quentin<br>
            Amiens<br>
            2022<br>
            France
            </p>
          </div>
        </div>
      </div>
    </section>
    <div id="copyrights">
      <div class="credits">
        Created with Visual studio by Jules Godefroy
      </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/php-mail-form/validate.js"></script>
    <script src="lib/easing/easing.min.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
  </section>
</body>

</html>