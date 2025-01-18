<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class featureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['feature_name' => 'WiFi', 'class' => 'fa-wifi'],
            ['feature_name' => 'Air conditioning', 'class' => 'fa-temperature-arrow-up'],
            ['feature_name' => 'Balcony', 'class' => 'fa-building'],
            ['feature_name' => 'Garage', 'class' => 'fa-square-parking'],
            ['feature_name' => 'Pets-friendly', 'class' => 'fa-shield-dog'],
            ['feature_name' => 'Tv', 'class' => 'fa-tv'],
            ['feature_name' => 'Heating', 'class' => 'fa-temperature-three-quarters'],
            ['feature_name' => 'Kitchen', 'class' => 'fa-kitchen-set'],
            ['feature_name' => 'Security cameras', 'class' => 'fa-shield-halved'],
            ['feature_name' => 'Dishwasher', 'class' => 'fa-spray-can-sparkles'],
            ['feature_name' => 'Breakfast', 'class' => 'fa-bowl-food'],
            ['feature_name' => 'Lunch', 'class' => 'fa-utensils'],
            ['feature_name' => 'Dinner', 'class' => 'fa-drumstick-bite'],

            // Add more rows as needed
        ];

        // Use the insert method for bulk insertion
        DB::table('features')->insert($data);
    }
}
