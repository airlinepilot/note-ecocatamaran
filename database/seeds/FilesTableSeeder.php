<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('files')->insert([
            'name' => str_random(12).'.zip',
            'note_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),        
        ]);
        DB::table('files')->insert([
            'name' => str_random(12).'.zip',
            'note_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),        
        ]);
        DB::table('files')->insert([
            'name' => str_random(12).'.zip',
            'note_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),        
        ]);
        DB::table('files')->insert([
            'name' => str_random(12).'.zip',
            'note_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),        
        ]);
        DB::table('files')->insert([
            'name' => str_random(12).'.zip',
            'note_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),        
        ]);

    }
}
