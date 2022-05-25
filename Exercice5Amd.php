<h1>Exercice 5</h1>

<?php

$valeurFranc = 100; // on déclare les valeurs francs et devise
$valeurDevise = 6.56;
$valeurEuro = round($valeurFranc / $valeurDevise, 2); // la fonction roud permet d'arrondir un nombre à virgule
                                                    // ici on arrondi avec 2 décimales
echo "Montants en francs : $valeurFranc <br>" ;
echo "$valeurFranc francs = $valeurEuro €";
?>