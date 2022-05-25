<h2>Résultat</h2>

<?php
$age = 32;
$sexe = "femme";

if(gettype($age == "double" && $sexe == "string") || gettype($age == "integer" && $sexe == "string")) {
    if(($age >= 18 && $age <= 35) && ($sexe == "femme")) {
        echo "age : $age <br>
              sexe : $sexe <br>
              la personne est imposable
        ";
    } elseif($age >= 20 && $sexe !== "femme") {
        echo "
        age : $age <br>
        sexe : $sexe <br>
        la personne est imposable";
    } else 
    echo "
    age : $age <br>
    sexe : $sexe <br>
    la personne n'est pas imposable";
}
?>