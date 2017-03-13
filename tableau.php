<?php

	//Tableaux numérotés 

	// La fonction array permet de créer un array
	$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

	// affichage du tableau
	foreach($prenoms as $cle=>$valeur)
    {
    	echo $cle.' : '.$valeur.'<br>';
    } 
	echo '<br>';

/*------------------------------------*/

	//Les tableaux associatifs

	// On crée notre array $coordonnees
	$coordonnees = array (
						    'prenom' => 'ayman',
						    'nom' => 'korkot',
						    'adresse' => 'hay karima',
						    'ville' => 'salé'
						 );

	// affichage du tableau, le tableau prend une clé et une valeur
    foreach($coordonnees as $cle=>$valeur)
    {
    echo $cle.' : '.$valeur.'<br>';
    } 
	echo '<br>';
/*------------------------------------*/

	//Parcourir un tableau

	// 1 - array_key_exists : pour vérifier si une clé existe dans l'array

	if (array_key_exists('nom', $coordonnees))
	{
	    echo 'La clé "nom" se trouve dans les coordonnées !';
	}

	echo '<br>';

	if (array_key_exists('ville', $coordonnees))
	{
	    echo 'La clé "ville" se trouve dans les coordonnées !';
	}

		echo '<br>';
	// 2 - in_array : pour vérifier si une valeur existe dans l'array 

	$fruits = array ('Banane','Pomme','Poire','Cerise','Fraise','Framboise');

	if (in_array('Cerise', $fruits))
	{
	    echo 'La valeur "Cerise" se trouve dans les fruits !';
	}

	echo '<br>';
	echo '<br>';

	// 3- array_search : pour récupérer la clé d'une valeur dans l'array

	$position = array_search('Poire', $fruits);
	echo '"poire" se trouve en position ' . $position . '<br />';
	$position = array_search('Framboise', $fruits);
	echo '"Framboise" se trouve en position ' . $position;


?>