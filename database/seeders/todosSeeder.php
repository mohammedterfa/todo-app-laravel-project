<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todos;


class todosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Todos::factory()->count(10)->create(); 
    }
}