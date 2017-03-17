
<?php 



//fonction calendrier qui prend 2 parametres le mois et l'année 
function calendrier($mois, $annee){

	//voila variable du jour courant (17)
	$jour_courant = date('d');

	// variable qui retourne le nombre de jour dans un mois
	$nbr_jour = cal_days_in_month(CAL_GREGORIAN, 03, 2017);// nbr_jour = 31
	
	echo "<table>";
	echo "	<tr>
				<th>Lundi</th>
				<th>Mardi</th>
				<th>Mercredi</th>
				<th>Jeudi</th>
				<th>Vendredi</th>
				<th>Samedi</th>
				<th>Dimanche</th>
			</tr>
		 ";

	
	for ($i = 1; $i <= $nbr_jour; $i++) { 

		//cal_to_jd convertit un calendrier en nombre de jours Julien
		$jour = cal_to_jd(CAL_GREGORIAN, $mois, $i, $annee);

		// JDDayOfWeek retourne le numéro du jour de la semaine(joursem = 3)
		$jour_semaine = JDDayOfWeek($jour);

		
		//had la condition kaydkhel liha w kayl9a 17 donc c vrai!
		if($i == $jour_courant){
			$c1 = "c1";
		} else {
			$c1 = "";
		}
		
		//si le jour = nombre de jour dans un mois (si nbr_jour = 31)
		if($i == $nbr_jour){

			//si c'est le début de la semaine
			if($jour_semaine == 1){
				echo "<tr>";
			}
			echo "<td class='case $c1'>". $i ."</td></tr>";

		 // si c'est le début du mois	
		}elseif($i == 1){
			echo "<tr>";

			for($j = 1; $j != $jour_semaine; $j++){
				echo "<td></td>";
			}

			echo "<td class='case $c1'>". $i ."</td>";

			if($jour_semaine == 7){
				echo "</tr>";
			}

		}else{

			if($jour_semaine==1){
				echo "<tr>";
			}

			echo "<td class='case $c1'>". $i ."</td>";

			if($jour_semaine == 0){
				echo "</tr>";
			}
		}

	}

	echo "</table>";

}

function mois_courant($mc){
	$moiscourant = $mc-1;
	$table =array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin","Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");
	return $table[$moiscourant] ;	
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>Calendrier</title>
</head>
<body>



</body>


</html>