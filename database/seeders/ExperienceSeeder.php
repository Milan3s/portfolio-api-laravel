<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::insert([

            [
                'id' => 1,

                'user_id' => 1,

                'company' => 'Manufacturas Ruiz S.A., Murcia',

                'position' => 'Software Developer - Full Stack',

                'description' => 'Mejora y desarrollo de aplicaciones de logística internas, optimizando interfaz, usabilidad y rendimiento en backend para aumentar la productividad del departamento.',

                'details' => 'Desarrollo de aplicaciones web a medida con PHP, JavaScript, jQuery y AJAX, orientadas a la optimización y automatización de procesos logísticos.
Implementación de sistemas de autenticación y control de acceso (RBAC), mejorando la seguridad y gestión de usuarios en las aplicaciones.
Diseño, mantenimiento y optimización de bases de datos MySQL, incluyendo consultas SQL avanzadas, refactorización de código legacy e integración de funcionalidades con códigos QR.',

                'icon' => 'fa-solid fa-code',

                'color' => '#4F6BFF',

                'start_date' => '2024-04-01',

                'end_date' => '2024-07-01',

                'currently_working' => false,

                'created_at' => now(),

                'updated_at' => now(),
            ],

            [
                'id' => 2,

                'user_id' => 1,

                'company' => 'NTTDATA Spain Centers S.L.U.',

                'position' => 'Web Developer - Drupal Backend Developer',

                'description' => 'Desarrollo de mejoras evolutivas en foro corporativo en Drupal para Telefónica, incrementando la usabilidad y mejorando la experiencia del usuario final.',

                'details' => 'Desarrollo backend en Drupal 8, 9 y 10, incluyendo creación de módulos personalizados, site building e integración de APIs REST en entornos de producción.
Gestión de código con Git y trabajo en metodologías ágiles (Jira) para planificación, seguimiento y entrega de tareas en equipo.
Optimización de rendimiento en aplicaciones web mediante SQL/MySQL, junto con la integración de funcionalidades en JavaScript/jQuery y mejora de la experiencia de usuario (UX).',

                'icon' => 'fa-brands fa-drupal',

                'color' => '#4F6BFF',

                'start_date' => '2021-12-01',

                'end_date' => '2023-03-01',

                'currently_working' => false,

                'created_at' => now(),

                'updated_at' => now(),
            ],

            [
                'id' => 3,

                'user_id' => 1,

                'company' => 'Welayer Technology, Murcia',

                'position' => 'Front-End Developer - FCT DAM',

                'description' => 'Colaboración en el desarrollo de la aplicación en React Native, implementando componentes y mejoras funcionales alineadas con la arquitectura existente.',

                'details' => 'Desarrollo de librería interna de iconos reutilizable en React Native + TypeScript, con componentes dinámicos y configurables (SVG, estilos, validaciones), integrada en aplicaciones Android e iOS.
Diseño e implementación de arquitectura modular y escalable, utilizando Metro Bundler, Babel (alias), barrel files y namespaces, con tipado fuerte en TypeScript e integración eficiente de SVG como componentes.
Automatización de procesos mediante Bash scripting para gestión masiva de recursos SVG, junto con configuración de entorno (Node.js, Yarn, nvm en Ubuntu) y control de versiones con Git/GitHub en entornos ágiles (Jira, documentación técnica).',

                'icon' => 'fa-brands fa-react',

                'color' => '#4F6BFF',

                'start_date' => '2026-01-01',

                'end_date' => '2026-03-01',

                'currently_working' => false,

                'created_at' => now(),

                'updated_at' => now(),
            ]

        ]);
    }
}
