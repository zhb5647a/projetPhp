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

function verifier($x){
    if($x > 0){
        echo "le nombre est postif";
    }
    else {
        echo "il est negatif";
    }
}
verifier(2);




?>