<?php
    //version variable à  l'extérieur
    /* $prixHt = 12;
    $qtx = 5;
    $tva = 20; */
    //fonction
    function calculer($prixHt,$qtx,$tva){
        echo "prixHt = $prixHt €<br>";
        echo "la quantité = $qtx<br>";
        echo "tva = $tva<br>";
        //$total = $prixHt*$qtx*(($tva/100)+1);
        //return $total;
        return $prixHt*$qtx*(($tva/100)+1);
    }
    //version variable à  l'extérieur
   
    
    $resultat = calculer(15,5,20);
    echo "le prix TTC est égal à : $resultat €";  
?>