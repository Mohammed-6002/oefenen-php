<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Post Formulier</title>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['naam'])) {
    $naam = htmlspecialchars($_POST['naam']);
    echo "<p>Welkom, " . $naam . "!</p>";
} else {
?>

<form method="post" action="post-formulier.php">
    <label for="naam">Naam:</label>
    <input type="text" id="naam" name="naam" required>
    <button type="submit">Verstuur</button>
</form>

<?php
}
?>

</body>
</html>
