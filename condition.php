<?php

	$age = 18;
	 
	if ($age >= 20) // SI l'âge est supérieur ou égal à 20
	{
	    echo "Bienvenue sur mon site !<br />";
	    $autorisation_entrer = "Oui";
	}
	else // SINON
	{
	    echo "Vous êtes trop petit pour pouvoir  entrer. Au revoir !<br />";
	    $autorisation_entrer = "Non";
	}
	echo "Avez-vous l'autorisation d'entrer ? La réponse est : $autorisation_entrer";
	
/*------------------------------------*/

	//Le cas des booléens
	if ($autorisation_entrer)
	{
	    echo "Bienvenue à nouveau.";
	}
	else
	{
	    echo "T'as pas le droit d'entrer !";
	}

/*------------------------------------*/

	//les conditions condensées
	$age = 24;

	//methode 1
	if ($age >= 18)
	{
		$majeur = true;
	}
	else
	{
		$majeur = false;
	}
	
	//methode ternaire 
	$majeur = ($age >= 18) ? true : false;



?>