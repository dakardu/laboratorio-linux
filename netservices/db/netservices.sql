USE netservices;

-- Crear el usuario y otorgar permisos.
-- Usamos las mismas variables de entorno que docker-compose para mantener la consistencia.
CREATE USER IF NOT EXISTS 'netservices_user'@'%' IDENTIFIED BY 'netservices_pass';
GRANT ALL PRIVILEGES ON netservices.* TO 'netservices_user'@'%';
FLUSH PRIVILEGES;

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  nombre VARCHAR(100),
  correo VARCHAR(150) NOT NULL UNIQUE,
  password VARCHAR(255),
  rol ENUM('admin', 'usuario') NOT NULL DEFAULT 'usuario',
  creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO usuarios (username, nombre, correo, password, rol)
VALUES ('admin', 'Admin', 'admin@dominio.com', '$2y$10$zYQgacvs264T1hMGD9zBfucClC65SgCj3najcBflYjPJ7kl3KOScu', 'admin');
