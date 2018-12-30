<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('notes')->insert([
            'name' => str_random(14),
            'content' => str_random(300),
            'status' => $faker->randomElement(['success', 'info', 'warning', 'danger']),
            'link' => 'https://'.str_random(30).'.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('notes')->insert([
            'name' => str_random(14),
            'content' => str_random(300),
            'status' => $faker->randomElement(['success', 'info', 'warning', 'danger']),
            'link' => 'https://'.str_random(30).'.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('notes')->insert([
            'name' => str_random(14),
            'content' => str_random(300),
            'status' => $faker->randomElement(['success', 'info', 'warning', 'danger']),
            'link' => 'https://'.str_random(30).'.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('notes')->insert([
            'name' => str_random(14),
            'content' => str_random(300),
            'status' => $faker->randomElement(['success', 'info', 'warning', 'danger']),
            'link' => 'https://'.str_random(30).'.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('notes')->insert([
            'name' => str_random(14),
            'content' => str_random(300),
            'status' => $faker->randomElement(['success', 'info', 'warning', 'danger']),
            'link' => 'https://'.str_random(30).'.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('notes')->insert([
            'name' => str_random(14),
            'content' => str_random(300),
            'status' => $faker->randomElement(['success', 'info', 'warning', 'danger']),
            'link' => 'https://'.str_random(30).'.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('notes')->insert([
            'name' => str_random(14),
            'content' => str_random(300),
            'status' => $faker->randomElement(['success', 'info', 'warning', 'danger']),
            'link' => 'https://'.str_random(30).'.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('notes')->insert([
            'name' => str_random(14),
            'content' => str_random(300),
            'status' => $faker->randomElement(['success', 'info', 'warning', 'danger']),
            'link' => 'https://'.str_random(30).'.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
