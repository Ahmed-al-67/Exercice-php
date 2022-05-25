<h1>Exercice 11</h1>

<!-- Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
d’afficher le nombre de marques de voitures présentes dans le tableau.
Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
Affichage (attention à utiliser une liste à puces)
Il y a 4 marques de voitures dans le tableau :
Peugeot
Renault
BMW
Mercedes -->

<?php

$tableauvoiture = ["peugeot", "renault", "bmw", "mercedes", "audi"];
$nbmarques = count($tableauvoiture);
echo "Il y a $nbmarques marques de voitures dans le tableau :<br>";
foreach ($tableauvoiture as $voiture) {
        echo "<li>$voiture</li> <br>"; 
}
?>