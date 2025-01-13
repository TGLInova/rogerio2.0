<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Usuario;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Usuario::firstOrCreate([
            'email' => 'wallacemaxters@gmail.com',
        ], [
            'nome' => 'Wallace',
            'password' => bcrypt('wallacemaxters@gmail.com')
        ]);
    }
}
