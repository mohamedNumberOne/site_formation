<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("INSERT INTO `activities` 
        (`id`, `name`, `created_at`, `updated_at`) 
        VALUES 
        (NULL, 'Etudient', NULL, NULL), 
        (NULL, 'Travailleur ', NULL, NULL), 
        (NULL, 'Autre ', NULL, NULL);");
    }
}

