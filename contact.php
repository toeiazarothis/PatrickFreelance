<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <?php include("model/function.php") ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site de l'entreprise Azarothis Technologie à Troyes">
    <meta name="author" content="ToeiAzarothis">
    <link rel="author" href="humans.txt"/>
    <link rel="shortcut icon" href="img/ .png"/>
    <!-- Balise OpenGraph -->
    <meta property="og:title" content="Azarothis Technologie a votre ecoute"/>
    <meta property="og:type" content="website">
    <meta property="og:description" content="Pour prendre contact avec l'entreprise Azarothis Technologie rien de mieux que cette page.">
    <meta property="op:markup_version" content="v0.1">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:url" content="http://patrick.hol.es/CV/contact.php">
    <meta property="og:image" content="http://patrick.hol.es/CV/img/header/header-bg.jpg">
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
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span> <i class="fa fa-bars"> </i></button>
            <a class="navbar-brand page-scroll" href="#page-top">Azarothis Technologie</a>
          </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="hidden"> </li>
            <li><a href="index.php" class="text-left"> <span class="fa fa-home"></span> Accueil</a></li>
            <li><a href="creation.php" class="text-left"><span class="fa fa-paint-brush"></span> Creation</a></li>
            <li><a href="http://patrick.hol.es/cv" class="text-left" target="_blank"><span class="fa fa-trophy"></span> CV</a></li>
            <li><a href="#page-top" class="text-left page-scroll"><span class="fa fa-envelope"></span> Contact</a></li>
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
          <div class="intro-heading">vous souhaitez me contacter ?</div>
            <a href="#contact" class="page-scroll btn btn-xl">Me contacter</a>
          </div>
        </div>
      </div>
    </header>
    <!-- FIN message d'accueil -->
    <!-- Liste des reseaux sociaux -->
    <section id="reseauxsociaux" class="bg bg-light-gray">
      <div class="container text-center">
        <h2 class="section-heading">Reseaux sociaux</h2>
        <h3 class="section-subheading text-muted">Je suis disponible sur different reseaux.<br>
          A vous de jouer maintenant.</h3>
        <div class="row">
          <div class="col-md-6 col-xs-6">
            <a  target="_blank" href="#" target="_blank"><i class="fa fa-facebook fa-5x"></i></a>
          </div>
          <div class="col-md-6 col-xs-6">
            <a  target="_blank" href="https://go.snapchat.com/add/azarothis"><i class="fa fa-snapchat-ghost fa-5x"></i></a>
          </div>
          <!-- <div class="col-md-4 col-xs-4">
            <a  target="_blank" href="#"><i class="fa fa-skype fa-5x"></i></a>
          </div> -->
        </div>
        <br><br><br>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <a href="#contact" class="page-scroll btn btn-xl">Un message ?</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin de la liste des reseaux sociaux -->
    <!-- Formulaire de contact -->
    <!-- Contact Section -->
    <section id="contact">
      <div class="container text-center">
        <h2 class="section-heading">Me contacter</h2>
        <h3 class="section-subheading text-muted">Il vous suffit de remplir le formulaire integralement.</h3>
        <div class="row">
          <div class="col-md-6 text-center">
            <form class="form-horizontal" role="form" method="post" action="traitement.php">
            	<div class="form-group">
            		<label for="name" class="col-sm-2 control-label"></label>
            		<div class="col-sm-10">
            			<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" value="" required="">
            		</div>
            	</div>
              <div class="form-group">
            		<label for="name" class="col-sm-2 control-label"></label>
            		<div class="col-sm-10">
            			<input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom" value="" required="">
            		</div>
            	</div>
              <div class="form-group">
            		<label for="name" class="col-sm-2 control-label"></label>
            		<div class="col-sm-10">
            			<input type="tel" class="form-control" id="tel" name="tel" placeholder="Telephone" value="" required="">
            		</div>
            	</div>
            	<div class="form-group">
            		<label for="email" class="col-sm-2 control-label"></label>
            		<div class="col-sm-10">
            			<input type="email" class="form-control" id="mail" name="mail" placeholder="example@domain.com" value="" required="">
            		</div>
            	</div>
          </div>
          <div class="col-md-6 text-center">
            	<div class="form-group">
            		<label for="message" class="col-sm-2 control-label"></label>
            		<div class="col-sm-10">
            			<textarea class="form-control" id="message" name="message" placeholder="Entrez votre message" value="" rows="4" required="" ></textarea>
            		</div>
            	</div>
            </div>
            	<div class="form-group">
            		<div class="col-sm-8 col-sm-offset-2">
                  <input name="reset"  type="reset" value="Effacer" class="btn btn-danger">
                  <input name="submit" type="submit" value="Envoyer"class="btn btn-success">
            		</div>
            	</div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin du formulaire de contact -->
    <!-- Footer -->
    <?php include("footer.php");?>
    <!-- Fin footer -->
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.js"></script>
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/agency.js"></script>
  </body>
</html>
