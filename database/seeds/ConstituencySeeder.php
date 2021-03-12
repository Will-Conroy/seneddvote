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
     self::testData();   
    }

    private function testData(){
        $northWestRegionID = 1;
        $northEastRegionID = 2;
        $sounthRegionID = 3;

        $r = new Constituency;
        $r->name = "North West Constituency 1";
        $r->seat_id = 4;
        $r->region_id = $northWestRegionID;
        $r->save();

        $r = new Constituency;
        $r->name = "North West Constituency 2";
        $r->seat_id = 5;
        $r->region_id = $northWestRegionID;
        $r->save();

        $r = new Constituency;
        $r->name = "North East Constituency 1";
        $r->seat_id = 6;
        $r->region_id = $northEastRegionID;
        $r->save();

        $r = new Constituency;
        $r->name = "North East Constituency 2";
        $r->seat_id = 7;
        $r->region_id = $northEastRegionID;
        $r->save();

        $r = new Constituency;
        $r->name = "South Constituency 1";
        $r->seat_id = 8;
        $r->region_id = $sounthRegionID;
        $r->save();

        $r = new Constituency;
        $r->name = "South Constituency 2";
        $r->seat_id = 9;
        $r->region_id = $sounthRegionID;
        $r->save();

        $r = new Constituency;
        $r->name = "South Constituency 3";
        $r->seat_id = 10;
        $r->region_id = $sounthRegionID;
        $r->save();
    }
}
