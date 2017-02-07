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
    <meta property="og:description" content="Page d'accueil de l'entreprise Azarothis Technologie'.">
    <meta property="op:markup_version" content="v0.1">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:url" content="http://patrick.hol.es">
    <meta property="og:image" content="http://patrick.hol.es/img/header/header-bg.jpg">
    <title>La creation</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/Chart.min.js"></script>

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">
    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
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
            <li><a href="index.php" class="text-center">Accueil</a></li>
            <li><a href="creation.php" class="text-center">Creation</a></li>
            <li><a href="http://patrick.hol.es/cv" class="text-center" target="_blank">CV</a></li>
            <li><a href="contact.php" class="text-center">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!--  -->
    <!-- Message d'accueil -->
    <header class="bg bg-darkest-gray">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Bonjour!</div>
          <div class="intro-heading"> Bienvenue sur mon site<br>Bonne navigation</div>
          <a href="#biographie" class="page-scroll btn btn-xl">Me decouvrire</a>
        </div>
      </div>
    </header>
    <!-- FIN message d'accueil -->
    <!--  -->
    <section id="biographie">
      <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Me Decouvrire</h2>
                <h3 class="section-subheading text-muted">Decouvrez moi a travers cette description.</h3>
            </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h3>Rapide presentation</h3>
            <p>Je suis un jeune developpeur de 22 ans vivant actuellement entre Troyes et Auxerre.<p>
            <p>Diplomé d'un bac pro electrotechnique je me suis ensuite reconvertit dans le domaine de l'informatique dans le quel je suis auto didacte depuis de nombreuse année.</p>
            <p>Cette reconversion ma permis d'obtenir un diplome de niveau 4 en tant que developpeur web et je me suis specialisé en tant que front-end.</p>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6 text-center">
            <h3>Mon train de vie</h3>
            <canvas id="traindevie" style="width: 305px;"></canvas>
          </div>
          <div class="col-md-6 text-center">
            <h3>Mon experience</h3>
            <canvas id="experience" style="width: 305px;"></canvas>
          </div>
        </div>
      </div>
    </section>

    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Quelque une de mes realisations.<br>Pour en voir plus c'est <a href="creation.php">ici</a>.</h3>
                </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-4 portfolio-item">
                  <a href="#Modal1" class="portfolio-link" data-toggle="modal">
                      <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                              <i class="fa fa-plus fa-3x"></i>
                          </div>
                      </div>
                      <img src="img/portfolio/TSR/tsr.jpg" class="img-responsive" alt="">
                  </a>
                  <div class="portfolio-caption">
                      <h4>Hackerz Online</h4>
                      <p class="text-muted">Website</p>
                  </div>
              </div>
              <div class="col-md-4 col-sm-4 portfolio-item">
                  <a href="#Modal2" class="portfolio-link" data-toggle="modal">
                      <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                              <i class="fa fa-plus fa-3x"></i>
                          </div>
                      </div>
                      <img src="img/portfolio/TSR/tsr.jpg" class="img-responsive" alt="">
                  </a>
                  <div class="portfolio-caption">
                      <h4>Auto ecole TSR</h4>
                      <p class="text-muted">Website</p>
                  </div>
              </div>
              <div class="col-md-4 col-sm-4 portfolio-item">
                  <a href="#Modal3" class="portfolio-link" data-toggle="modal">
                      <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                              <i class="fa fa-plus fa-3x"></i>
                          </div>
                      </div>
                      <img src="img/portfolio/POGO3/pogo3.jpg" class="img-responsive" alt="">
                  </a>
                  <div class="portfolio-caption">
                      <h4>Pokemon Go Troyes</h4>
                      <p class="text-muted">Website</p>
                  </div>
              </div>
            </div>
        </div>
    </section>

    <!-- <section>
      <div class="container">
        <div class="row">
          <div class="col-- col--offset- text-center">

          </div>
        </div>
      </div>
    </section> -->
    <!--  -->
    <?php include('modal.php') ?>
    <?php include('footer.php') ?>
    <?php include('graphique/chartjs.php') ?>

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
