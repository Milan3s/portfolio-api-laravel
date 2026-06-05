<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $education = [

            /**
             * =========================
             * FP SUPERIOR DAM
             * =========================
             */
            [
                'user_id' => 1,

                'title' => 'Desarrollo de Aplicaciones Multiplataforma',

                'subtitle' => 'Grado Superior',

                'institution' => 'IES ALFONSO X EL SABIO',

                'location' => 'Murcia, España',

                'education_level' => 'Grado Superior',

                'plan' => 'DAM',

                'start_year' => '2024',

                'end_year' => '2026',

                'status' => 'Finalizado',

                'fct_status' => 'APTO',

                'project_grade' => '8,0',

                'certificate_type' => null,

                'provider' => null,

                'modules' => json_encode([
                    'Programación',
                    'Acceso a datos',
                    'Desarrollo de interfaces',
                    'Programación multimedia',
                ]),

                'icon' => 'fa-solid fa-laptop-code',

                'color' => '#3B82F6',

                'type' => 'graduate',

                'order_index' => 1,

                'is_visible' => true,
            ],

            /**
             * =========================
             * FP SUPERIOR DAW
             * =========================
             */
            [
                'user_id' => 1,

                'title' => 'Desarrollo de Aplicaciones Web',

                'subtitle' => 'Grado Superior',

                'institution' => 'CIFP CARLOS III',

                'location' => 'Cartagena, España',

                'education_level' => 'Grado Superior',

                'plan' => 'DAW',

                'start_year' => '2018',

                'end_year' => '2021',

                'status' => 'Finalizado',

                'fct_status' => 'APTO',

                'project_grade' => '7,0',

                'certificate_type' => null,

                'provider' => null,

                'modules' => json_encode([
                    'Desarrollo web cliente',
                    'Desarrollo web servidor',
                    'Despliegue web',
                    'Interfaces web',
                ]),

                'icon' => 'fa-solid fa-code',

                'color' => '#10B981',

                'type' => 'graduate',

                'order_index' => 2,

                'is_visible' => true,
            ],

            /**
             * =========================
             * FP MEDIO SMR
             * =========================
             */
            [
                'user_id' => 1,

                'title' => 'Sistemas Microinformáticos y Redes',

                'subtitle' => 'Grado Medio',

                'institution' => 'IES INGENIERO DE LA CIERVA',

                'location' => 'Murcia, España',

                'education_level' => 'Grado Medio',

                'plan' => 'SMR',

                'start_year' => '2013',

                'end_year' => '2015',

                'status' => 'Finalizado',

                'fct_status' => 'APTO',

                'project_grade' => '6,0',

                'certificate_type' => null,

                'provider' => null,

                'modules' => json_encode([
                    'Montaje y mantenimiento',
                    'Sistemas operativos',
                    'Redes locales',
                    'Seguridad informática',
                ]),

                'icon' => 'fa-solid fa-server',

                'color' => '#F59E0B',

                'type' => 'graduate',

                'order_index' => 3,

                'is_visible' => true,
            ],

            /**
             * =========================
             * DOCKER
             * =========================
             */
            [
                'user_id' => 1,

                'title' => 'Docker y contenedores',

                'subtitle' => null,

                'institution' => 'Udemy',

                'location' => null,

                'education_level' => null,

                'plan' => null,

                'start_year' => '2024',

                'end_year' => '2024',

                'status' => 'COMPLETADO',

                'fct_status' => null,

                'project_grade' => null,

                'certificate_type' => 'Certificado de finalización',

                'provider' => 'Udemy',

                'modules' => json_encode([
                    'Docker',
                    'Docker Compose',
                    'Containers',
                ]),

                'icon' => 'fa-brands fa-docker',

                'color' => '#2496ED',

                'type' => 'udemy',

                'order_index' => 4,

                'is_visible' => true,
            ],

            /**
             * =========================
             * GIT & GITHUB
             * =========================
             */
            [
                'user_id' => 1,

                'title' => 'Git y GitHub Profesional',

                'subtitle' => null,

                'institution' => 'Udemy',

                'location' => null,

                'education_level' => null,

                'plan' => null,

                'start_year' => '2023',

                'end_year' => '2023',

                'status' => 'COMPLETADO',

                'fct_status' => null,

                'project_grade' => null,

                'certificate_type' => 'Certificado de finalización',

                'provider' => 'Udemy',

                'modules' => json_encode([
                    'Git',
                    'GitHub',
                    'Branches',
                    'Merge',
                ]),

                'icon' => 'fa-brands fa-git-alt',

                'color' => '#F97316',

                'type' => 'udemy',

                'order_index' => 5,

                'is_visible' => true,
            ],

            /**
             * =========================
             * MICROSERVICIOS
             * =========================
             */
            [
                'user_id' => 1,

                'title' => 'Microservicios y Arquitectura',

                'subtitle' => null,

                'institution' => 'Udemy',

                'location' => null,

                'education_level' => null,

                'plan' => null,

                'start_year' => '2024',

                'end_year' => '2024',

                'status' => 'COMPLETADO',

                'fct_status' => null,

                'project_grade' => null,

                'certificate_type' => 'Certificado de finalización',

                'provider' => 'Udemy',

                'modules' => json_encode([
                    'Microservicios',
                    'Arquitectura',
                    'REST APIs',
                ]),

                'icon' => 'fa-solid fa-cubes',

                'color' => '#A855F7',

                'type' => 'udemy',

                'order_index' => 6,

                'is_visible' => true,
            ],

            /**
             * =========================
             * LARAVEL APIs REST
             * =========================
             */
            [
                'user_id' => 1,

                'title' => 'Laravel: APIs REST',

                'subtitle' => null,

                'institution' => 'Udemy',

                'location' => null,

                'education_level' => null,

                'plan' => null,

                'start_year' => '2024',

                'end_year' => '2024',

                'status' => 'COMPLETADO',

                'fct_status' => null,

                'project_grade' => null,

                'certificate_type' => 'Certificado de finalización',

                'provider' => 'Udemy',

                'modules' => json_encode([
                    'Laravel',
                    'REST APIs',
                    'Backend',
                ]),

                'icon' => 'devicon-laravel-plain',

                'color' => '#FF2D20',

                'type' => 'udemy',

                'order_index' => 7,

                'is_visible' => true,
            ],
        ];

        foreach ($education as $item) {
            Education::create($item);
        }
    }
}
