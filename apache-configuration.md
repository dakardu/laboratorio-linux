# 🌐 Fase 2: Configuración de Servidor Web Apache en AlmaLinux

En esta fase del laboratorio se realiza la instalación y configuración básica del servidor web **Apache (httpd)** sobre el sistema AlmaLinux ya desplegado en Hyper-V. El objetivo es montar un servicio accesible internamente y preparar el entorno para aplicaciones web más complejas.

---

## 📦 Paso 1: Instalar Apache

```bash
sudo dnf install -y httpd
```

## 📦 Paso 2: Habilitar y arrancar el servidor

```bash
sudo systemctl enable --now httpd
```

--- la salida seria esta => Created symlink '/etc/systemd/system/multi-user.target.wants/httpd.service' → '/usr/lib/systemd/system/httpd.service'.

## 📦 Paso 3: Verificar el estado del servicio

```bash
sudo systemctl status httpd
```

--- ● httpd.service - The Apache HTTP Server
Loaded: loaded (/usr/lib/systemd/system/httpd.service; enabled; preset: di>
Active: active (running) since Sun 2025-07-06 22:31:28 CEST; 1min 38s ago
Invocation: 98b2781a17684677b395917b5f91815f
Docs: man:httpd.service(8)
Main PID: 88569 (httpd)
Status: "Total requests: 0; Idle/Busy workers 100/0;Requests/sec: 0; Bytes>
Tasks: 177 (limit: 23040)
Memory: 13.8M (peak: 14.5M)
CPU: 71ms
CGroup: /system.slice/httpd.service
├─88569 /usr/sbin/httpd -DFOREGROUND
├─88570 /usr/sbin/httpd -DFOREGROUND
├─88571 /usr/sbin/httpd -DFOREGROUND
├─88572 /usr/sbin/httpd -DFOREGROUND
└─88573 /usr/sbin/httpd -DFOREGROUND

jul 06 22:31:28 localhost.localdomain systemd[1]: Starting httpd.service - The >
jul 06 22:31:28 localhost.localdomain (httpd)[88569]: httpd.service: Referenced>
jul 06 22:31:28 localhost.localdomain httpd[88569]: AH00558: httpd: Could not r>
jul 06 22:31:28 localhost.localdomain httpd[88569]: Server configured, listenin>
jul 06 22:31:28 localhost.localdomain systemd[1]: Started httpd.service - The A>
lines 1-22/22 (END)

## 📦 Paso 4: Configurar el firewall para permitir el tráfico HTTP

```bash
sudo firewall-cmd --permanent --add-service=http
sudo firewall-cmd --reload
```

---Opcional, si usaras HTTPS en el futuro

```bash
sudo firewall-cmd --permanent --add-service=https
sudo firewall-cmd --reload
```

## 📦 Paso 5: Probar el servidor web

--- Abrir un navegador y acceder a `http://localhost` o `http:<IP-de-la-VM>

## 📂 Ubicaciones de archivos clave

-   DocumentRoot: `/var/www/html/index.html`
-   Configuración principal: `/etc/httpd/conf/httpd.conf`
-   Logs:
    -   Acceso: `/var/log/httpd/access_log`
    -   Errores: `/var/log/httpd/error_log`
