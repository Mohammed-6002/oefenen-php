<?php
session_start();
$_SESSION['gebruiker'] = 'Jasper';
echo "welkom, " . $_SESSION['gebruiker'];
?>
