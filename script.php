<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <h1>Ma page web</h1>
        <p>Aujourd'hui nous sommes le <?php echo date('Y/m/d H:i:s'); ?> .</p>
    </body>
</html>



<?php

	echo '<h1>Bonjour à tous</h1>';
	echo 'Ma première instruction.';
	echo 'Ma deuxième instruction.';
	echo 'Et en voilà une troisième !';
	echo "Cette ligne a été écrite \"uniquement\" en PHP."; 

	// variable de type int
	$var1 = 17;echo '<br>';
	echo $var1;

	// variable de type float
	$var2 = 10.6 ;echo '<br>';
	echo $var2;

	// variable de type string
	$var3 = 'Je m\'appelle Ayman';echo '<br>';
	echo $var3;

	// variable de type booléan
	$zero = false;
	$deux = true;
	echo $zero;echo '<br>';
	echo $deux;echo '<br>';

	// variable de type null
	$pas_de_valeur = NULL;
	echo $pas_de_valeur;echo '<br>';


	// concatenation
	echo "J'ai ".$var1." ans";

?>






