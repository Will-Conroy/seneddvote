<?php

use Illuminate\Database\Seeder;
use App\Coordinate;

class CoordinateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r = new Coordinate;
        $r->constituency_id = 1;
        $r->long = 203;
        $r->lat = 204;
        $r->save();

        $r = new Coordinate;
        $r->region_id = 1;
        $r->long = 208;
        $r->lat = 204;
        $r->save();



        
    }
}
