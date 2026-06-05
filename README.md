# Comandos básicos Laravel API

---

# Crear proyecto Laravel

```bash
composer create-project laravel/laravel portfolio-api
```

---

# Entrar al proyecto

```bash
cd portfolio-api
```

---

# Levantar servidor

```bash
php artisan serve
```

---

# Generar APP_KEY

```bash
php artisan key:generate
```

---

# Limpiar cachés

```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
php artisan optimize:clear
php artisan route:list
```

---

# Ejecutar migraciones

```bash
php artisan migrate
```

---

# Rehacer migraciones

```bash
php artisan migrate:fresh
```

---

# Rehacer migraciones + seeders

```bash
php artisan migrate:fresh --seed
```

---

# Ejecutar seeders

```bash
php artisan db:seed
```

---

# Crear modelo + migración + factory + seeder + controlador

```bash
php artisan make:model Project -mfsc
```

---

# Crear controlador API

```bash
php artisan make:controller Api/ProjectController --api
```

---

# Crear request validation

```bash
php artisan make:request StoreProjectRequest
```

---

# Crear API Resource

```bash
php artisan make:resource ProjectResource
```

---

# Crear Seeder

```bash
php artisan make:seeder ProjectSeeder
```

---

# Crear Factory

```bash
php artisan make:factory ProjectFactory
```

---

# Crear Middleware

```bash
php artisan make:middleware AdminMiddleware
```

---

# Crear Policy

```bash
php artisan make:policy ProjectPolicy --model=Project
```

---

# Crear Service

```bash
php artisan make:class Services/ProjectService
```

---

# Crear Job

```bash
php artisan make:job SendContactEmailJob
```

---

# Crear Event

```bash
php artisan make:event ContactCreated
```

---

# Crear Listener

```bash
php artisan make:listener SendNotificationListener
```

---

# Instalar Sanctum

```bash
composer require laravel/sanctum
```

---

# Publicar Sanctum

```bash
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
```

---

# Migrar Sanctum

```bash
php artisan migrate
```

---

# Crear enlace storage

```bash
php artisan storage:link
```

---

# Ver rutas

```bash
php artisan route:list
```

---

# Ver comandos artisan

```bash
php artisan list
```

---

# Generar documentación IDE

```bash
php artisan ide-helper:generate
```

---

# Instalar dependencias frontend

```bash
npm install
```

---

# Ejecutar Vite

```bash
npm run dev
```

---

# Build producción

```bash
npm run build
```

---

# Rutas API

## routes/api.php

```php
use App\Http\Controllers\Api\ProjectController;

Route::apiResource('projects', ProjectController::class);
```

---

# Rutas protegidas Sanctum

```php
Route::middleware('auth:sanctum')->group(function () {

    Route::apiResource('projects', ProjectController::class);

});
```

---

Ordenar las tecnologias dse los proyectos : 


UPDATE project_technologies
SET sort_order = CASE

    /* =========================
       Mi Farmacia en Casa
       React -> Express -> MySQL
    ========================= */

    WHEN project_id = 1 AND technology_id = 8 THEN 1
    WHEN project_id = 1 AND technology_id = 9 THEN 2
    WHEN project_id = 1 AND technology_id = 7 THEN 3

    /* =========================
       Control Gastos Hogar
       JavaFX -> POO -> MySQL
    ========================= */

    WHEN project_id = 2 AND technology_id = 14 THEN 1
    WHEN project_id = 2 AND technology_id = 15 THEN 2
    WHEN project_id = 2 AND technology_id = 7 THEN 3

    /* =========================
       Gestor Peluquería
       PHP -> JavaScript -> MySQL
    ========================= */

    WHEN project_id = 3 AND technology_id = 16 THEN 1
    WHEN project_id = 3 AND technology_id = 12 THEN 2
    WHEN project_id = 3 AND technology_id = 7 THEN 3

    /* =========================
       Agenda Contactos
       JavaFX -> POO -> MySQL
    ========================= */

    WHEN project_id = 4 AND technology_id = 14 THEN 1
    WHEN project_id = 4 AND technology_id = 15 THEN 2
    WHEN project_id = 4 AND technology_id = 7 THEN 3

    /* =========================
       Sistema CRA
       EN CONSTRUCCIÓN
    ========================= */

    WHEN project_id = 5 AND technology_id = 17 THEN 1

    ELSE sort_order

END;
