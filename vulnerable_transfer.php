<?php
session_start();

// Simuler un utilisateur connecté avec un solde
if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = 1;
    $_SESSION['balance'] = 10000; // Solde initial en euros
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Virement bancaire</title>
</head>

<body>
    <h1>💰 Effectuer un virement</h1>
    <p>Solde actuel : <strong><?php echo $_SESSION['balance']; ?> €</strong></p>

    <form action="vulnerable_transfer.php" method="GET">
        Montant : <input type="text" name="amount" value="100"><br>
        Bénéficiaire : <input type="text" name="to" value="ami"><br>
        <button type="submit">Envoyer</button>
    </form>

    <?php
    if (isset($_GET['amount']) && isset($_GET['to'])) {
        $amount = (int) $_GET['amount'];
        $to = htmlspecialchars($_GET['to']);

        if ($amount > 0 && $amount <= $_SESSION['balance']) {
            $_SESSION['balance'] -= $amount; // Débiter le compte
            echo "<h2>✅ Transfert de $amount € envoyé à $to !</h2>";
            echo "<p>💸 Nouveau solde : <strong>" . $_SESSION['balance'] . " €</strong></p>";
        } else {
            echo "<h2>⛔ Montant invalide ou insuffisant !</h2>";
        }
    }
    ?>
</body>

</html>