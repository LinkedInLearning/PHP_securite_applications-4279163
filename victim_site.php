<?php
session_start();

// Simule un utilisateur connecté
if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = 123; // Utilisateur fictif
}

// Solde initial si non défini
if (!isset($_SESSION['balance'])) {
    $_SESSION['balance'] = 5000; // 5000€ de départ
}

// Vérifie si un transfert est effectué
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = (int) $_POST['amount'];
    $recipient = htmlspecialchars($_POST['recipient']);

    if ($amount > 0 && $amount <= $_SESSION['balance']) {
        $_SESSION['balance'] -= $amount; // Déduire le montant
        echo "<h2 style='color: green;'>✅ Transfert de $amount € à $recipient effectué !</h2>";
    } else {
        echo "<h2 style='color: red;'>❌ Solde insuffisant ou montant invalide !</h2>";
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>🏦 Banque en Ligne</title>
</head>

<body>
    <h1>🏦 Banque en Ligne</h1>
    <p>Bienvenue sur votre espace bancaire sécurisé.</p>

    <h2>💰 Solde Actuel : <span id="balance"><?php echo $_SESSION['balance']; ?> €</span></h2>

    <h2>📤 Transférer de l'argent</h2>
    <form action="victim_site.php" method="POST">
        <label>💵 Montant : </label>
        <input type="text" name="amount" value="100"><br>
        <label>👤 Bénéficiaire : </label>
        <input type="text" name="recipient" value="ami@example.com"><br>
        <button type="submit">💸 Envoyer</button>
    </form>
</body>

</html>