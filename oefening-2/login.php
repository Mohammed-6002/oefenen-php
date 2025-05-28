<?php
session_start();
$_SESSION['gebruiker'] = 'Jasper';
echo "Welkom, " . $_SESSION['gebruiker'];
?>
