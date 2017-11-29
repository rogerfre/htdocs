<?php 

$str = "bonjour, c'est Felix. Comment vas-tu. Ici il pleut\n";

echo $str;

// majuscule
echo strtoupper($str);

// minuscule 
echo strtolower($str);

// capitalize
echo ucfirst($str);

// antislasher
echo addslashes($str);

// recuperer la position du caractère ","
echo strpos($str, "," ) . "\n";

// Extraire une partie de ma chaine
echo substr($str, 8) . "\n";

// Supprimer les espaces au debut et à la fin de ma chaine 
$souschaine = substr($str, 8);
echo trim($souschaine) . "\n"; 

// Extraire une partie de ma chaine , n caractères
echo substr($str, 0, 5) . "\n";

// Transformation d'une chaine en tableau selon un caractère
print_r(explode("." , $str));

$participants = array("frederique","jerome","nicolas","xavier","patrick");
echo implode(";", $participants) . "\n";

$msg = "Bonjour #nom# et bienvenue #nom#";
echo substr_replace($msg, "felix" , 8, 5) . "\n";
echo str_replace("#nom#", "felix", $msg) . "\n";
echo str_replace("#nom#", "felix", $msg, $nb) . "\n";
echo $nb . "\n";

echo "Taille de ma chaine: " . strlen($str) . "\n";

echo "Nombre de '.' dans ma chaine: " . substr_count($str, ".") . "\n";

$a  = "a";
$b = "A";
$c = "b";
$d = "B";

$comp1 = ($a == $b) ? "vrai" : "faux";
print("." . $comp1 . "\n");
echo "." . ( strcmp($a, $a)) . "\n";
echo "." . ( strcmp($b, $a)) . "\n";
echo "." . ( strcmp($a, $c)) . "\n";

