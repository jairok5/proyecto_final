-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS rentacar;
USE rentacar;

-- Tabla: autos
CREATE TABLE autos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    modelo VARCHAR(100) NOT NULL,
    precio_por_dia DECIMAL(10,2) NOT NULL,
    unidades_disponibles INT NOT NULL
);

-- Tabla: camionetas
CREATE TABLE camionetas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    modelo VARCHAR(100) NOT NULL,
    precio_por_dia DECIMAL(10,2) NOT NULL,
    unidades_disponibles INT NOT NULL
);

-- Tabla: choferes
CREATE TABLE choferes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(50) NOT NULL,
    precio_por_dia DECIMAL(10,2) NOT NULL,
    cantidad_disponible INT NOT NULL
);

-- Datos de ejemplo para autos
INSERT INTO autos (modelo, precio_por_dia, unidades_disponibles) VALUES
('Toyota Corolla', 500, 3),
('Honda Civic', 550, 2),
('Suzuki Swift', 400, 4),
('Chevrolet Aveo', 450, 2),
('March', 380, 5),
('Toyota Prius', 600, 1);

-- Datos de ejemplo para camionetas
INSERT INTO camionetas (modelo, precio_por_dia, unidades_disponibles) VALUES
('Toyota Highlander', 800, 2),
('Honda Pilot', 850, 1),
('Kia Sorento', 790, 2),
('Chevrolet Traverse', 870, 1);

-- Datos de ejemplo para choferes
INSERT INTO choferes (tipo, precio_por_dia, cantidad_disponible) VALUES
('Ejecutivo', 700, 2),
('Bilingüe', 850, 1),
('Turístico', 780, 1),
('Traslados', 750, 2);
