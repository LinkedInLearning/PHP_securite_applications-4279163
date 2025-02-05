<?php

function verifierType($valeur)
{
    if (is_int($valeur)) {
        echo "C'est un entier.";
    } elseif (is_string($valeur)) {
        echo "C'est une chaîne de caractères.";
    } elseif (is_bool($valeur)) {
        echo "C'est un booléen.";
    } else {
        echo "Type inconnu : " . gettype($valeur);
    }
}

verifierType(42); // "C'est un entier."
verifierType("Hello"); // "C'est une chaîne de caractères.
verifierType(true); // "C'est un booléen.
verifierType([]); // "C'est un booléen.