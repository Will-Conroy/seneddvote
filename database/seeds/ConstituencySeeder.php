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
     self::testDataDefault(2, 4);
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
       

        /* NorthWales */
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


        /* MidAndWestWales */
        $r = new Constituency;
        $r->name = "Brecon and Radnorshire";
        $r->year_id = $yearID;
        $r->region_id = $MidAndWestWales;
        $r->save();

        $r = new Constituency;
        $r->name = "Carmarthen East and Dinefwr";
        $r->year_id = $yearID;
        $r->region_id = $MidAndWestWales;
        $r->save();

        $r = new Constituency;
        $r->name = "Carmarthen West and South Pembrokeshire";
        $r->year_id = $yearID;
        $r->region_id = $MidAndWestWales;
        $r->save();

        $r = new Constituency;
        $r->name = "Ceredigion";
        $r->year_id = $yearID;
        $r->region_id = $MidAndWestWales;
        $r->save();

        $r = new Constituency;
        $r->name = "Dwyfor Meirionnydd";
        $r->year_id = $yearID;
        $r->region_id = $MidAndWestWales;
        $r->save();

        $r = new Constituency;
        $r->name = "Llanelli";
        $r->year_id = $yearID;
        $r->region_id = $MidAndWestWales;
        $r->save();

        $r = new Constituency;
        $r->name = "Montgomeryshire";
        $r->year_id = $yearID;
        $r->region_id = $MidAndWestWales;
        $r->save();

        $r = new Constituency;
        $r->name = "Preseli Pembrokeshire";
        $r->year_id = $yearID;
        $r->region_id = $MidAndWestWales;
        $r->save();

        /* South Wales West */

        $r = new Constituency;
        $r->name = "Aberavon";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesWest;
        $r->save();

        $r = new Constituency;
        $r->name = "Bridgend";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesWest;
        $r->save();

        $r = new Constituency;
        $r->name = "Gower";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesWest;
        $r->save();

        $r = new Constituency;
        $r->name = "Neath";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesWest;
        $r->save();

        $r = new Constituency;
        $r->name = "Ogmore";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesWest;
        $r->save();

        $r = new Constituency;
        $r->name = "Swansea East";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesWest;
        $r->save();

        $r = new Constituency;
        $r->name = "Swansea West";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesWest;
        $r->save();

        /*South Wales Central*/
        $r = new Constituency;
        $r->name = "Cardiff Central";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesCentral;
        $r->save();

        $r = new Constituency;
        $r->name = "Cardiff North";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesCentral;
        $r->save();

        $r = new Constituency;
        $r->name = "Cardiff South and Penarth";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesCentral;
        $r->save();

        $r = new Constituency;
        $r->name = "Cardiff West";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesCentral;
        $r->save();

        $r = new Constituency;
        $r->name = "Cynon Valley";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesCentral;
        $r->save();

        $r = new Constituency;
        $r->name = "Pontypridd";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesCentral;
        $r->save();

        $r = new Constituency;
        $r->name = "Rhondda";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesCentral;
        $r->save();

        $r = new Constituency;
        $r->name = "Vale of Glamorgan";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesCentral;
        $r->save();

        /* South Wales East */
        $r = new Constituency;
        $r->name = "Blaenau Gwent";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesWest;
        $r->save();

        $r = new Constituency;
        $r->name = "Caerphilly";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesWest;
        $r->save();

        $r = new Constituency;
        $r->name = "Islwyn";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesWest;
        $r->save();

        $r = new Constituency;
        $r->name = "Merthyr Tydfil and Rhymney";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesWest;
        $r->save();

        $r = new Constituency;
        $r->name = "Monmouth";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesWest;
        $r->save();

        $r = new Constituency;
        $r->name = "Newport East";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesWest;
        $r->save();

        $r = new Constituency;
        $r->name = "Newport west";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesWest;
        $r->save();

        $r = new Constituency;
        $r->name = "Torfaen";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesWest;
        $r->save();
    }
}

