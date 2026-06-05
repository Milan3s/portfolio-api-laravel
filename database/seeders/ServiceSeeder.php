<?php

namespace Database\Seeders;

use App\Models\Service;

use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [

            /**
             * Desarrollo Web
             */
            [
                'user_id' => 1,

                'title' => 'Desarrollo de aplicaciones web',

                'slug' => Str::slug(
                    'Desarrollo de aplicaciones web'
                ),

                'icon' => 'fa-code',

                'description' => '
<li>Desarrollo de aplicaciones web personalizadas.</li>
<li>Creación de APIs REST modernas.</li>
<li>Paneles de administración y gestión.</li>
<li>Integración con bases de datos.</li>
<li>Automatización de procesos empresariales.</li>
<li>Arquitectura escalable y mantenible.</li>
<li>Diseño responsive para todos los dispositivos.</li>
',
            ],

            /**
             * WordPress
             */
            [
                'user_id' => 1,

                'title' => 'Desarrollo y soporte WordPress',

                'slug' => Str::slug(
                    'Desarrollo y soporte WordPress'
                ),

                'icon' => 'devicon-wordpress-plain',

                'description' => '
<li>Creación de sitios web profesionales.</li>
<li>Recuperación de accesos y cuentas.</li>
<li>Optimización de rendimiento.</li>
<li>Actualización de plugins y temas.</li>
<li>Corrección de errores críticos.</li>
<li>Mantenimiento preventivo.</li>
<li>Mejora de seguridad y estabilidad.</li>
',
            ],

            /**
             * PrestaShop
             */
            [
                'user_id' => 1,

                'title' => 'Soporte y recuperación PrestaShop',

                'slug' => 'fa-cart-shopping',

                'icon' => 'fa-cart-shopping',

                'description' => '
<li>Recuperación de Backoffice.</li>
<li>Restauración de Front-office.</li>
<li>Resolución de incidencias técnicas.</li>
<li>Optimización de rendimiento.</li>
<li>Configuración de módulos.</li>
<li>Corrección de errores de instalación.</li>
<li>Mantenimiento de tiendas online.</li>
',
            ],

            /**
             * Formateo
             */
            [
                'user_id' => 1,

                'title' => 'Formateo y mantenimiento',

                'slug' => Str::slug(
                    'Formateo y mantenimiento'
                ),

                'icon' => 'fa-computer',

                'description' => '
<li>Instalación limpia de sistemas operativos.</li>
<li>Optimización del rendimiento del equipo.</li>
<li>Actualización de drivers y software.</li>
<li>Eliminación de malware y archivos innecesarios.</li>
<li>Configuración inicial del sistema.</li>
<li>Mantenimiento preventivo.</li>
<li>Preparación de equipos para uso profesional.</li>
',
            ],

            /**
             * Aplicaciones
             */
            [
                'user_id' => 1,

                'title' => 'Instalación de aplicaciones',

                'slug' => Str::slug(
                    'Instalación de aplicaciones'
                ),

                'icon' => 'fa-window-maximize',

                'description' => '
<li>Instalación de software profesional.</li>
<li>Configuración de Microsoft Office.</li>
<li>Instalación de navegadores y utilidades.</li>
<li>Configuración de herramientas de trabajo.</li>
<li>Optimización de aplicaciones.</li>
<li>Resolución de incompatibilidades.</li>
<li>Puesta a punto del entorno de trabajo.</li>
',
            ],

            /**
             * Móviles
             */
            [
                'user_id' => 1,

                'title' => 'Soporte para móviles y tablets',

                'slug' => Str::slug(
                    'Soporte para móviles y tablets'
                ),

                'icon' => 'fa-mobile-screen',

                'description' => '
<li>Configuración inicial de dispositivos.</li>
<li>Sincronización de cuentas y servicios.</li>
<li>Instalación de aplicaciones.</li>
<li>Optimización del rendimiento.</li>
<li>Resolución de incidencias comunes.</li>
<li>Configuración de copias de seguridad.</li>
<li>Asistencia técnica para Android y tablets.</li>
',
            ],

        ];

        foreach ($services as $service) {

            Service::updateOrCreate(
                [
                    'slug' => $service['slug'],
                ],
                $service
            );
        }
    }
}
