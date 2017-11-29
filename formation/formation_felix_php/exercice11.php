<?php
$valeurs = array ( 5 , 10 , 15 , 20 );
array_push($valeurs, 25);

for ($i = 0; $i < count($valeurs); $i++){
    echo $valeurs[$i] . "<br/>";
}

$utilisateur = array();
$utilisateur["nom"] = "SPORTELLI";
$utilisateur["prenom"] = "FELIX";

foreach ($utilisateur as $cle => $valeur) {
    echo "Clé = " . $cle . " - ";
    echo "Valeur = " . $valeur . "<br />";
}

$inscrits = array ("felix", "aurelie", "lea");

echo "Inscrits : ";
foreach ($inscrits as $inscrit) {
    echo "$inscrit - ";
}
echo "<br/>Inscrits : ";
foreach ($inscrits as $cle => $inscrit) {
    echo "$inscrit($cle) - ";
}

$famille = array (
    array ( "id" => 1 , "prenom" => "Felix", "nom" => "SPORTELLI" , "age" => 32, "sexe" => "M"),
    array ( "id" => 2 , "prenom" => "Aurelie", "nom" => "SPORTELLI" , "age" => 31, "sexe" => "F"),
    array ( "id" => 3 , "prenom" => "Lea", "nom" => "SPORTELLI" , "age" => 3, "sexe" => ""),
);

$enfant = array ( "id" => 4 , "nom" => "SPORTELLI" , "prenom" => "leo", "age" => 0, "sexe" => "M" );
array_push($famille , $enfant ); // Fonction qui permet d'ajouter une valeur à un array existant 

echo "<br /><br />FAMILLE : <br/>";
// Pour chaque case du tableau $famille appelée C 
foreach ($famille as $c){
    // Pour chaque clé/valeur de c ... 
    foreach($c as $cle=>$valeur){
        // Afficher cle - valeur
        echo "$cle - $valeur ";
    }
    echo "<br />";
}


