<!-- Exercice 1 :
-Créer une variable de type int avec pour valeur 5,
-Afficher le contenu de la variable (utilisation de la fonction php echo),
-Afficher son type (utilisation de la fonction php gettype),
-Créer une variable de type String avec pour valeur votre prénom,
-Afficher le contenu de la variable (utilisation de la fonction php echo),
-Créer une variable de type booléen avec pour valeur false,
-Afficher son type (utilisation de la fonction php gettype) -->

<?php

$int =5;
echo $int;
echo '<br/>';
echo gettype($int);
echo '<br/>';
$prenom = 'abdel';
echo $prenom;
echo '<br/>';
$test = true;
echo gettype($test);
?>