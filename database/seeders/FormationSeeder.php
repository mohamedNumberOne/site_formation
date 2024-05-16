<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::statement("INSERT INTO `formations` (`id`, `name`, `prix`, `description`, `photo_form`, `created_at`, `updated_at`) VALUES (NULL, 'Frontend (HTML, CSS, Js)\r\n\r\n', '10.000DA', '', '', NULL, NULL), (NULL, 'Backend (PHP, MySql, Pratique)', '10.000DA', '', '', NULL, NULL), (NULL, 'FullStack (HTML, CSS, Js, PHP, MySql, Pratique)', '10.000DA', '', '', NULL, NULL);
        ");
    }
}
