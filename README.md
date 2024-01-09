# Expensas Online

### Prerrequisitos
- Asegúrate de tener Docker instalado en tu máquina.

1. Clona el repositorio desde GitHub:

    ```bash
    git clone https://github.com/tu-usuario/tu-proyecto.git
    ```
2. Acceder a la carpeta de expensas-online:
    ```bash
    cd expensas-online
    ```
3. Configurar la base de datos:   
    ```bash
   application/config/database.php
   
4. Importar la base de datos ubicada en la carpeta database.


5. Levantar el docker
   ```bash
    docker-compose up -d
    ```
6. Acceder al sitio (se puede editar el puerto desde el archivo docker-compose.yml)
   ```bash
    http://localhost:8090
    ```
    

# API Endpoints

## Crear Cliente
Endpoint: `POST /create_customer`

Descripción: Crea un nuevo cliente.

### Parámetros de entrada
- `name` (string): Nombre del cliente.
- `email` (string): Correo electrónico del cliente.
- `charge_type` (string): Tipo de cargo del cliente.

---

## Crear Suscripción
Endpoint: `POST /create_subscription`

Descripción: Crea una nueva suscripción.

### Parámetros de entrada
- `customer_id` (int): ID del cliente.
- `plan_id` (int): ID del plan.
- `active` (boolean): Estado de activación de la suscripción.

---

## Suscripciones Activas
Endpoint: `GET /active_subscription`

Descripción: Obtiene las suscripciones activas.

### Respuesta
La respuesta será en formato JSON y contendrá la información de las suscripciones activas.

---

## Generar Lote de Cobro
Endpoint: `POST /generate_lote`

Descripción: Genera un lote de cobro con las suscripciones activas.

### Parámetros de entrada
(No se requieren parámetros específicos)

---

## Detalle del Lote de Cobro
Endpoint: `GET /details_lote`

Descripción: Obtiene el detalle del lote de cobro para un periodo específico.

### Parámetros de entrada
- `period` (string): Periodo para el cual se desea obtener el detalle del lote.

### Respuesta
La respuesta será en formato JSON y contendrá el detalle del lote de cobro para el periodo especificado.

---

## Resumen del Lote de Cobro
Endpoint: `GET /summary_lote`

Descripción: Obtiene el monto total y la cantidad de cobros por lote.

### Respuesta
La respuesta será en formato JSON y contendrá el monto total y la cantidad de cobros por lote.
