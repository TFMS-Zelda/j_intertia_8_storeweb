<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Autor;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Autor::factory(64)->create();

    }
}
