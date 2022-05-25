<h1>exercice15</h1>

<?php

// Créer une classe Personne (nom, prénom et date de naissance).
// Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
// $p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
// $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
// Affichage :
// Michel DUPONT a … ans
// Alice DUCHEMIN a … ans

class Personne {
    private string $_nom; // pas obligatoire le _ c'est juste pour différencier les noms de variables
    private string $_prenom;
    private DateTime $_dateNaissance; // définition en dattime pour que le calcul puisse se faire
    
    public function __construct(string $nom, string $prenom, string $dateNaissance)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = new DateTime($dateNaissance);
        
    }

    public function getNom() {
        return $this->_nom;
    }

    public function getPrenom() {
        return $this->_prenom;
    }

    public function getDate() {
        return $this->_dateNaissance;
    }

    public function getAge() {
        $now = new DateTime();
        $interval = $this->_dateNaissance->diff($now); // diff est une methode de datetime
        return $interval->format("%Y");
    }

    public function __toString()
    {
        return $this->_prenom." ".$this->_nom." a ".$this->getAge()." ans<br>";
    }

}

$michel = new Personne("DUPONT", "michel", "1980-02-19");
$alice = new Personne ("DUCHEMIN", "alice", "1985-01-17");


echo $alice;
echo $michel;

?>