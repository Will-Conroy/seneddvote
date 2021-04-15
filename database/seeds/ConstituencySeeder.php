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
     self::testDataDefault(2, 6);
     self::data2016();
     self::data2011();
     #self::data2007();
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
        /* */

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
        $r->name = "";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesCentral;
        $r->save();

        $r = new Constituency;
        $r->name = "";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesCentral;
        $r->save();

        $r = new Constituency;
        $r->name = "";
        $r->year_id = $yearID;
        $r->region_id = $SouthWalesCentral;
        $r->save();

        $r = new Constituency;
        $r->name = "";
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
    private function data2016(){
$r = new Constituency;
$r->name = "Aberconwy";
$r->votes_cast = 22038;
$r->electorate = 44960;
$r->year_id = 3;
$r->region_id = 9;
$r->save();

$r = new Constituency;
$r->name = "Alyn and Deeside";
$r->votes_cast = 21696;
$r->electorate = 62697;
$r->year_id = 3;
$r->region_id = 9;
$r->save();

$r = new Constituency;
$r->name = "Arfon";
$r->votes_cast = 19994;
$r->electorate = 39269;
$r->year_id = 3;
$r->region_id = 9;
$r->save();

$r = new Constituency;
$r->name = "Clwyd South";
$r->votes_cast = 22159;
$r->electorate = 54185;
$r->year_id = 3;
$r->region_id = 9;
$r->save();

$r = new Constituency;
$r->name = "Clwyd West";
$r->votes_cast = 26226;
$r->electorate = 57657;
$r->year_id = 3;
$r->region_id = 9;
$r->save();

$r = new Constituency;
$r->name = "Delyn";
$r->votes_cast = 23159;
$r->electorate = 53490;
$r->year_id = 3;
$r->region_id = 9;
$r->save();

$r = new Constituency;
$r->name = "Vale of Clwyd";
$r->votes_cast = 24181;
$r->electorate = 56322;
$r->year_id = 3;
$r->region_id = 9;
$r->save();

$r = new Constituency;
$r->name = "Wrexham";
$r->votes_cast = 20354;
$r->electorate = 51567;
$r->year_id = 3;
$r->region_id = 9;
$r->save();

$r = new Constituency;
$r->name = "Ynys M�n";
$r->votes_cast = 25167;
$r->electorate = 50345;
$r->year_id = 3;
$r->region_id = 9;
$r->save();

$r = new Constituency;
$r->name = "Brecon and Radnorshire";
$r->votes_cast = 30367;
$r->electorate = 53793;
$r->year_id = 3;
$r->region_id = 10;
$r->save();

$r = new Constituency;
$r->name = "Carmarthen East and Dinefwr";
$r->votes_cast = 29751;
$r->electorate = 55395;
$r->year_id = 3;
$r->region_id = 10;
$r->save();

$r = new Constituency;
$r->name = "Carmarthen West and South Pembrokeshire";
$r->votes_cast = 29237;
$r->electorate = 56886;
$r->year_id = 3;
$r->region_id = 10;
$r->save();

$r = new Constituency;
$r->name = "Ceredigion";
$r->votes_cast = 29485;
$r->electorate = 51230;
$r->year_id = 3;
$r->region_id = 10;
$r->save();

$r = new Constituency;
$r->name = "Dwyfor Meirionnydd";
$r->votes_cast = 20236;
$r->electorate = 43304;
$r->year_id = 3;
$r->region_id = 10;
$r->save();

$r = new Constituency;
$r->name = "Llanelli";
$r->votes_cast = 28116;
$r->electorate = 59651;
$r->year_id = 3;
$r->region_id = 10;
$r->save();

$r = new Constituency;
$r->name = "Montgomeryshire";
$r->votes_cast = 23600;
$r->electorate = 48682;
$r->year_id = 3;
$r->region_id = 10;
$r->save();

$r = new Constituency;
$r->name = "Preseli Pembrokeshire";
$r->votes_cast = 28397;
$r->electorate = 56414;
$r->year_id = 3;
$r->region_id = 10;
$r->save();

$r = new Constituency;
$r->name = "Aberavon";
$r->votes_cast = 20852;
$r->electorate = 49074;
$r->year_id = 3;
$r->region_id = 11;
$r->save();

$r = new Constituency;
$r->name = "Bridgend";
$r->votes_cast = 26851;
$r->electorate = 60195;
$r->year_id = 3;
$r->region_id = 11;
$r->save();

$r = new Constituency;
$r->name = "Gower";
$r->votes_cast = 30187;
$r->electorate = 60631;
$r->year_id = 3;
$r->region_id = 11;
$r->save();

$r = new Constituency;
$r->name = "Neath";
$r->votes_cast = 25363;
$r->electorate = 55395;
$r->year_id = 3;
$r->region_id = 11;
$r->save();

$r = new Constituency;
$r->name = "Ogmore";
$r->votes_cast = 23356;
$r->electorate = 54502;
$r->year_id = 3;
$r->region_id = 11;
$r->save();

$r = new Constituency;
$r->name = "Swansea East";
$r->votes_cast = 20576;
$r->electorate = 57589;
$r->year_id = 3;
$r->region_id = 11;
$r->save();

$r = new Constituency;
$r->name = "Swansea West";
$r->votes_cast = 22202;
$r->electorate = 54593;
$r->year_id = 3;
$r->region_id = 11;
$r->save();

$r = new Constituency;
$r->name = "Cardiff Central";
$r->votes_cast = 26068;
$r->electorate = 57177;
$r->year_id = 3;
$r->region_id = 12;
$r->save();

$r = new Constituency;
$r->name = "Cardiff North";
$r->votes_cast = 37452;
$r->electorate = 65927;
$r->year_id = 3;
$r->region_id = 12;
$r->save();

$r = new Constituency;
$r->name = "Cardiff South and Penarth";
$r->votes_cast = 30276;
$r->electorate = 76110;
$r->year_id = 3;
$r->region_id = 12;
$r->save();

$r = new Constituency;
$r->name = "Cardiff West";
$r->votes_cast = 31960;
$r->electorate = 66040;
$r->year_id = 3;
$r->region_id = 12;
$r->save();

$r = new Constituency;
$r->name = "Cynon Valley";
$r->votes_cast = 19236;
$r->electorate = 50292;
$r->year_id = 3;
$r->region_id = 12;
$r->save();

$r = new Constituency;
$r->name = "Pontypridd";
$r->votes_cast = 25338;
$r->electorate = 58277;
$r->year_id = 3;
$r->region_id = 12;
$r->save();

$r = new Constituency;
$r->name = "Rhondda";
$r->votes_cast = 23486;
$r->electorate = 49758;
$r->year_id = 3;
$r->region_id = 12;
$r->save();

$r = new Constituency;
$r->name = "Vale of Glamorgan";
$r->votes_cast = 37798;
$r->electorate = 71177;
$r->year_id = 3;
$r->region_id = 12;
$r->save();

$r = new Constituency;
$r->name = "Blaenau Gwent";
$r->votes_cast = 21291;
$r->electorate = 50574;
$r->year_id = 3;
$r->region_id = 13;
$r->save();

$r = new Constituency;
$r->name = "Caerphilly";
$r->votes_cast = 27115;
$r->electorate = 62449;
$r->year_id = 3;
$r->region_id = 13;
$r->save();

$r = new Constituency;
$r->name = "Islwyn";
$r->votes_cast = 22309;
$r->electorate = 54465;
$r->year_id = 3;
$r->region_id = 13;
$r->save();

$r = new Constituency;
$r->name = "Merthyr Tydfil and Rhymney";
$r->votes_cast = 20683;
$r->electorate = 53754;
$r->year_id = 3;
$r->region_id = 13;
$r->save();

$r = new Constituency;
$r->name = "Monmouth";
$r->votes_cast = 31401;
$r->electorate = 64197;
$r->year_id = 3;
$r->region_id = 13;
$r->save();

$r = new Constituency;
$r->name = "Newport East";
$r->votes_cast = 20688;
$r->electorate = 55499;
$r->year_id = 3;
$r->region_id = 13;
$r->save();

$r = new Constituency;
$r->name = "Newport west";
$r->votes_cast = 27751;
$r->electorate = 62169;
$r->year_id = 3;
$r->region_id = 13;
$r->save();

$r = new Constituency;
$r->name = "Torfaen";
$r->votes_cast = 22978;
$r->electorate = 60246;
$r->year_id = 3;
$r->region_id = 13;
$r->save();
    }

    private function data2011(){
        $r = new Constituency;
        $r->name = "Aberconwy";
        $r->votes_cast = 20288;
        $r->electorate = 44978;
        $r->year_id = 4;
        $r->region_id = 14;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Alyn and Deeside";
        $r->votes_cast = 22769;
        $r->electorate = 61751;
        $r->year_id = 4;
        $r->region_id = 14;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Arfon";
        $r->votes_cast = 17664;
        $r->electorate = 41093;
        $r->year_id = 4;
        $r->region_id = 14;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Clwyd South";
        $r->votes_cast = 20037;
        $r->electorate = 54499;
        $r->year_id = 4;
        $r->region_id = 14;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Clwyd West";
        $r->votes_cast = 25153;
        $r->electorate = 57980;
        $r->year_id = 4;
        $r->region_id = 14;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Delyn";
        $r->votes_cast = 23194;
        $r->electorate = 53996;
        $r->year_id = 4;
        $r->region_id = 14;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Vale of Clwyd";
        $r->votes_cast = 23056;
        $r->electorate = 56232;
        $r->year_id = 4;
        $r->region_id = 14;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Wrexham";
        $r->votes_cast = 18687;
        $r->electorate = 53516;
        $r->year_id = 4;
        $r->region_id = 14;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Ynys M�n";
        $r->votes_cast = 24067;
        $r->electorate = 49431;
        $r->year_id = 4;
        $r->region_id = 14;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Brecon and Radnorshire";
        $r->votes_cast = 28348;
        $r->electorate = 53546;
        $r->year_id = 4;
        $r->region_id = 15;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Carmarthen East and Dinefwr";
        $r->votes_cast = 27828;
        $r->electorate = 54243;
        $r->year_id = 4;
        $r->region_id = 15;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Carmarthen West and South Pembrokeshire";
        $r->votes_cast = 28156;
        $r->electorate = 58435;
        $r->year_id = 4;
        $r->region_id = 15;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Ceredigion";
        $r->votes_cast = 29076;
        $r->electorate = 56983;
        $r->year_id = 4;
        $r->region_id = 15;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Dwyfor Meirionnydd";
        $r->votes_cast = 20743;
        $r->electorate = 44669;
        $r->year_id = 4;
        $r->region_id = 15;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Llanelli";
        $r->votes_cast = 26070;
        $r->electorate = 58838;
        $r->year_id = 4;
        $r->region_id = 15;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Montgomeryshire";
        $r->votes_cast = 22933;
        $r->electorate = 48675;
        $r->year_id = 4;
        $r->region_id = 15;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Preseli Pembrokeshire";
        $r->votes_cast = 27218;
        $r->electorate = 57758;
        $r->year_id = 4;
        $r->region_id = 15;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Aberavon";
        $r->votes_cast = 18879;
        $r->electorate = 50754;
        $r->year_id = 4;
        $r->region_id = 16;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Bridgend";
        $r->votes_cast = 24035;
        $r->electorate = 59104;
        $r->year_id = 4;
        $r->region_id = 16;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Gower";
        $r->votes_cast = 26773;
        $r->electorate = 61909;
        $r->year_id = 4;
        $r->region_id = 16;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Neath";
        $r->votes_cast = 23849;
        $r->electorate = 57533;
        $r->year_id = 4;
        $r->region_id = 16;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Ogmore";
        $r->votes_cast = 20264;
        $r->electorate = 55442;
        $r->year_id = 4;
        $r->region_id = 16;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Swansea East";
        $r->votes_cast = 18910;
        $r->electorate = 60246;
        $r->year_id = 4;
        $r->region_id = 16;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Swansea West";
        $r->votes_cast = 21805;
        $r->electorate = 62345;
        $r->year_id = 4;
        $r->region_id = 16;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Cardiff Central";
        $r->votes_cast = 23628;
        $r->electorate = 64347;
        $r->year_id = 4;
        $r->region_id = 17;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Cardiff North";
        $r->votes_cast = 34431;
        $r->electorate = 66934;
        $r->year_id = 4;
        $r->region_id = 17;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Cardiff South and Penarth";
        $r->votes_cast = 27479;
        $r->electorate = 75038;
        $r->year_id = 4;
        $r->region_id = 17;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Cardiff West";
        $r->votes_cast = 27727;
        $r->electorate = 64219;
        $r->year_id = 4;
        $r->region_id = 17;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Cynon Valley";
        $r->votes_cast = 18760;
        $r->electorate = 52133;
        $r->year_id = 4;
        $r->region_id = 17;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Pontypridd";
        $r->votes_cast = 23333;
        $r->electorate = 60028;
        $r->year_id = 4;
        $r->region_id = 17;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Rhondda";
        $r->votes_cast = 20027;
        $r->electorate = 52532;
        $r->year_id = 4;
        $r->region_id = 17;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Vale of Glamorgan";
        $r->votes_cast = 33254;
        $r->electorate = 71062;
        $r->year_id = 4;
        $r->region_id = 17;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Blaenau Gwent";
        $r->votes_cast = 20211;
        $r->electorate = 53230;
        $r->year_id = 4;
        $r->region_id = 18;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Caerphilly";
        $r->votes_cast = 25570;
        $r->electorate = 62049;
        $r->year_id = 4;
        $r->region_id = 18;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Islwyn";
        $r->votes_cast = 20908;
        $r->electorate = 54893;
        $r->year_id = 4;
        $r->region_id = 18;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Merthyr Tydfil and Rhymney";
        $r->votes_cast = 19320;
        $r->electorate = 55031;
        $r->year_id = 4;
        $r->region_id = 18;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Monmouth";
        $r->votes_cast = 30001;
        $r->electorate = 64857;
        $r->year_id = 4;
        $r->region_id = 18;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Newport East";
        $r->votes_cast = 19460;
        $r->electorate = 55120;
        $r->year_id = 4;
        $r->region_id = 18;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Newport west";
        $r->votes_cast = 23014;
        $r->electorate = 63180;
        $r->year_id = 4;
        $r->region_id = 18;
        $r->save();
        
        $r = new Constituency;
        $r->name = "Torfaen";
        $r->votes_cast = 22328;
        $r->electorate = 61126;
        $r->year_id = 4;
        $r->region_id = 18;
        $r->save();
        
        }
}

