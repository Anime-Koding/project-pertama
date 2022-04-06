<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            [
                'name' => 'Experience System'
            ],
            [
                'name' => 'Services System'
            ],
            [
                'name' => 'Awards System'
            ],
            [
                'name' => 'Clients System'
            ],
            [
                'name' => 'Appointments System'
            ],
            [
                'name' => 'Education System'
            ],
            [
                'name' => 'Portfolio System'
            ],
            [
                'name' => 'Languages System'
            ],
            [
                'name' => 'Testimonials System'
            ],
            [
                'name' => 'Skills System'
            ],
            [
                'name' => 'Interests System'
            ],
            [
                'name' => 'Blog System'
            ],
            [
                'name' => 'References System'
            ],
            [
                'name' => 'Contact System'
            ],
        ]);
    }
}
