<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# 📚 API de Biblioteca Laravel AOO

Esta API permite gestionar libros y registrar préstamos en una biblioteca. Está desarrollada con Laravel siguiendo los principios de la arquitectura orientada a objetos.

---

## 📦 Funcionalidades disponibles

### 1. Listar Libros

- **Método:** `GET`
- **Ruta:** `/api/libros`
- **Descripción:** Devuelve un listado de todos los libros.

**Ejemplo de respuesta:**
```json
[
  {
    "id": 1,
    "nombre": "Laravel desde cero",
    "codigo": "LAR001",
    "autor": "Juan Pérez"
  }
]
```

---

### 2. Registrar Libro

- **Método:** `POST`
- **Ruta:** `/api/libros`
- **Headers:**
  - `Content-Type: application/json`
- **Body:**
```json
{
  "nombre": "Introducción a Laravel",
  "codigo": "LAR002",
  "autor": "Edwin Dev"
}
```

**Respuesta esperada:**
- Código: `201 Created`
- Contenido: Libro registrado.

---

### 3. Actualizar Libro

- **Método:** `PUT`
- **Ruta:** `/api/libros/{id}`
- **Headers:**
  - `Content-Type: application/json`
- **Body:**
```json
{
  "nombre": "Laravel avanzado",
  "codigo": "LAR003",
  "autor": "Edwin Actualizado"
}
```

**Respuesta esperada:**
- Código: `200 OK`
- Contenido: Libro actualizado.

---

### 4. Registrar Préstamo

- **Método:** `POST`
- **Ruta:** `/api/prestamos`
- **Headers:**
  - `Content-Type: application/json`
- **Body:**
```json
{
  "fecha": "2025-04-23",
  "lector": "Ana Martínez",
  "libro_id": 1
}
```

**Respuesta esperada:**
- Código: `201 Created`
- Contenido: Préstamo registrado.

---

### 5. Listar Autores

**Método:** GET  
**Ruta:** `/api/autores`  
**Descripción:** Devuelve un listado de todos los autores registrados.

**Ejemplo de respuesta:**
```json
[
  {
    "id": 1,
    "nombre": "Juan Pérez"
  },
  {
    "id": 2,
    "nombre": "Edwin Dev"
  }
]
```

---

### 6. Registrar Autor

**Método:** POST  
**Ruta:** `/api/autores`  
**Headers:**
- Content-Type: application/json

**Body:**
```json
{
  "nombre": "Nuevo Autor"
}
```

**Respuesta esperada:**
- **Código:** 201 Created  
- **Contenido:** Autor registrado.

---

### 7. Actualizar Autor

**Método:** PUT  
**Ruta:** `/api/autores/{id}`  
**Headers:**
- Content-Type: application/json

**Body:**
```json
{
  "nombre": "Nombre Actualizado"
}
```

**Respuesta esperada:**
- **Código:** 200 OK  
- **Contenido:** Autor actualizado.

---

### 8. Eliminar Préstamo

**Método:** DELETE  
**Ruta:** `/api/prestamos/{id}`  
**Descripción:** Elimina un préstamo existente por su ID.

**Respuesta esperada:**
- **Código:** 200 OK  
- **Contenido:** Préstamo eliminado.

---

## 🧠 Patrones de Diseño Aplicados

- **Factory:** Para la creación de entidades en pruebas y servicios.
- **Facade:** Para simplificar el acceso a la lógica de negocio compleja.
- **Observer:** Reacciona automáticamente ante eventos como la eliminación de un préstamo.

---

## 🛠 Requisitos

- PHP >= 8.2.12  
- Composer  
- Laravel 12  
- MySQL  
- Postman (para pruebas)

---

## 📂 Organización del Código

- `Controllers`: `LibroController`, `AutorController`, `PrestamoController`.
- `Requests`: Validaciones como `LibroRequest`, `AutorRequest`.
- `Services`: Lógica encapsulada en `LibroService`, `AutorService`, `PrestamoService`.
- `Observers`: `PrestamoObserver`, asociado al modelo `Prestamo`.
- `Models`: `Autor`, `Libro`, `Prestamo`.

---

## 📸 Capturas recomendadas (Postman)

Agrega también capturas de pantalla para:

- `GET /api/autores`
- `POST /api/autores`
- `PUT /api/autores/{id}`
- `DELETE /api/prestamos/{id}`

Incluye la solicitud y la respuesta para demostrar el correcto funcionamiento.

---

## 👨‍💻 Autor

Desarrollado por: Kevin Zanga  
Fecha: 2 de Mayo 2025


