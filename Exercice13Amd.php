<h1>exercie 13</h1>

<?php
 $notesEleves = [10, 12, 8, 19, 3, 16, 11, 13, 9];


 // methode for
$result = "";
$nbNotes = count($notesEleves);
for($i = 0; $i < $nbNotes; $i++) {
    $eachNotes = $notesEleves[$i].", ";
}

echo "les notes obntenus par l'eleve sont : ".implode("-", $notesEleves)." <br>";
echo "la moyenne generale est donc de : ". round(array_sum($notesEleves) / count($notesEleves), 2). "<br>";

echo "<br>";

// metthode foreach
foreach($notesEleves as $note) {
    $result .= $note.", ";
}

$somme = array_sum($notesEleves);
$moyenne = round($somme / $nbNotes, 2);

echo "les notes obntenus par l'eleve sont : $result <br>";
echo "la moyenne generale est donc de : $moyenne";




?>