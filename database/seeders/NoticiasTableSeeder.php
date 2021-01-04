<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Noticias;

class NoticiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Noticias::factory()->count(100)->create(); 


    }
}

  
//php artisan db:seed

