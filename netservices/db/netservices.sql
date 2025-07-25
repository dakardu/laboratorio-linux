CREATE DATABASE IF NOT EXISTS app_web;
USE app_web;

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100),
  correo VARCHAR(150),
  password VARCHAR(255)
);

INSERT INTO usuarios (nombre, correo, password)
VALUES ('Admin', 'admin@dominio.com', '123456');