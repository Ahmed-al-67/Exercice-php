
<h1>Exercice 10</h1>

<!-- A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.
Affichage :
Montant à payer : 152 €
Montant versé : 200 €
Reste à payer : 48 €
***************************************************
Rendue de monnaie : 
4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 € -->

<?php
$montantDu = 34;
$montantversé = 143;
$reste = $montantversé - $montantDu;

// for 
// intdiv();

// billet de 10
$nbbillets10 = floor($reste / 10);
// echo $nbbillets10." billets de 10 <br>";

"<br>";
// monnaie sur 10
$reste1 = $reste - ($nbbillets10 * 10);
// echo "$reste1 <br>";

// billet de 5
$nbbillets5 = floor($reste1 / 5);
// echo $nbbillets5."billet 5 <br>";

// monnaie sur 5 
$reste2 = $reste1 - ($nbbillets5 * 5);
// echo $reste2."<br>";

// pieces de 2
$pieces2 = floor($reste2 / 2);
// echo $pieces2. " piece de 2 <br>";

// monnaie sur 2
$reste3 = $reste2 - ($pieces2 * 2) ;
// echo $reste3."<br>";

// nombre piece de 1
$nbpiece1 = $reste3;
// echo $nbpiece1. "piece de un <br>";

echo "Montant à payer : $montantDu € <br>";
echo "Montant versé : $montantversé € <br>";
echo "Reste à payer : $reste <br>";
echo "********************************<br>";
echo "Rendue de monnaie : <br>";
echo "$nbbillets10 billets de 10 € - $nbbillets5 billet de 5 € - 
$pieces2 pièce de 2 € - $nbpiece1 pièce de 1 €"; 

?>
