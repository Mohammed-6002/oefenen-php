<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=winkel", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Verbinding gelukt!<br>";
} catch (PDOException $e) {
    echo "Verbinding mislukt: " . $e->getMessage();
    exit;
}

$stmt = $conn->query("SELECT * FROM producten");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "Product: " . htmlspecialchars($row['naam']) . " - €" . htmlspecialchars($row['prijs']) . "<br>";
}
?>
