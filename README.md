# 🚀 CRUD de Usuarios - DEMO S.A.

Este proyecto es un sistema web que permite **crear, leer, actualizar, eliminar y buscar usuarios** utilizando:

- 🐘 PHP (POO)
- 🗃️ MySQL
- 🎨 Bootstrap 5
- 🌐 Fetch API (JavaScript)
- 🔌 API RESTful
- 🧪 Postman para pruebas

---

## 📦 Estructura del Proyecto
demo_crud/
├── api/ # Endpoints REST (create, read, update, delete, search)
├── config/ # Configuración de la base de datos (PDO)
├── public/ # Interfaz web (index.html con Bootstrap)
├── Usuario.php # Clase PHP con métodos CRUD
├── test_db.php # Script para probar conexión
└── README.md # Este archivo


---

## ⚙️ Requisitos

- PHP 7.x o superior
- MySQL 5.7+ o MariaDB
- XAMPP o equivalente (Apache + MySQL)
- Navegador moderno
- Editor como Visual Studio Code (opcional)

---

## 🏗️ Instalación y Ejecución

1. Clona o copia el proyecto dentro de `C:\xampp\htdocs`:

```bash
C:\xampp\htdocs\demo_crud
    Abre XAMPP y activa:

        Apache

        MySQL

    Crea la base de datos:

Accede a http://localhost/phpmyadmin y ejecuta el siguiente SQL:

CREATE DATABASE demo_db;
USE demo_db;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    rol VARCHAR(50) NOT NULL,
    empresa VARCHAR(100) NOT NULL
);

Abre el navegador y entra a:

http://localhost/demo_crud/public/index.html


