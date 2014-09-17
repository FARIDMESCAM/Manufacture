<?php

$chaine = 'abcde';
$longueur = Compte($chaine);

for ($i = $longueur; $i >0; $i--) {
    $resultat = $resultat.$chaine[i];
}





function Compte ($chaine) {
    // initialisation des variables
$i = 1 ;
$count  = -1 ;
//Boucle pour compter nombre de caracteres
While ($i!=0) {
$count = $count +1 ;
$caractere = $chaine[$count];
If (is_null($caractere)){
$i  = 0; // j’initialise $i à 0, donc je sors de ma boucle de comptage.
}

Return $count ;
}

}