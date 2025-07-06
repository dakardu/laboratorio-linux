# laboratorio-linux

# 🧠 Laboratorio Técnico con AlmaLinux en Hyper-V

Este proyecto documenta mi proceso de aprendizaje práctico en administración de sistemas Linux utilizando **AlmaLinux** como entorno base dentro de máquinas virtuales **Hyper-V**. A través de distintos módulos, configuro servicios esenciales, automatizo tareas y fortalezco la seguridad del sistema, consolidando conocimientos clave sobre el ecosistema Linux tipo RHEL.

---

## 📌 Objetivos del Proyecto
- Adquirir experiencia práctica en administración de servidores Linux.
- Configurar servicios web, de red, seguridad y automatización.
- Preparar documentación clara y compartible sobre entornos empresariales.
- Desarrollar habilidades técnicas orientadas a roles DevOps, SysAdmin o IT Support.

---

## 🧪 Entorno del Laboratorio
- Sistema base: AlmaLinux 10.0 (Purple Lion)
- Virtualización: Hyper-V (Windows 11)
- Red configurada vía NAT con conectividad externa
- Usuarios, servicios y scripts configurados paso a paso

---

## 📂 Estructura del Proyecto

alma-linux-lab/
├── README.md
├── fase-1-instalacion/
│   └── pasos-iniciales.md
├── fase-2-servidor-web/
│   └── apache-configuracion.md
├── scripts/
│   ├── crear-usuario.sh
│   └── instalar-paquetes.sh
└── capturas/
    ├── apache-status.png
    └── red-configurada.png


---

## 🚀 Módulos Implementados

### 🔹 Fase 1: Preparación del sistema
- Configuración de red e internet
- Actualización del sistema con `dnf`
- Creación de usuarios y asignación de permisos administrativos
- Instalación de herramientas esenciales

### 🔹 Fase 2: Montaje de servidor web
- Instalación y activación de Apache
- Verificación de servicio y pruebas locales

### 🔹 Fase 3: Seguridad
- Configuración básica de `firewalld`
- Exploración de `SELinux` en modo permisivo
- Preparación para futuras medidas de seguridad (VPN, fail2ban, DNSCrypt)

---

## 🧠 Próximos pasos
- Integración de MariaDB y PHP para completar un stack LAMP
- Automatización de tareas mediante scripts Bash y Ansible
- Migraciones simuladas entre versiones con ELevate
- Contenerización con Podman o Docker

---

## 📎 Enlaces útiles
- [Documentación oficial AlmaLinux](https://wiki.almalinux.org/)
- [Laboratorios Linux recomendados](https://learnlinux.tv/)
- [Blog técnico personal](#) _(pendiente de integrar)_

---

## 📬 Contacto
Este repositorio forma parte de mi portafolio técnico. Para colaboraciones, oportunidades o sugerencias:
- GitHub: [github.com/dagoberto](https://github.com/dakardu)
- LinkedIn: [linkedin.com/in/tu-usuario](#)

---
