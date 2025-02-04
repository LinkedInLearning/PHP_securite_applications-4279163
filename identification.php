<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "db_security_php";

$conn = new mysqli($servername, $username, $password, $database);

if (isset($_POST['loginUser']) && isset($_POST['passwordUser'])) {

    $loginUser = $_POST['loginUser'];
    $passwordUser = $_POST['passwordUser'];

    $sql = "SELECT * FROM user WHERE login = '$loginUser' and password = '$passwordUser' ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc())

            print_r($row);
    } else {
        echo '0 résultat. Base de données vide';
    }

    $conn->close();
}

?>

<h1>Identification</h1>
<form method="post">
    <label>Login :</label>
    <input type="text" name="loginUser">
    <label>Password :</label>
    <input type="password" name="passwordUser">
    <input type="submit">
</form>