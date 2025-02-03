<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>

    <nav>
        <a id="lien" href="https://google.com" target="_blank">Menu</a>
    </nav>

    <br>

    <?php
    $name = $_GET['name'];
    echo 'Bonjour ' . $name;
    ?>

    <br><br>

    <form action="info2.php" method="POST">
        <input type="text" name="message" placeholder="Ecrivez votre message">
        <input type="submit">
    </form>


</body>

</html>