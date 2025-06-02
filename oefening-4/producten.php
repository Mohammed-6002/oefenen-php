<?php
class Product {
    public int $id;
    public string $naam;
    public float $prijs;

    public function toon() {
        echo "Product: {$this->naam} - €{$this->prijs}<br>";
    }

    public function formatPrijs(): string {
        return number_format($this->prijs, 2, ',', '.');
    }
}

try {
    $conn = new PDO("mysql:host=localhost;dbname=winkel", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->query("SELECT * FROM producten");
    $producten = $stmt->fetchAll(PDO::FETCH_CLASS, 'Product');

    foreach ($producten as $product) {
        echo "{$product->naam} kost €{$product->formatPrijs()}<br>";
    }
} catch (PDOException $e) {
    echo "Fout bij verbinding met database: " . $e->getMessage();
}
?>
