<?php

use Illuminate\Database\Seeder;
use App\Entity\Region;

class RegionsTableSeeder extends Seeder
{
    public function run()
    {
        factory(Region::class, 10)->create()->each(function (Region $region) {
           $region->children()->saveMany(factory(Region::class, random_int(3, 10))->create()->each(function (Region $region) {
               $region->children()->saveMany(factory(Region::class, random_int(3, 10))->make());
           }));
        });
    }
}
