<?php

use Illuminate\Database\Seeder;
use App\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1 = new Region;
        $r1->name = "North Region";
        $r1->seat_id = 1;
        $r1->save();

        $r2 = new Region;
        $r2->name = "South Region";
        $r2->seat_id = 2;
        $r2->save();
    }
}
