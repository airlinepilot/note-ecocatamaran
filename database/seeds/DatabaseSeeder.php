<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		$this->call(UsersTableSeeder::class);
		$this->call(NotesTableSeeder::class);
		$this->call(FilesTableSeeder::class);
		$this->call(ImagesTableSeeder::class);
		$this->call(AccountsTableSeeder::class);
        $this->call(ProblemsTableSeeder::class);
		$this->call(UsersTableSeeder::class);

    }
}
