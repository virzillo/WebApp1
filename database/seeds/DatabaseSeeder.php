<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        // Eloquent::unguard();
        $this->call(RolesAndPermissionsSeeder::class);



        // $path = storage_path('cities.sql');
        $path = url('storage/cities.sql');

        DB::unprepared(file_get_contents($path));
        $this->command->info('Country table seeded!');
    }
}
