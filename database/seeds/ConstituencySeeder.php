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
        $northRegionID = 1;
        $middleRegionID = 2;
        $sounthRegionID = 3;
        $yearID = 1;

        $r = new Constituency;
        $r->name = "North Constituency 1";
        $r->year_id = $yearID;
        $r->region_id = $northRegionID;
        $r->save();

        $r = new Constituency;
        $r->name = "North Constituency 2";
        $r->year_id = $yearID;
        $r->region_id = $northRegionID;
        $r->save();

        $r = new Constituency;
        $r->name = "Middle Constituency 1";
        $r->year_id = $yearID;
        $r->region_id = $middleRegionID;
        $r->save();

        $r = new Constituency;
        $r->name = "Middle Constituency 2";
        $r->year_id = $yearID;
        $r->region_id = $middleRegionID;
        $r->save();

        $r = new Constituency;
        $r->name = "South Constituency 1";
        $r->year_id = $yearID;
        $r->region_id = $sounthRegionID;
        $r->save();

        $r = new Constituency;
        $r->name = "South Constituency 2";
        $r->year_id = $yearID;
        $r->region_id = $sounthRegionID;
        $r->save();

        $r = new Constituency;
        $r->name = "South Constituency 3";
        $r->year_id = $yearID;
        $r->region_id = $sounthRegionID;
        $r->save();
    }
}
