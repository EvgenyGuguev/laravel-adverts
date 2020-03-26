<?php

use Illuminate\Database\Seeder;
use App\Entity\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         factory(User::class, 10)->create();
    }
}
