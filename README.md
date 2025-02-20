# API REST básica con Slim y MySQL

Este proyecto es una API REST simple construida usando Slim Framework y MySQL. Proporciona operaciones CRUD básicas para la gestión de productos.

## Instalación

1. Clona el repositorio:
    ```bash
    git clone https://github.com/yourusername/sample-rest-api.git
    ```

2. Navega al directorio del proyecto:
    ```bash
    cd sample-rest-api
    ```

3. Instala las dependencias usando Composer:
    ```bash
    composer install
    ```

4. Crea una base de datos MySQL e importa el archivo SQL proporcionado:
    ```sql
    CREATE DATABASE sample_api;
    USE sample_api;
    SOURCE path/to/your/sql/sample_api.sql
    ```

5. Actualiza la configuración de la base de datos en `db.php`:
    ```php
    // filepath: /c:/xampp/htdocs/sample-rest-api/db.php
    <?php
    $host = 'localhost';
    $dbname = 'sample_api';
    $username = 'root';
    $password = '';
    $mysqli = new mysqli($host, $username, $password, $dbname);
    if ($mysqli->connect_error) {
        die('Error de conexión: ' . $mysqli->connect_error);
    }
    ?>
    ```

## Uso

1. Inicia el servidor PHP integrado:
    ```bash
    php -S localhost:8000 -t public
    ```

2. Usa un cliente API como Postman o cURL para interactuar con la API.

### Nota

Si prefieres utilizar otro servidor como XAMPP, puedes eliminar la configuración del servidor PHP integrado del archivo `composer.json`. Simplemente elimina o comenta la sección correspondiente.

### Endpoints

- **GET /product**: Obtener todos los productos.
- **GET /product/{id}**: Obtener un producto por ID.
- **POST /product**: Crear un nuevo producto.
- **PUT /product/{id}**: Actualizar un producto por ID.
- **DELETE /product/{id}**: Eliminar un producto por ID.

### Ejemplos de Peticiones

- **GET /product**
    ```bash
    curl -X GET http://localhost:8000/sample-rest-api/product
    ```

- **POST /product**
    ```bash
    curl -X POST http://localhost:8000/sample-rest-api/product \
    -H "Content-Type: application/json" \
    -d '{"name": "Nuevo Producto", "price": 99.99}'
    ```

- **PUT /product/{id}**
    ```bash
    curl -X PUT http://localhost:8000/sample-rest-api/product/1 \
    -H "Content-Type: application/json" \
    -d '{"name": "Producto Actualizado", "price": 79.99}'
    ```

- **DELETE /product/{id}**
    ```bash
    curl -X DELETE http://localhost:8000/sample-rest-api/product/1
    ```

## Licencia

Este proyecto está licenciado bajo la Licencia CC BY-NC-ND 4.0. Esto significa que puedes compartir el proyecto siempre que cites al autor, no lo uses para fines comerciales y no realices obras derivadas.
