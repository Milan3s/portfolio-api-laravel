<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Home;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Home::create([

            'user_id' => 1,

            'name' => 'David',

            'full_name' => 'David Milanés',

            'headline' => 'Especializado en React, Laravel y Spring Boot',

            'description' => 'Desarrollador de software enfocado en la creación de aplicaciones web modernas, escalables y optimizadas. Experiencia en frontend y backend trabajando con tecnologías como React, Laravel, Java, Spring Boot y MySQL. Apasionado por la arquitectura limpia, el rendimiento y el desarrollo de soluciones robustas adaptadas a las necesidades reales de negocio.',

            'badge_text' => 'Disponible para nuevos proyectos',

            'years_experience' => 3,

            'is_active' => true,

            'logo_url' => 'logo.png'
        ]);
    }
}
