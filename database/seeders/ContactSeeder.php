<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::insert([

            [
                'id' => 1,

                'user_id' => 1,

                'name' => 'Carlos Martínez',

                'email' => 'carlos@example.com',

                'subject' => 'Desarrollo de aplicación web',

                'message' => 'Hola David, estoy interesado en desarrollar una aplicación web para mi empresa. Me gustaría conocer presupuesto y tiempos aproximados.',

                'status' => 'PENDING',

                'hidden' => false,

                'ip_address' => '127.0.0.1',

                'user_agent' => 'Mozilla/5.0 Chrome/136.0',

                'replied_at' => null,

                'created_at' => now(),

                'updated_at' => now(),
            ],

            [
                'id' => 2,

                'user_id' => 1,

                'name' => 'Laura Sánchez',

                'email' => 'laura@example.com',

                'subject' => 'Colaboración freelance',

                'message' => 'Buenas, he visto tu portfolio y me gustaría hablar sobre una posible colaboración freelance para un proyecto React + Laravel.',

                'status' => 'READ',

                'hidden' => false,

                'ip_address' => '127.0.0.1',

                'user_agent' => 'Mozilla/5.0 Firefox/125.0',

                'replied_at' => now(),

                'created_at' => now(),

                'updated_at' => now(),
            ]

        ]);
    }
}
