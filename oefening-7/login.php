<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $gebruikersnaam = $_POST['gebruikersnaam'] ?? '';
    $wachtwoord = $_POST['wachtwoord'] ?? '';

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=login_app', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        require_once 'Gebruiker.php';

        $stmt = $pdo->prepare('SELECT * FROM gebruikers WHERE gebruikersnaam = ?');
        $stmt->execute([$gebruikersnaam]);
        $gebruiker = $stmt->fetchObject('Gebruiker');

        if ($gebruiker && $gebruiker->checkWachtwoord($wachtwoord)) {
            $_SESSION['gebruiker'] = $gebruiker;
            header('Location: dashboard.php');
            exit;
        } else {
            $error = 'Ongeldige gebruikersnaam of wachtwoord.';
        }
    } catch (PDOException $e) {
        $error = 'Databasefout: ' . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (!empty($error)): ?>
        <p style="color:red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <form method="post" action="">
        <label for="gebruikersnaam">Gebruikersnaam:</label>
        <input type="text" id="gebruikersnaam" name="gebruikersnaam" required>
        <br>
        <label for="wachtwoord">Wachtwoord:</label>
        <input type="password" id="wachtwoord" name="wachtwoord" required>
        <br>
        <button type="submit">Inloggen</button>
    </form>
</body>
</html>
