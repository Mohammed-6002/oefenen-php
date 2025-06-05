<?php
session_start();

if (!isset($_SESSION['gebruiker'])) {
    header('Location: login.php');
    exit;
}

$gebruiker = $_SESSION['gebruiker'];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welkom, <?php echo htmlspecialchars($gebruiker->gebruikersnaam); ?>!</h1>
    <p><a href="logout.php">Uitloggen</a></p>
</body>
</html>
