<html>
<head>
  <meta charset="UTF-8">
  <title>Site PHP</title>
</head>
<body>


    <?php include("entete.php"); ?>

    <?php include("menus.php"); ?>

  <?
  // on teste la déclaration de notre cookie
  if (isset($_COOKIE['pseudo'])) {
  	echo 'Bonjour '.$_COOKIE['pseudo'].' !';
  }
  else {
  	echo 'Notre cookie n\'est pas déclaré.';

  	// si le cookie n'existe pas, on affiche un formulaire permettant au visiteur de saisir son nom
  	echo '<form action="./traitement.php" method="post">';
  	echo 'Votre nom : <input type = "texte" name = "nom"><br />';
  	echo '<input type = "submit" value = "Envoyer">';
  }
  ?>




</body>
</html>
