<?php
require_once("POO/client.php") ;
require_once("POO/event.php") ;
require_once("POO/lieu-clan.php") ;

$event = new Event(3) ;

?>

<!DOCTYPE html>
<html>
<head>
	<title> Déroulé de l'évènement | La Guerre de l'Oiseau </title>

	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/x-icon" href="Illustrations/Commun-Aux-Pages/favicon.png"/>
	<link href="Deroule/general.css" rel="stylesheet">
	<link href="Commun-Aux-Pages/header.css" rel="stylesheet">

	<script src="script.js"></script>


</head>
<body>

<header>
	<?php require_once("Commun-Aux-Pages/header.php") ;?>
</header>

<main>
	<?php require_once("Deroule/incl.php") ;?>
</main>

<footer>
	<?php require_once("Commun-Aux-Pages/footer.php") ;?>
</footer>

</body>
</html>