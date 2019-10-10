<?php
function chargerClasse($classname)
{
  require 'classes/'.$classname.'.class.php';
}

spl_autoload_register('chargerClasse');

$db = new PDO('mysql:host=127.0.0.1:8889;dbname=photoforyou2','root','root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$manager = new UserManager($db);

if (isset($_POST['valider']) && isset($_POST['mail']) && isset($_POST['motdepasse']))
{
  $utilisateur = $manager->getUser($_POST['mail']);
  if ($utilisateur->getMdp() == $_POST['motdepasse'])
  {
    session_start ();
    $_SESSION['login'] = true;
    $_SESSION['NomUtilisateur'] = $utilisateur->getPrenom();
    header('Location: membres.php');
  }
  else
  {
    header('Location: index.php');
    echo "<p>Il existe pas</p>";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>PhotoForYou : connexion</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Liaison au fichier css de Bootstrap -->
	<link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>


  <?php
	include ("include/entete.inc.php")
  ?>

  
	<div class="container">
    <div class="jumbotron">
      <h1 class="display-4">Connexion</h1>
      <p class="lead">Merci de vous identifier</p>
    </div>
    <form method="post" id="formId"  novalidate>
      <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="email">e- mail : </label>
          <input type="email" class="form-control" name="mail" id="email" placeholder="E-mail" required>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="motDePasse1">Mot de passe :</label>
          <input type="password" class="form-control" name="motdepasse" required>
        </div>
      </div>
      <input type="submit" value="Valider" class="btn btn-primary" name="valider" />
    </form>
  </div>

  <?php
    include ("include/piedDePage.inc.php");
  ?>
</body>
</html>