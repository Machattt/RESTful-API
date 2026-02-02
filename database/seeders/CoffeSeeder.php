<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoffeSeeder extends Seeder
{
    public function run()
    {
        try {
            print("Clearing existing data...\n");
            \App\Models\coffe::truncate();
            
            print("Seeding 3564 new records...\n");
            $faker = \Faker\Factory::create();
            
            $coffeeNames = ['Americano', 'Latte', 'Cappuccino', 'Espresso', 'Mocha', 'Macchiato'];
            $cashTypes = ['Cash', 'Card', 'QRIS'];
            $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
            $months = ['January', 'February', 'March', 'April', 'May', 'June'];

            for ($i = 0; $i < 3564; $i++) {
                $date = $faker->dateTimeBetween('-1 year', 'now');
                $timestamp = $date->getTimestamp();
                
                \App\Models\coffe::create([
                    'hour_of_day' => (int)$date->format('H'),
                    'cash_type'   => $faker->randomElement($cashTypes),
                    'money'       => $faker->numberBetween(15000, 50000),
                    'coffee_name' => $faker->randomElement($coffeeNames),
                    'Time_of_Day' => $date->format('A') === 'AM' ? 'Morning' : 'Afternoon',
                    'Weekday'     => $date->format('l'),
                    'Month_name'  => $date->format('F'),
                    'Weekdaysort' => (int)$date->format('N'),
                    'Monthsort'   => (int)$date->format('n'),
                    'Date'        => $date->format('Y-m-d'),
                    'Time'        => $date->format('H:i:s')
                ]);
            }
            
            print("Database seeded successfully with 50 records.\n");
        } catch (\Exception $e) {
            print("Error: " . $e->getMessage() . "\n");
        }
    }
}
