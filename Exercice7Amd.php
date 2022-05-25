
<h1>Exercice 7</h1>

<?php

$age = 10;

if (gettype($age) == "double" || gettype($age) == "integer") { // la fonction gettype permet d'obtenir le type d'une variable
if ($age < 0) {         // ici on vérifie le type de la variable age pour qu'elle soit un integer (nombre) ou (||) 
                        //un double (float, nombre avec virgule)
    $resultat = "Veuillez saisir un nombre ou un chiffre supérieur à 0"; // si l'age est inférieur a 0 il y affichera ce message
}
if ($age >= 0 && $age < 6) {
$resultat = "bébé";
}
elseif ($age >= 6 && $age <= 7) {
    $resultat = "poussin";
} 
elseif ($age >= 8 && $age <= 9) {
    $resultat = "pupille";
} 
elseif ($age >= 10 && $age <= 11) {
    $resultat = "minime";
} 
elseif ($age >= 12 && $age <= 13) {
    $resultat = "cadet";
}
elseif ($age > 13) {
    $resultat = "L'enfant a plus de 13 ans";
}
 echo "L'enfant qui a $age ans appartient à la catégorie << $resultat >>";
} else echo "Veuillez saisir un nombre ou un chiffre"; // si la valeur est autre qu'un integer ou double, il affichera ce message

?>