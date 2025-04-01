<?php
// database/seeders/DatabaseSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Call the UserSeeder to create both user and admin
        $this->call(UserSeeder::class);
    }
}
