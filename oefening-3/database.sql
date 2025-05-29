CREATE DATABASE IF NOT EXISTS winkel;
USE winkel;
CREATE TABLE producten (
    id INT AUTO_INCREMENT PRIMARY KEY,
    naam VARCHAR(100),
    prijs DECIMAL(6,2)
);
INSERT INTO producten (naam, prijs) VALUES
('Broodrooster', 29.99),
('Waterkoker', 24.50),
('Koffiezetapparaat', 89.00);
