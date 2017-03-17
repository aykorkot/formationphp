<?php

	// Détermine si une variable est définie et est différente de NULL
	
	if (isset($_GET['prenom']) AND isset($_GET['nom'])) // On a le nom et le prénom
	{
		echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
	}
	else // Il manque des paramètres, on avertit le visiteur
	{
		echo 'Il faut renseigner un nom et un prénom !';
	}
	
	
	// Le paramètre repeter définit le nombre de fois que l'on dit « bonjour>>

	/*if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter']))
	{
		// 1 : On force la conversion en nombre entier
		$_GET['repeter'] = (int) $_GET['repeter'];
	
		// 2 : Le nombre doit être compris entre 1 et 100
		if ($_GET['repeter'] >= 1 AND $_GET['repeter'] <= 100) 
		{	
			for ($i = 0 ; $i < $_GET['repeter'] ; $i++)
			{
				echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br />';
			}
		}
	}
	else
	
		
		// 2 : Le nombre doit être compris entre 1 et 100
		if ($_GET['repeter'] >= 1 AND $_GET['repeter'] <= 100) 
		{	
			for ($i = 0 ; $i < $_GET['repeter'] ; $i++)
			{
				echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br />';
			}
		}
		
		
		
		
		v	
		// 2 : Le nombre doit être compris entre 1 et 100
		if ($_GET['repeter'] >= 1 AND $_GET['repeter'] <= 100) 
		{	
			for ($i = 0 ; $i < $_GET['repeter'] ; $i++)
			{
				echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br />';
			}
		}
			
		// 2 : Le nombre doit être compris entre 1 et 100
		if ($_GET['repeter'] >= 1 AND $_GET['repeter'] <= 100) 
		{	
			for ($i = 0 ; $i < $_GET['repeter'] ; $i++)
			{
				echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br />';
			}
		}
		

	{
	   echo 'Il faut renseigner un nom, un prénom et un nombre de répétitions !';
	}*/
	
?>