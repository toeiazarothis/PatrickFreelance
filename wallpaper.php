<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site de l'entreprise Azarothis Technologie à Troyes">
    <meta name="author" content="ToeiAzarothis">
    <link rel="author" href="humans.txt"/>
    <link rel="shortcut icon" href="img/ .png"/>
    <!-- Balise OpenGraph -->
    <meta property="og:title" content="Azarothis Technologie a votre ecoute"/>
    <meta property="og:type" content="website">
    <meta property="og:description" content="Portfolio de l'entreprise Azarothis Technologie'.">
    <meta property="op:markup_version" content="v0.1">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:url" content="http://patrick.hol.es">
    <meta property="og:image" content="http://patrick.hol.es/img/header/header-bg.jpg">
    <title>La creation</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">
  </head>
  <body id="page-top" class="index">

    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll"> <button type="button" class="navbar-toggle"
            data-toggle="collapse" data-target="#navbar-collapse-1"> <span class="sr-only">Toggle
              navigation</span> <i class="fa fa-bars"> </i></button> <a class="navbar-brand page-scroll"
            href="#page-top">Azarothis</a> </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="hidden"> </li>
            <li><a href="index.php" class="text-left"> <span class="fa fa-home"></span> Accueil</a></li>
            <li><a href="creation.php" class="text-left"><span class="fa fa-paint-brush"></span> Creation</a></li>
            <li><a href="http://patrick.hol.es/cv" class="text-left" target="_blank"><span class="fa fa-trophy"></span> CV</a></li>
            <li><a href="contact.php" class="text-left"><span class="fa fa-envelope"></span> Contact</a></li>
            <li><a href="#page-top" class="page-scroll text-left"><span class="fa fa-picture-o"></span> Fond D'Écran</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!--  -->

    <header class="bg bg-darkest-gray">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Bonjour!</div>
          <div class="intro-heading">Cette page est encore en creation.</div>
          <a href="/." class="page-scroll btn btn-xl">Retour Accueil</a>
        </div>
      </div>
    </header>


    <section id="portfolio" class="bg-light-gray">
      <div class="container">
        <!-- <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Mes differentes creations</h2>
                <h3 class="section-subheading text-muted">Pour des clients ou pour m'entrainer,<br>j'ai eu la possibilité de créer différents contenues.</h3>
            </div>
        </div> -->

        <div class="row">
          <div class="col-md-4 col-sm-4 portfolio-item">
            <a href="#Wallpaper1" class="portfolio-link" data-toggle="modal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-picture-o fa-3x"></i>
                </div>
              </div>
              <img src="img/portfolio/LOISIR/CadreBugDroid.png" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Android</h4>
              <p class="text-muted"></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 portfolio-item">
            <a href="#Wallpaper2" class="portfolio-link" data-toggle="modal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-picture-o fa-3x"></i>
                </div>
              </div>
              <img src="img/portfolio/LOISIR/CadrePortalCubeCompagnon.png" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Le Cadeaux de Glados</h4>
              <p class="text-muted"></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 portfolio-item">
            <a href="#Wallpaper3" class="portfolio-link" data-toggle="modal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-picture-o fa-3x"></i>
                </div>
              </div>
              <img src="img/portfolio/LOISIR/CadreBouleDeCristalDBZ.png" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Les 7 Dragon Ball</h4>
              <p class="text-muted"></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FIN 3 -->
    <?php include("wallpaperModal.php") ?>
    <!-- Footer -->
    <?php include("footer.php");?>
    <!-- Fin footer -->
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
  </body>
</html>
