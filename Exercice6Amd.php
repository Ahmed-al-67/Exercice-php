
<h1>Exercice 6</h1>

<?php

$prixUnitaire = 9.99; // on déclare les valeurs
$quantité = 5;
$tva = 0.2;

$montantTotal = $quantité * $prixUnitaire * (1 + $tva); // on calcul le prix

echo "Prix unitaire de l’article : $prixUnitaire €<br>"; // on imprime
echo "quantité : $quantité <br>";
echo "taux de TVA : $tva <br>";
echo "le montant de la facture à régler est de : $montantTotal €";

?>