<h1>exercice 12</h1>

<?php

// A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
// (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
// respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
// Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG
// Affichage :
// Salut Mickaël
// Hola Virgile
// Hello Marie-Claire
// Variante : trier d’abord le tableau par ordre alphabétique du prénom
// Affichage :
// Hello Marie-Claire
// Salut Mickaël
// Hola Virgile

        $tableau = [
        "fr" => "Michael",
        "esp" => "Virgile",
        "eng" => "Clair"
        ];

    foreach ($tableau as $name) {
    if ($name === "Michael") {
        echo "Salut Michael <br>";

    } elseif($name === "Virgile") {
        echo "Hola Virgile <br>";

    } elseif ($name === "Clair") {
        echo "Hello Clair <br>";

    } else echo "Aucune personne ne correspond.";
    }

?>