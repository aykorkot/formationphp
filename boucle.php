<?php

	$nombre_de_lignes = 1;

	// boucle While
	while ($nombre_de_lignes <= 10)
	{
	   	echo 'Ceci est la ligne n° ' . $nombre_de_lignes . '<br />';
    	$nombre_de_lignes++;
	}

	echo '<br />';
	echo '<br />';

	// boucle For
	for ($nombre_de_lignes = 1; $nombre_de_lignes <= 10; $nombre_de_lignes++)
	{
	    echo 'Ceci est la ligne n° ' . $nombre_de_lignes . '<br />';
	}
?>