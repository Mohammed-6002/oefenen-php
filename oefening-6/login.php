<?php
if (isset($_POST['login'])) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form method="post" action="">
        <button type="submit" name="login">Inloggen</button>
    </form>
</body>
</html>
