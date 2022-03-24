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
Exercice 2 :
-Créer une fonction qui prend en entrée 3 valeurs et retourne le nombre le plus grand (echo dans la page web).

function grand($a,$b,$c){
    if($a > $b){
        

        return "le nombre le plus grand est $a ";
    }
    else if ($b > $c){
        return "le nombre le plus grand est $b ";
    }
    else{
        return "le nombre le plus grand est $c ";
    }
}
echo grand(4,8,2)


?>