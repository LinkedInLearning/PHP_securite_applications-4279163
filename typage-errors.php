<?php

function additionner($a, $b)
{
    return $a + $b;
}

echo additionner("5", 10); // 15
echo additionner([5], 10); // Erreur fatale !

/*
declare(strict_types=1);

function additionner(int $a, int $b): int
{
    return $a + $b;
}

echo additionner("5", 10); // Erreur TypeError !
echo additionner([5], 10); // Erreur fatale !
$/