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

/*------------------------------------*/

	// LES FONCTIONS DATES 

	$annee = date('Y');
	echo $annee;
?>