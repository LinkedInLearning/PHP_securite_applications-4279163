<?php

// Avec microtime(true)
// Cette fonction permet de récupérer le timestamp actuel avec une précision en microsecondes.

$start = microtime(true);

// Code à tester
for ($i = 0; $i < 1000000; $i++) {
    $a = $i * 2;
}

$end = microtime(true);
$executionTime = $end - $start;

echo "Avec microtime => Temps d'exécution : " . number_format($executionTime, 6) . " secondes <br>";



// Avec hrtime(true) (PHP 7.3+)
// Cette fonction offre une meilleure précision en nanosecondes :
$start = hrtime(true);

// Code à tester
for ($i = 0; $i < 1000000; $i++) {
    $a = $i * 2;
}

$end = hrtime(true);
$executionTime = ($end - $start) / 1e9; // Convertir en secondes

echo "Avec hrtime(true)  => Temps d'exécution : " . number_format($executionTime, 6) . " secondes <br>";


// Avec memory_get_usage()
// Si vous voulez aussi mesurer la mémoire utilisée :

$startMemory = memory_get_usage();
$startTime = microtime(true);

// Code à tester
$array = range(1, 1000000);

$endTime = microtime(true);
$endMemory = memory_get_usage();

echo "Avec memory_get_usage() => Temps d'exécution : " . number_format($endTime - $startTime, 6) . " secondes <br>";
echo "Avec memory_get_usage() => Mémoire utilisée : " . number_format(($endMemory - $startMemory) / 1024, 2) . " Ko <br>";
