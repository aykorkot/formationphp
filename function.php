<?php
	
	// 1 - fonction strlen : retour la longeur d'une chaine de caractère
	$phrase = 'Bonjour tout le monde ! Je suis une phrase !';
	$longueur = strlen($phrase);
	echo 'La phrase ci-dessous comporte ' . $longueur . ' caractères :<br />' . $phrase;
	echo '<br>';
/*------------------------------------*/

	// 2 - la fonction str_replace : remplace une chaîne de caractères par une autre
	// dans ce cas elle permet de remplacer 'b' par 's'
	$ma_variable = str_replace('b', 's', 'bim bam boum');
	echo $ma_variable; //(resultat : sim sam soum)
	echo '<br>';

/*------------------------------------*/

	// 3 - la fonction str_shuffle: permet de mélanger les lettres d'une chaine 
	$chaine = 'Cette chaine va etre melangee !';
	$chaine = str_shuffle($chaine);
	echo $chaine;
	echo '<br>';

/*------------------------------------*/

	$chaine = 'JE MAPPELLE AYMEN KORKOT ???';
	$chaine = strtolower($chaine);
	 
	echo $chaine;
	echo '<br>';
/*------------------------------------*/

	// LES FONCTIONS DATES 

	$annee = date('Y');
	$mois = date('m');
	$jour = date('d');
	$heure = date('H');
	$minute = date('i');
	
	echo 'Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . ' et il est ' . $heure . 'h' . $minute . 'm';
	
/*------------------------------------*/	
	
	
	$nom = 'ayman';
	echo 'Bonjour, ' . $nom . ' !<br />';
	
	$nom = 'ayoub';
	echo 'Bonjour, ' . $nom . ' !<br />';
	
	$nom = 'hind';
	echo 'Bonjour, ' . $nom . ' !<br />';
	
	function bonjour($nom){
		echo 'Salut ' . $nom . ' !<br />'; 
	}
	bonjour('ayman');
	bonjour('ayoub');
	bonjour('hind');
	

/*------------------------------------*/
	
	// 

	//Calcul du volume d'un cône de rayon 7 et de hauteur 2
	function VolumeCone($rayon, $hauteur)
	{
	   $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3); // calcul du volume
	   return $volume;
	}
	
	$volume = VolumeCone(3, 1); // recupérer le resultat dans une variable
	echo 'Le volume du cone est : ' . $volume;
	
	
	
	
	
?>