<h1>Exercice 8</h1>

<?php

// Première manière.

echo "Table de 8 :<br>";
$table = 8;
$tableau = range(1,10); // La fonction range permet de déclarer un tableau.

$i = 1;
foreach ( $tableau as $tab) {
    $resultat = $tab * $table;
    echo "$tab x $table = $resultat <br>";
}

echo "<br>";
// Deuxième manière.
echo "Table de 8 :<br>";
$table1 = 8;

for ($i=1; $i<=10; $i++) {
    $resultat1 = $i * $table1;
    echo "$i x $table1 = $resultat1 <br>";
}

?>