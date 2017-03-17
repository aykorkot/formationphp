<?php 


$jour = date('d');
$mois = date('m');
$annee = date('Y');

if(isset($_GET["mois"])){
	$mois = $_GET["mois"];
}

if(isset($_GET["annee"])){
	$annee = $_GET["annee"];
}

include('functions.php');

?>

<h1 style="text-align: center;"><?php echo mois_courant($mois)." ".$annee; ?></h1>

<div>
	<?php 
		calendrier($mois, $annee);

	?>
</div>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>Calendrier</title>
</head>
<body>



</body>


</html>