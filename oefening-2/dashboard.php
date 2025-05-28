<?php
session_start();
if (isset($_SESSION['gebruiker'])) {
    echo "Welkom terug, " . $_SESSION['gebruiker'];
} else {
    echo "Geen gebruiker ingelogd.";
}
?>
