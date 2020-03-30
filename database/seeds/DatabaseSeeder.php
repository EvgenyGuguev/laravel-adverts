<?php

use Illuminate\Database\Seeder;
use App\Entity\User;
use App\Entity\Region;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(RegionsTableSeeder::class);
    }
}
