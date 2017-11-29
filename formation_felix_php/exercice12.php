<?php

function bonjour()
{
    echo "bonjour <br />";
}

function afficheSomme ( $a , $b) 
{
    echo $a+$b .  "<br />";
}

function afficheSommeType( int $a , int $b)
{
    echo $a+$b .  "<br />";
}

function getSomme( int $a , int $b )
{
    return $a+$b;
}

// Fonctionne uniquement PHP7
function getSomme7 (int $a , int $b) : int 
{
    return $a+$b;
}

bonjour();
afficheSomme(1 , 2);
afficheSommeType( 1 , 2 );
afficheSommeType( 1 , 2.0 );
//afficheSomme( 1 , "a" );
//afficheSommeType( 1 , "a" );
$somme = getSomme(1 , 2);
echo "somme = $somme <br />";
$somme = getSomme7(1 , 2);
echo "somme = $somme <br />";