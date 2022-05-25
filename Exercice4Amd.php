<h1>Exercice 4</h1>

<?php

$phrase = "Engage le jeu que je le gagne";
$phraseMini = strtolower($phrase); // la fonction strtolower permet de convertir toutes les lettres en minuscule
$phraseColler = str_replace(" ", "", $phraseMini); // on utilise la fonction str_replace pour supprimer les espaces

$inverse = strrev($phraseColler); // la fonction strrev permet d'inverser la chaine

if ($phraseColler === $inverse) { // on vérfie avec un if si la phrase en minuscule sans espace est === à l'inverse de la phrase
    echo "la phrase << $phrase >> est palindrome.";
} else {
    echo "non palindrome";
}

?>