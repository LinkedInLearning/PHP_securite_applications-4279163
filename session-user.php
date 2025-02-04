<?php
// Création d'un cookie
setcookie("theme-color", "light", time() + 3600, "/");

if (isset($_COOKIE["theme-color"])) {
    echo "Mon cookie : " . $_COOKIE["theme-color"] . "<br>";
}


// Création d'une session
session_start();

$_SESSION['user'] = 'John Doe';  // L'utilisateur est connecté

echo "Session ID actuel : " . session_id();
