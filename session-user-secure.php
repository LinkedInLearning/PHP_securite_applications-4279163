<?php

// Commencer la session de manière sécurisée
session_start();



/*
 *   FORCER L'UTILISATION DE HTTPS
 */

// Envoyer le cookie de session uniquement via HTTPS
ini_set('session.cookie_secure', 1); // Le cookie ne sera transmis que via HTTPS


// Vérifier si la connexion est sécurisée (HTTPS)
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
    die("La connexion n'est pas sécurisée. Utilisez HTTPS.");
}



/*
 *  LIMITER LA DUREE DE VIE DES SESSIONS
 */

// Définir un délai d'expiration pour le cookie de session
ini_set('session.gc_maxlifetime', 1800); // Expiration après 30 minutes
session_set_cookie_params(1800); // Le cookie de session expire après 30 minutes


// Paramètres pour contrôler la durée de vie de la session
$session_lifetime = 3600;  // Durée de vie de la session en secondes (1 heure)
$inactive = 1800;  // Session inactive après 30 minutes
$current_time = time();

// Si l'utilisateur est déjà connecté, vérifier la durée de la session
if (isset($_SESSION['last_activity']) && ($current_time - $_SESSION['last_activity']) > $inactive) {
    // Si l'utilisateur est inactif pendant trop longtemps, détruire la session
    session_unset();     // Supprime toutes les variables de session
    session_destroy();   // Détruit la session
    echo "Votre session a expiré en raison de l'inactivité.";
    exit();
}

// Mettre à jour le dernier moment d'activité
$_SESSION['last_activity'] = $current_time;


/*
 *   UTILISER DES COOKIES SECURISES
 */

ini_set('session.cookie_httponly', 1); // Empêche l'accès au cookie via JavaScript
ini_set('session.cookie_secure', 1); // Transmission du cookie uniquement via HTTPS
ini_set('session.use_only_cookies', 1); // Empêche l'utilisation de session_id dans l'URL



/*
 *   REINITIALISER LE SESSION_ID REGULIEREMENT
 */

// Regénérer l'ID de session pour éviter le vol de session
session_regenerate_id(true); // Génère un nouvel ID et détruit l'ancien



/*
 *   VERIFIER L'ADRESSE IP ET L'AGENT UTILISATEUR
 */


if (!isset($_SESSION['user_ip'])) {
    $_SESSION['user_ip'] = $_SERVER['REMOTE_ADDR']; // Adresse IP de l'utilisateur
    $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT']; // Agent utilisateur (navigateur)
}

// Vérifier que l'IP et l'agent utilisateur ne changent pas
if ($_SESSION['user_ip'] !== $_SERVER['REMOTE_ADDR'] || $_SESSION['user_agent'] !== $_SERVER['HTTP_USER_AGENT']) {
    session_unset();
    session_destroy();
    header("Location: login.php"); // Redirection en cas d'anomalie
    exit;
}
