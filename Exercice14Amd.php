
<h1>exercie 14</h1>

<?php

$now = new DateTime();
$dateNaissance = new DateTime("1980-06-29");

echo $dateNaissance->format("d-m-Y");

$diff = $dateNaissance->diff($now);

echo "<br>";

echo $diff->format("%Y ans %m mois %d jours")."<br>";

?>