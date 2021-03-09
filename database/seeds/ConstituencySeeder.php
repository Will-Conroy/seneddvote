<?php

use Illuminate\Database\Seeder;
use App\Constituency;
class ConstituencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r = new Constituency;
        $r->name = "North Constituency 1";
        $r->seat_id = 3;
        $r->region_id = 1;
        $r->save();

        $r = new Constituency;
        $r->name = "North Constituency 2";
        $r->seat_id = 4;
        $r->region_id = 1;
        $r->save();

        $r = new Constituency;
        $r->name = "South Constituency 1";
        $r->seat_id = 5;
        $r->region_id = 2;
        $r->save();
        
    }
}
