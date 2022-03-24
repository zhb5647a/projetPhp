<?php

// function get_prix($prix,$q,$tva){
//     echo "prixHt = $prix €<br>";
//     echo "la quantité = $q<br>";
//     echo "tva = $tva<br>";
// $total = $prix*$q*(($tva/100)+1);
//  return $total;
// }
// $resulat = get_prix(100,2,20);
// echo "le prix total des articles est: $resulat euro  ";

// function verifier($x){
//     if($x > 0){
//         echo "le nombre est postif";
//     }
    
    
//     elseif($x < 0){
//         echo "le nombre est negatif";

//     }
//     else if ($x==0) {
//         echo "il est nul";
//     }
// }
// verifier(0);
// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Exercice 2 :
// -Créer une fonction qui prend en entrée 3 valeurs et retourne le nombre le plus grand (echo dans la page web).

// function grand($a,$b,$c){
//     if($a > $b){
        

//         return "le nombre le plus grand est $a ";
//     }
//     else if ($b > $c){
//         return "le nombre le plus grand est $b ";
//     }
//     else{
//         return "le nombre le plus grand est $c ";
//     }
// }
// echo grand(22,23,19)
// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Exercice 4:
// -Créer une fonction qui prend en entrée 1 valeur (l’âge d’un enfant). Ensuite, elle informe de sa catégorie (echo dans la page web) :
// • "Poussin" de 6 à 7 ans
// • "Pupille" de 8 à 9 ans
// • "Minime" de 10 à 11 ans
// • "Cadet" après 12 ans
// Bonus : Refaire l’exercice en utilisant le switch case.

// function verifAge($age){
//     if(  $age >= 6 AND $age <= 7){
//         echo " catégorie Poussin";
//     }
//     else if($age >= 8 AND $age <= 9){
//         echo " catégorie Pupille";
//     }
//     else if($age >= 10 AND $age <= 11){
//         echo " catégorie Minime";
//     }
//     else if ($age >= 12){
//         echo "categori cadet";
        
//     }
//     else {
//         echo " est trop jeune";
//     }

// }
//  verifAge(4);

 function switchTest($age){
    switch($age){
        case $age>=6 AND $age<=7:
            echo 'est Poussin';
            break;
        case $age>=8 AND $age<=9:
            echo 'est Pupille';
            break;
        case $age>=10 AND $age<=11:
            echo 'est Minime';
            break;
        case $age>=12: 
            echo 'est Cadet';
            break;
        default:
            echo 'est trop jeune';
            break;
        }
    }
function switchTestV2($age){
    switch($age){
        case $age>=12:
            echo 'est Cadet';
            break;
        case $age>=10:
            echo 'est Minime';
            break;
        case $age>=8:
            echo 'est Pupille';
            break;
        case $age>=6: 
            echo 'est Poussin';
            break;
        default:
            echo 'est trop jeune';
            break;
        }
    }

    switchTestV2(10)
?>