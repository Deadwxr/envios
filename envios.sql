CREATE DATABASE sistema_envios;

USE sistema_envios;

CREATE TABLE envios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    destinatario VARCHAR(255) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL
);