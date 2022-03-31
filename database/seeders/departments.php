<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class departments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            ["name"=>"Computer Science"],
            ["name"=>"Electronics & Communication"],
            ["name"=>"Mechanical"],
            ["name"=>"IT"],
            ]);
    }
}
