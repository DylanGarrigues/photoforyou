<?php
 include ("include/entete.inc.php");
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
    <h1>Espace Client</h1>
    <?= $_SESSION["auth"]->pseudo; ?> </br>
    <?= $_SESSION["auth"]->email; ?> </br>
    <?= $_SESSION["auth"]->prenom; ?> </br>
    <?= $_SESSION["auth"]->nom; ?>


    <?php // Footer
include ("include/footer.inc.php");
?>
</body>


</html>