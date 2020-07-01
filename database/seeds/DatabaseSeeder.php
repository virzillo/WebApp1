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
        $pathcities = url('storage/cities.sql');
        $pathprovinces = url('storage/provinces.sql');

        DB::unprepared(file_get_contents($pathcities));
        $this->command->info('Country table seeded!');
        DB::unprepared(file_get_contents($pathprovinces));
        $this->command->info('Province table seeded!');
    }
}
