### 🔹 Fase 4: Implementacion de scripts para automatizacion de tareas

🧰 scripts-basico.md

📌 Introducción

Breve explicación de qué es un script Bash y por qué es útil automatizar tareas en entornos Linux.

🧾 Estructura de un Script Básic

```bash
#!/bin/bash
# Comentario: este script muestra "Hola, mundo"
echo "Hola, mundo"
```

⚙️ Cómo crear y ejecutar un scrip

```bash
sudo vim hola.sh
```

--- Le damos permisos de ejecución al archivo

```bash
sudo chmod +x hola.sh
```

--- Ejecutamos el archivo

```bash
sudo ./hola.sh
```

--- dakardu@localhost:~/scripts$ ./hola.sh
Hola, Dagoberto
dakardu@localhost:~/scripts$

🔁 Variables y condicionales simple

--- dakardu@localhost:~/scripts$ cat hola.sh
#!/bin/bash
nombre="Dagoberto"
if [ $nombre == "Dagoberto" ]; then
echo "Hola, $nombre"
fi
dakardu@localhost:~/scripts$

🔄 Bucle

```bash
sudo vim itera.sh
sudo chmod +x itera.sh
```

dakardu@localhost:~/scripts$ cat itera.sh
#!/bin/bash
for i in {1..5}; do
echo "Iteracion: $i"
done
dakardu@localhost:~/scripts$

```bash
sudo ./itera.sh
```

dakardu@localhost:~/scripts$ ./itera.sh
Iteracion: 1
Iteracion: 2
Iteracion: 3
Iteracion: 4
Iteracion: 5

🧹 Automatización de tareas comunes
--- Actualizar el sistema automaticamente
--- Respaldar archivos o directorios
--- Limpiar archivos temporales

Para terminar haremos un laboratorio práctico, como:
📁 Crear un script que instale paquetes y configure servicios básicos
🔐 Script para revisar el estado del firewall y SELinux
🗓️ Script de mantenimiento programado vía cron
