<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [

            /**
             * Mi Farmacia en Casa
             */
            [
                'user_id' => 1,

                'title' => 'Mi Farmacia en Casa',

                'slug' => 'mi-farmacia-en-casa',

                'description' => 'Aplicación Full Stack para la gestión de medicamentos, inventario y control de farmacia doméstica.',

                'icon' => 'fa-solid fa-pills',

                'type' => 'Full Stack',

                'technologies' => '

<li class="desktop-project-technology">
    <i class="devicon-react-original colored"></i>
    <span>React</span>
</li>

<li class="desktop-project-technology">
    <i class="devicon-express-original"></i>
    <span>Express</span>
</li>

<li class="desktop-project-technology">
    <i class="devicon-mysql-original colored"></i>
    <span>MySQL</span>
</li>

',

                'github_url' => 'https://github.com/Milan3s/mi-farmacia-en-casa',

                'video_url' => null,

                'status' => 'Disponible',
            ],

            /**
             * Control Gastos Hogar
             */
            [
                'user_id' => 1,

                'title' => 'Control Gastos Hogar',

                'slug' => 'control-gastos-hogar',

                'description' => 'Aplicación de escritorio desarrollada con JavaFX y MySQL para gestionar gastos, compras y finanzas del hogar de forma rápida y sencilla.',

                'icon' => 'fa-solid fa-wallet',

                'type' => 'Desktop',

                'technologies' => '

<li class="desktop-project-technology">
    <i class="devicon-java-plain colored"></i>
    <span>JavaFX</span>
</li>

<li class="desktop-project-technology">
    <i class="fa-solid fa-cubes"></i>
    <span>POO</span>
</li>

<li class="desktop-project-technology">
    <i class="devicon-mysql-original colored"></i>
    <span>MySQL</span>
</li>

',

                'github_url' => 'https://github.com/Milan3s/xxx',

                'video_url' => null,

                'status' => 'Disponible',
            ],

            /**
             * Gestor de Citas para Peluquería
             */
            [
                'user_id' => 1,

                'title' => 'Gestor de Citas para Peluquería',

                'slug' => 'gestor-citas-peluqueria',

                'description' => 'Aplicación web para la gestión de citas y reservas en peluquerías, permitiendo organizar turnos, clientes y horarios de forma rápida y eficiente.',

                'icon' => 'fa-solid fa-calendar-days',

                'type' => 'Full Stack',

                'technologies' => '

<li class="desktop-project-technology">
    <i class="devicon-php-plain colored"></i>
    <span>PHP</span>
</li>

<li class="desktop-project-technology">
    <i class="devicon-javascript-plain colored"></i>
    <span>JavaScript</span>
</li>

<li class="desktop-project-technology">
    <i class="devicon-mysql-original colored"></i>
    <span>MySQL</span>
</li>

',

                'github_url' => null,

                'video_url' => null,

                'status' => 'En desarrollo',
            ],

            /**
             * Agenda de Contactos
             */
            [
                'user_id' => 1,

                'title' => 'Agenda de Contactos',

                'slug' => 'agenda-contactos',

                'description' => 'Aplicación de escritorio desarrollada en JavaFX para la gestión de contactos personales y profesionales.',

                'icon' => 'fa-solid fa-address-book',

                'type' => 'Desktop',

                'technologies' => '

<li class="desktop-project-technology">
    <i class="devicon-java-plain colored"></i>
    <span>JavaFX</span>
</li>

<li class="desktop-project-technology">
    <i class="fa-solid fa-cubes"></i>
    <span>POO</span>
</li>

<li class="desktop-project-technology">
    <i class="devicon-mysql-original colored"></i>
    <span>MySQL</span>
</li>

',

                'github_url' => 'https://github.com/Milan3s/Proyecto_AGENDA_DAW-19-21',

                'video_url' => null,

                'status' => 'Disponible',
            ],

            /**
             * Sistema CRA para Información
             */
            [
                'user_id' => 1,

                'title' => 'Sistema CRA para Información',

                'slug' => 'sistema-cra-informacion',

                'description' => 'Aplicación JavaFX para la recopilación y gestión de información de centros educativos.',

                'icon' => 'fa-solid fa-school',

                'type' => 'Desktop',

                'technologies' => '

<li class="desktop-project-technology">
    <i class="fa-solid fa-screwdriver-wrench"></i>
    <span>En construcción</span>
</li>

',

                'github_url' => 'https://github.com/Milan3s/Proyecto_CRA_DAM-24-25',

                'video_url' => null,

                'status' => 'En construcción',
            ],

        ];

        foreach ($projects as $project) {

            Project::create($project);
        }
    }
}
