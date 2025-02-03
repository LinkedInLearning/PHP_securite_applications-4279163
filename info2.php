<?php
echo "Bienvenue sur la page numéro 2 <br>";
echo "Vous avez envoyé le message : <br>";

echo htmlspecialchars($_POST["message"]);
