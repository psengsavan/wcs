<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgronauteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("agronautes")->insert([
            ["name" => "Eleftheria"],
            ["name" => "Gennadios"],
            ["name" => "Lysimachos"],
        ]);
    }
}
