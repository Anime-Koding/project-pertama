<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('layouts')->insert([
            [
                'name' => 'Casual',
                'type' => 'C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Formal',
                'type' => 'F',
                'created_at' => now(),
                'updated_at' => now(),
            ],          
        ]);
    }
}
