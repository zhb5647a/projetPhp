<!-- Exercice 1 :
-Créer une variable de type int avec pour valeur 5,
-Afficher le contenu de la variable (utilisation de la fonction php echo),
-Afficher son type (utilisation de la fonction php gettype),
-Créer une variable de type String avec pour valeur votre prénom,
-Afficher le contenu de la variable (utilisation de la fonction php echo),
-Créer une variable de type booléen avec pour valeur false,
-Afficher son type (utilisation de la fonction php gettype) -->
<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<!-- Exercice 1 :
-Créer 2 variables $a et $b qui ont pour valeur 12 et 10,
-Stocker le résultat de l’addition de $a et $b dans une variable $total,
-Afficher le résultat (utilisez la fonction echo) -->

<?php

$int =5;
echo $int;
echo '<br/>';
echo gettype($int);
echo '<br/>';
$prenom = 'abdel';

echo "mon prenon est : ".$prenom;
echo '<br/>';
echo $prenom;
echo '<br/>';
$test = true;
echo gettype($test);
echo '<br/>';
$a =12;
$b =10;
$total=$a+$b;
echo '<br/>';
echo $total;

?>