# laboratorio-linux

# 🧠 Laboratorio Técnico con AlmaLinux en Hyper-V

Este proyecto documenta mi proceso de aprendizaje práctico en administración de sistemas Linux utilizando **AlmaLinux** como entorno base dentro de máquinas virtuales **Hyper-V**. A través de distintos módulos, configuro servicios esenciales, automatizo tareas y fortalezco la seguridad del sistema, consolidando conocimientos clave sobre el ecosistema Linux tipo RHEL.

---

## 📌 Objetivos del Proyecto

-   Adquirir experiencia práctica en administración de servidores Linux.
-   Configurar servicios web, de red, seguridad y automatización.
-   Preparar documentación clara y compartible sobre entornos empresariales.
-   Desarrollar habilidades técnicas orientadas a roles DevOps, SysAdmin o IT Support.

---

## 🧪 Entorno del Laboratorio

-   Sistema base: AlmaLinux 10.0 (Purple Lion)
-   Virtualización: Hyper-V (Windows 11)
-   Red configurada vía NAT con conectividad externa
-   Usuarios, servicios y scripts configurados paso a paso

---

## 📂 Estructura del Proyecto

alma-linux-lab/
├── README.md
├── fase-1-instalacion/
│ └── pasos-iniciales.md
├── fase-2-servidor-web/
│ └── apache-configuracion.md
├── scripts/
│ ├── crear-usuario.sh
│ └── instalar-paquetes.sh
└── capturas/
├── apache-status.png
└── red-configurada.png

---

## 🚀 Módulos Implementados

### 🔹 Fase 1: Preparación del sistema

-   Configuración de red e internet
-   Actualización del sistema con `dnf`
-   Creación de usuarios y asignación de permisos administrativos
-   Instalación de herramientas esenciales

### 🔹 Fase 2: Montaje de servidor web

-   Instalación y activación de Apache
-   Verificación de servicio y pruebas locales

### 🔹 Fase 3: Seguridad

-   Configuración básica de `firewalld`
-   Exploración de `SELinux` en modo permisivo
-   Preparación para futuras medidas de seguridad (VPN, fail2ban, DNSCrypt)

### 🔹 Fase 4: Implementacion de scripts para automatizacion de tareas

-   Creación de scripts para automatizar tareas

---

## 🧠 Próximos pasos

-   Integración de MariaDB y PHP para completar un stack LAMP
-   Automatización de tareas mediante scripts Bash y Ansible
-   Migraciones simuladas entre versiones con ELevate
-   Contenerización con Podman o Docker

📘 Servidor Web - Proyecto Netservices

🧩 Descripción general
Netservices es un sistema web basado en PHP que gestiona accesos diferenciados por rol:

-   🔐 Administradores acceden a paneles de gestión.
-   👤 Usuarios normales visualizan su contenido personalizado.

📁 Estructura del proyect

NETSERVICES/
├── admin/ # Vistas y lógica para el panel de administración
│ ├── admin.php
│ ├── editar_formulario.php
│
├── assets/ # Archivos estáticos (estilos e imágenes)
│ ├── css/
│ ├── img/
│
├── config/ # Configuración general y conexión a DB
│ ├── conexion.php
│ ├── routes.php
│
├── controllers/ # Lógica de negocio dividida por módulos
│ ├── admin/
│ ├── usuario/
│ ├── cambiar_password.php
│ ├── editar_usuario.php
│ ├── eliminar_usuario.php
│ ├── require_usuario.php
│ ├── login.php
│ ├── logout.php
│ ├── registrar.php
│
├── views/ # Vistas HTML/PHP del sistema
│ ├── admin/
│ ├── gestionar_usuarios.php
│ ├── usuario/
│ ├── panel_usuario.php
│ ├── perfil.php
│ ├── acceso_denegado.php
│ ├── login.php
│ ├── registro.php
│
├── vendor/ # Dependencias instaladas con Composer
│ ├── autoload.php
│ ├── composer/
│ ├── graham-campbell/
│ ├── phpoption/
│ ├── symfony/
│ ├── vlucas/
│ ├── composer.json
│ ├── composer.lock
│
├── .env.example # Ejemplo editable para configuración de entorno
├── .gitignore # Exclusión de archivos sensibles (como .env)
├── header.php # Cabecera HTML compartida
├── index.php # Entrada principal del sitio
├── README # Este archivo (documentación del proyecto)

🔐 Gestión de accesos

-   Sesiones activadas vía session_start().
-   Usuarios son redirigidos según su rol (admin o usuario).
-   Seguridad reforzada con:
-   /controllers/admin/require_admin.php
-   /controllers/usuario/require_usuario.php
-   Reestablecimiento de contraseña y edición de perfil en /controllers/usuario/cambiar_password.php.

🚀 Navegación dinámica
El archivo header.php muestra enlaces personalizados según el tipo de sesión activa.
Las rutas se construyen con la constante BASE_URL definida en /config/routes.php.

🧩 Requisitos

-   Servidor Apache (ej. XAMPP, AlmaLinux + Apache)
-   PHP ≥ 8.0
-   Base de datos MySQL/MariaDB
-   Extensiones recomendadas:
-   mysqli
-   mbstring
-   json

# 🧠 Panel Admin en PHP puro

Este proyecto incluye un sistema de autenticación y panel administrativo usando PHP nativo + conexión segura a MySQL mediante archivo `.env`.

## 🚀 Instalación

1. Cloná el repositorio:

    ```bash
    git clone https://github.com/usuario/netservices.git
    cd netservices
    ```

2- Copiá el archivo .env.example y renombralo como .env:
cp .env.example .env

3- Editá el .env con tus credenciales de MySQL:
Dotenv
DB_HOST=localhost
DB_USER=tu_usuario
DB_PASSWORD=tu_clave
DB_NAME=tu_DB

4- Instalá las dependencias con Composer: >>composer install

5- Accedé desde el navegador:

    http://localhost/netservices/public/

🔐 Seguridad

-   .env protegido por .gitignore
-   Conexión modular usando Dotenv
-   Separación por capas (config, public, lógica)

---

## 📎 Enlaces útiles

-   [Documentación oficial AlmaLinux](https://wiki.almalinux.org/)
-   [Laboratorios Linux recomendados](https://learnlinux.tv/)
-   [Blog técnico personal](#) _(pendiente de integrar)_

---

## 📬 Contacto

Este repositorio forma parte de mi portafolio técnico. Para colaboraciones, oportunidades o sugerencias:

-   GitHub: [github.com/dakardu](https://github.com/dakardu)
-   LinkedIn: [linkedin.com/in/dagobertoduran/](#)

---
