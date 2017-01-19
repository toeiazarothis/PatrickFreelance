<?php
include('db.php');

function listeNouveauxContact(){
  $connexion = connectionDB();
  $texte = '';
  $listeNew = $connexion->query('SELECT * FROM `freelance`');
  while ($result = $listeNew->fetch()) {
    $texte .=
    '<tr>
      <td>'.$result['sexe'].'</td>
      <td>'.$result['nom'].'</td>
      <td>'.$result['prenom'].'</td>
      <td>0'.$result['tel'].'</td>
      <td>'.$result['mail'].'</td>
      <td>'.$result['message'].'</td>
      <td>'.$result['note'].'</td>
    </tr><br>';}
  return $texte;
}

function ajoutEleve (){
  $connexion = connectionDB();

  $ajout = $connexion->exec('INSERT INTO `freelance`
    (`sexe`, `nom`, `prenom`, `tel`, `mail`, `message`)
    VALUES ("'.$_POST["sexe"].'",
            "'.$_POST["nom"].'",
            "'.$_POST["prenom"].'",
            "'.$_POST["tel"].'",
            "'.$_POST["mail"].'",
            "'.$_POST["message"].'")');

  if ($ajout == FALSE){
        exit('erreur');//echec envoie
	}

    return
    '<header class="bg bg-darkest-gray">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Felicitation!</div>
          <div class="intro-heading">
            <p>Votre message à bien etait enregistrer </p>
            <a href="index.php" class="page-scroll btn btn-xl">Accueil</a>
          </div>
        </div>
      </div>
    </header>';
}

function deplacerEleve(){
  $connexion = connectionDB();

  $modification = $connexion->query('UPDATE `eleve` SET `nom_eleve` = '.$_POST["moveEleve"].'');

  echo "La pre-inscritpion a bien etait deplacer dans les eleves de l'etablisement";
}
function supprimerEleve(){
  $connexion = connectionDB();

  $supprimer =$connexion->query('DELETE FROM `eleve` WHERE `nom_eleve` = '.$_POST["delEleve"].'');

  echo "L'eleve est bien supprimer du systeme";
}
?>
