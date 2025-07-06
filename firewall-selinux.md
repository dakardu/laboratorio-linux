# 🔒 Fase 3: Configuración Básica de Seguridad en AlmaLinux

Esta etapa del laboratorio se enfoca en aplicar medidas iniciales de seguridad al entorno AlmaLinux, mediante el uso del **firewall** y el **sistema de control de acceso SELinux**. Aunque son configuraciones básicas, forman parte fundamental de cualquier arquitectura robusta.

---

## 🔥 Paso 1: Configurar firewalld

AlmaLinux usa firewalld como solución dinámica de administración de reglas de red. Primero, se verifica que el servicio esté activo:

```bash
sudo systemctl status firewalld
```

Si no está activo, se inicia:

```bash
sudo systemctl enable --now firewalld
```

Agregar servicio esenciales

```bash
sudo firewall-cmd --permanent --add-service=ssh
sudo firewall-cmd --permanent --add-service=http
sudo firewall-cmd --reload
```

Comprobar servicios permitidos

```bash
sudo firewall-cmd --list-all
```

dakardu@localhost:/$ sudo firewall-cmd --list-all
public (default, active)
target: default
ingress-priority: 0
egress-priority: 0
icmp-block-inversion: no
interfaces: eth0
sources:
services: cockpit dhcpv6-client http ssh
ports:
protocols:
forward: yes
masquerade: no
forward-ports:
source-ports:
icmp-blocks:
rich rules:
dakardu@localhost:/$

## 🔥 Paso 2: Introducción a SELinux

AlmaLinux utiliza SELinux (Security-Enhanced Linux) para proporcionar un nivel de seguridad

```bash
sudo getenforce
```

dakardu@localhost:/$ sudo getenforce
[sudo] contraseña para dakardu:
Permissive
dakardu@localhost:/$

Si esta en modo Enforcing, se puede cambiar a Permissive para iniciar pruebas comando:

```bash
sudo setenforce 0
```

Tambien podemos cambiarlo permanentemete editando en el archivo /etc/selinux/config

# SELINUX=permisive

--- Buenas practicas iniciales

-   **No ejecutar comandos como root**. Utilizar `sudo` para ejecutar
-   **Dejar el firewall activo siempre y revisar puertos antes de abrirlos**.
-   **Usar SELinux en modo Permissive solo en etapas de diagnostico**.
-   **consultar losg con**.

```bash
sudo ausearch -m avc
```

## 📂 Resultado

--- El sistema esta mas protegido frente a accesos no autorizados. Esta configuración basica crea una base para futuras implemetaciones de servidores VPN, bases de datos o otros servicios criticos.
