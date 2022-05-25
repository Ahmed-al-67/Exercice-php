<h1>Exercice 3</h1>

<?php
$phrase1 = "Notre formation DL commence aujourd'hui";

echo "$phrase1<br>";
echo str_replace("aujourd'hui", "demain", $phrase1); // la fonction str_replace remplace le mot indiqué
                                                    // 1er argumet remplacer par le 2eme, 3eme argument est la phrase en question.
?>