<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'name' => str_random(12).'.jpg',
            'note_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('images')->insert([
            'name' => str_random(12).'.jpg',
            'note_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('images')->insert([
            'name' => str_random(12).'.jpg',
            'note_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('images')->insert([
            'name' => str_random(12).'.jpg',
            'note_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('images')->insert([
            'name' => str_random(12).'.jpg',
            'note_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('images')->insert([
            'name' => str_random(12).'.jpg',
            'note_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
