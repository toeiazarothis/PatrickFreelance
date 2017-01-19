<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <?php include("model/function.php") ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site de l'auto ecole TSR à Troyes">
    <meta name="author" content="ToeiAzarothis">
    <link rel="author" href="humans.txt"/>
    <link rel="shortcut icon" href="img/volant.png"/>
    <!-- Balise OpenGraph -->
    <meta property="og:title" content="TSR votre auto-ecole Troyenne"/>
    <meta property="og:type" content="website">
    <meta property="og:description" content="Administration de l'auto ecole TSR.
    Un code sera demander.">
    <meta property="op:markup_version" content="v0.1">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:url" content="patrick.hol.es/TSR">
    <meta property="og:image" content="http://mikomi.hol.es/img/opengraph.jpg">
    <title>La creation</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">
    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">
  </head>
  <body id="page-top" class="index">
    
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll"> <button type="button" class="navbar-toggle"
            data-toggle="collapse" data-target="#navbar-collapse-1"> <span class="sr-only">Toggle
              navigation</span>Menu</button> <a class="navbar-brand page-scroll"
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
          <div class="intro-heading">
            <p>Bienvenue sur mon site </p>
            <a href="#reseauxsociaux" class="page-scroll btn btn-xl">Mes reseaux sociaux</a>
          </div>
        </div>
      </div>
    </header>
    <!-- FIN message d'accueil -->
    <!-- Liste des reseaux sociaux -->
    <section id="reseauxsociaux" class="bg bg-light-gray">
      <div class="container text-center">

        <div class="row">
          <div class="col-md-3">
            <a href="#"><i class="fa fa-facebook fa-5x"></i></a>
          </div>
          <div class="col-md-3">
            <a href="#"><i class="fa fa-twitter fa-5x"></i></a>
          </div>
          <div class="col-md-3">
            <a href="#"><i class="fa fa-skype fa-5x"></i></a>
          </div>
          <div class="col-md-3">
            <a href="mailto:@"><i class="fa fa-envelope fa-5x"></i></a>
          </div>
        </div>
        <br><br><br>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <a href="#formulaire" class="page-scroll btn btn-xl">Me laissez un message</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin de la liste des reseaux sociaux -->
    <!-- Formulaire de contact -->
    <!-- Contact Section -->
    <section id="formulaire">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 text-center">
            <!-- informations client -->
            <h3>Coordonnées :</h3>
            <div class="alert alert-info" role="alert">
              <p><span class="fa fa-info"></span> Merci de bien vouloir remplir soigneusement ce formulaire afin d'ameliorer notre futur contact.</p>
            </div>
            <form role="form" method="POST" action="traitement.php"> <input value="2417"
                name="id_session" type="hidden"> <input value="1" name="type" type="hidden">
              <input value="1" name="form_inscription" type="hidden">
              <!-- block identite -->
              <label for="civilite">Civilité <span style="color:#f00;">*</span>:</label>
              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group"> <label class="radio-inline"> <input value="Homme" name="sexe" checked="checked" type="radio"> Monsieur </label> <label class="radio-inline"> <input value="Femme" name="sexe" type="radio"> Madame </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="nom">Nom <span style="color:#f00;">*</span> :</label>
                    <input name="nom" id="nom" class="form-control" value="" required="" type="text">
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="prenom">Prénom <span style="color:#f00;">*</span>:</label>
                    <input name="prenom" id="prenom" class="form-control" value="" required="" type="text">
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group"> <label for="tel">Telephone <span style="color:#f00;">*</span>
                      :</label> <input name="tel" id="tel" class="form-control"
                      value="" required="" type="text"> </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="mail">Adresse mail <span style="color:#f00;">*</span>:</label>
                    <input name="mail" id="mail" class="form-control" value="" required="" type="text">
                  </div>
                </div>
              </div>
              <div class="col-md-10 col-md-offset-1 text-center">
                <div class="form-group"> <label for="message">Message <span style="color:#f00;">*</span>: </label> <textarea name="message" id="message" class="form-control" value="" required="" type="textarea"></textarea>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                <input class="btn btn-danger"  name="reset" value="Effacer" type="reset">
                <input class="btn btn-success" name="submit" value="Ajouter" type="submit">
                <!-- champs requis -->
                <p><span style="color:#f00;">*</span> Champs obligatoires.</p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- Fin du formulaire de contact -->
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
