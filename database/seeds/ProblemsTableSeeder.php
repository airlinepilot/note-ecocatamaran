<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class ProblemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('problems')->insert([
            'name' => str_random(10),
            'link' => 'https://'.str_random(30).'.com',
            'status' => $faker->randomElement(['success', 'info', 'warning', 'danger']),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('problems')->insert([
            'name' => str_random(10),
            'link' => 'https://'.str_random(30).'.com',
            'status' => $faker->randomElement(['success', 'info', 'warning', 'danger']),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('problems')->insert([
            'name' => str_random(10),
            'link' => 'https://'.str_random(30).'.com',
            'status' => $faker->randomElement(['success', 'info', 'warning', 'danger']),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('problems')->insert([
            'name' => str_random(10),
            'link' => 'https://'.str_random(30).'.com',
            'status' => $faker->randomElement(['success', 'info', 'warning', 'danger']),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('problems')->insert([
            'name' => str_random(10),
            'link' => 'https://'.str_random(30).'.com',
            'status' => $faker->randomElement(['success', 'info', 'warning', 'danger']),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('problems')->insert([
            'name' => str_random(10),
            'link' => 'https://'.str_random(30).'.com',
            'status' => $faker->randomElement(['success', 'info', 'warning', 'danger']),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('problems')->insert([
            'name' => str_random(10),
            'link' => 'https://'.str_random(30).'.com',
            'status' => $faker->randomElement(['success', 'info', 'warning', 'danger']),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
