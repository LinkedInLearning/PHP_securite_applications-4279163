<?php

// preg_match() : Vérifie si un motif est présent dans une chaîne

$texte1 = "Bonjour 123";
if (preg_match("/\d+/", $texte1)) {
    echo "Un nombre est présent !";
}
echo "<br>";


// preg_match_all() : Trouve toutes les occurrences d’un motif

$texte2 = "email1@test.com email2@test.com";
preg_match_all("/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/", $texte2, $matches);
print_r($matches[0]);
echo "<br>";



// preg_replace() : Remplace les occurrences d’un motif

$texte3 = "Bonjour 2024";
$nouveauTexte = preg_replace("/\d+/", "2025", $texte3);
echo $nouveauTexte; // Bonjour 2025
echo "<br>";



// preg_split() : Découpe une chaîne selon un motif

$texte4 = "nom1,nom2;nom3|nom4";
$elements = preg_split("/[,;|]/", $texte4);
print_r($elements);
echo "<br>";



// Exemple pratique : Validation d'un e-mail
$email = "test@example.com";
if (preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
    echo "Email valide";
} else {
    echo "Email invalide";
}
