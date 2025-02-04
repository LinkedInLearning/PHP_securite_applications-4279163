<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "db_security_php";

// Connexion sécurisée à la base de données avec PDO
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Vérification si le formulaire a été soumis
if (isset($_POST['loginUser']) && isset($_POST['passwordUser'])) {

    $loginUser = $_POST['loginUser'];
    $passwordUser = $_POST['passwordUser'];

    // Requête préparée pour éviter l'injection SQL
    $query = $conn->prepare("SELECT * FROM user WHERE login = :loginUser and password = :passwordUser");
    $query->bindParam(':loginUser', $loginUser, PDO::PARAM_STR);
    $query->bindParam(':passwordUser', $loginUser, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch();

    // Vérification de l'utilisateur
    if ($result > 0) {
        var_dump($result);
    } else {
        echo "Identifiants incorrects.";
    }
}


?>

<h1>Identification</h1>
<form method="post">
    <label>Login :</label>
    <input type="text" name="loginUser" required>
    <label>Password :</label>
    <input type="password" name="passwordUser" required>
    <input type="submit" value="Se connecter">
</form>