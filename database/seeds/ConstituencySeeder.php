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
     self::testDataDefault(2, 8);
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


    private function testDataDefault(int $yearID, int $regionStart){
       
       $NorthWales = $regionStart;
       $MidAndWestWales = $regionStart + 1;
       $SouthWalesWest = $regionStart + 2;
       $SouthWalesCentral = $regionStart + 3;
       $SouthWalesEast  = $regionStart + 4;
       

        /* MidAndWestWales */
        $r = new Constituency;
        $r->name = "Aberconwy";
        $r->year_id = $yearID;
        $r->region_id = $NorthWales;
        $r->save();


        $r = new Constituency;
        $r->name = "Alyn and Deeside";
        $r->year_id = $yearID;
        $r->region_id = $NorthWales;
        $r->save();

        $r = new Constituency;
        $r->name = "Arfon";
        $r->year_id = $yearID;
        $r->region_id = $NorthWales;
        $r->save();

        $r = new Constituency;
        $r->name = "Clwyd South";
        $r->year_id = $yearID;
        $r->region_id = $NorthWales;
        $r->save();

        $r = new Constituency;
        $r->name = "Clwyd West";
        $r->year_id = $yearID;
        $r->region_id = $NorthWales;
        $r->save();

        $r = new Constituency;
        $r->name = "Delyn";
        $r->year_id = $yearID;
        $r->region_id = $NorthWales;
        $r->save();

        $r = new Constituency;
        $r->name = "Vale of Clwyd";
        $r->year_id = $yearID;
        $r->region_id = $NorthWales;
        $r->save();

        $r = new Constituency;
        $r->name = "Wrexham";
        $r->year_id = $yearID;
        $r->region_id = $NorthWales;
        $r->save();

        $r = new Constituency;
        $r->name = "Ynys Môn";
        $r->year_id = $yearID;
        $r->region_id = $NorthWales;
        $r->save();

        
    }
}

