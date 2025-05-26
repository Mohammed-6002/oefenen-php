<?php
// Check if 'zoekwoord' is set in the URL query string
if (isset($_GET['zoekwoord'])) {
    $zoekwoord = htmlspecialchars($_GET['zoekwoord']);
    echo "Je zoekt naar: " . $zoekwoord;
} else {
    echo "Er is geen zoekwoord opgegeven.";
}
?>
