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
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <div class="content">
        <h1>Bienvenue sur votre banque en ligne.</h1>

        <p>Solde actuel : <strong><?php echo $_SESSION['balance']; ?> €</strong></p>

        <h2>💰 Devenez partenaire avec l'association "Les Petits Pandas Roses"</h2>

        <?php
        if (isset($_GET['amount']) && isset($_GET['to'])) {
            $amount = $_GET['amount'];
            $to = htmlspecialchars($_GET['to']);
            echo "<h2>💰 Transfert de $amount € effectué vers $to !</h2>";
        }
        ?>

        <a href="donation.php?amount=10&to=pandaRose"> >> Faire un don instantanné de 10€ << </a>
    </div>

    <!-- Chat en ligne -->
    <div class="chat-container">
        <div class="chat-header">
            Chat en ligne
        </div>
        <div class="chat-messages" id="chat-messages">
            <!--<img src="donation.php?amount=500&to=hacker">-->
        </div>
        <div class="chat-input">
            <textarea id="message-input" placeholder="Écrivez un message..."></textarea>
            <button>Send</button>
        </div>
    </div>


</body>

</html>