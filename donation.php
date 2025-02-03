<?php
session_start();

if (isset($_GET['amount']) && isset($_GET['to'])) {
    $amount = (int) $_GET['amount'];
    $to = htmlspecialchars($_GET['to']);

    if ($amount > 0 && $amount <= $_SESSION['balance']) {
        $_SESSION['balance'] -= $amount; // Débiter le compte
    }
}

header('Location: transfer_funds.php');
