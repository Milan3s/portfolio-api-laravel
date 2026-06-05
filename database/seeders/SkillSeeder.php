<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [

            /**
             * Laravel
             */
            [
                'user_id' => 1,
                'name' => 'Laravel',
                'icon' => 'devicon-laravel-plain',
                'description' => '
<li>Desarrollo de aplicaciones web modernas.</li>
<li>Arquitectura MVC y buenas prácticas.</li>
<li>Eloquent ORM y relaciones avanzadas.</li>
<li>Creación de APIs REST seguras y escalables.</li>
<li>Middleware, validaciones y autenticación.</li>
<li>Integración eficiente con MySQL.</li>
<li>Mantenimiento y evolución de aplicaciones empresariales.</li>
',
            ],

            /**
             * React.js
             */
            [
                'user_id' => 1,
                'name' => 'React.js',
                'icon' => 'devicon-react-original',
                'description' => '
<li>Desarrollo de interfaces modernas y dinámicas.</li>
<li>Creación de componentes reutilizables.</li>
<li>Gestión de estado mediante Hooks y Context API.</li>
<li>Integración con APIs REST.</li>
<li>Navegación avanzada con React Router.</li>
<li>Diseño responsive para múltiples dispositivos.</li>
<li>Aplicaciones SPA optimizadas para producción.</li>
',
            ],

            /**
             * MySQL
             */
            [
                'user_id' => 1,
                'name' => 'MySQL',
                'icon' => 'devicon-mysql-original',
                'description' => '
<li>Diseño de bases de datos relacionales.</li>
<li>Modelado y normalización de información.</li>
<li>Consultas SQL optimizadas.</li>
<li>Gestión de relaciones e índices.</li>
<li>Copias de seguridad y restauración.</li>
<li>Optimización del rendimiento.</li>
<li>Mantenimiento de entornos de producción.</li>
',
            ],

            /**
             * Docker
             */
            [
                'user_id' => 1,
                'name' => 'Docker',
                'icon' => 'devicon-docker-plain',
                'description' => '
<li>Contenerización de aplicaciones.</li>
<li>Gestión de entornos reproducibles.</li>
<li>Uso de Docker Compose.</li>
<li>Configuración de servicios y dependencias.</li>
<li>Despliegues consistentes entre entornos.</li>
<li>Optimización de procesos de desarrollo.</li>
<li>Preparación de aplicaciones para producción.</li>
',
            ],

            /**
             * Linux
             */
            [
                'user_id' => 1,
                'name' => 'Linux',
                'icon' => 'devicon-linux-plain',
                'description' => '
<li>Administración de sistemas Linux.</li>
<li>Gestión de usuarios y permisos.</li>
<li>Automatización mediante scripts Bash.</li>
<li>Configuración de servicios y servidores.</li>
<li>Monitorización de procesos y recursos.</li>
<li>Resolución de incidencias técnicas.</li>
<li>Gestión de entornos de desarrollo y producción.</li>
',
            ],

            /**
             * Soporte Técnico
             */
            [
                'user_id' => 1,
                'name' => 'Soporte Técnico',
                'icon' => 'fa-solid fa-headphones',
                'description' => '
<li>Resolución de incidencias hardware y software.</li>
<li>Soporte remoto y presencial a usuarios.</li>
<li>Instalación y configuración de equipos.</li>
<li>Mantenimiento preventivo y correctivo.</li>
<li>Diagnóstico y reparación de averías.</li>
<li>Configuración de redes y periféricos.</li>
<li>Documentación y seguimiento técnico.</li>
',
            ],

        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
