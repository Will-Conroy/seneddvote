<?php

use Illuminate\Database\Seeder;
use App\Voter;
class VoterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::testData();
        self::testDataDefault(4,8, 8, 47);
        self::data2016();
        self::data2011();
    }

    private function testData()
    {

        for ($region = 1; $region <= 3; $region++) 
        {
            for ($party = 1; $party <= 3; $party++)
            {
     
                $s = new Voter;
                $s->region_id = $region;
                $s->party_id = $party;
                $s->votes = rand(100, 1000);
                $s->save();
            }
        }
        for ($constituency = 1; $constituency <= 7; $constituency++) 
        {
            for ($party = 1; $party <= 3; $party++)
            {
    
                $s = new Voter;
                $s->constituency_id = $constituency;
                $s->party_id = $party;
                $s->votes = rand(100, 1000);
                $s->save();
            }
        }     
    } 


    private function testDataDefault(int $regonStart, int $regionEnd, int $constituencyStart, int $constituencyEnd){

        for ($region = $regonStart; $region <= $regionEnd; $region++) {
            for ($party =4; $party <= 6; $party++){
     
                $s = new Voter;
                $s->region_id = $region;
                $s->party_id = $party;
                $s->votes = rand(100, 1000);
                $s->save();
            }
        }
        for ($constituency = $constituencyStart; $constituency <= $constituencyEnd; $constituency++) 
        {
            for ($party = 4; $party <= 6; $party++){
    
                $s = new Voter;
                $s->constituency_id = $constituency;
                $s->party_id = $party;
                $s->votes = rand(100, 1000);
                $s->save();
            }
        }  
    }
    
    private function data2016(){
        $s = new Voter;
        $s->region_id = 9;
        $s->party_id = 7;
        $s->votes = 57528;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 9;
        $s->party_id = 8;
        $s->votes = 47701;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 9;
        $s->party_id = 9;
        $s->votes = 45468;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 9;
        $s->party_id = 10;
        $s->votes = 25518;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 9;
        $s->party_id = 11;
        $s->votes = 9409;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 9;
        $s->party_id = 12;
        $s->votes = 9345;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 9;
        $s->party_id = 13;
        $s->votes = 4789;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 9;
        $s->party_id = 14;
        $s->votes = 1865;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 9;
        $s->party_id = 15;
        $s->votes = 1355;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 9;
        $s->party_id = 16;
        $s->votes = 926;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 9;
        $s->party_id = 17;
        $s->votes = 586;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 10;
        $s->party_id = 8;
        $s->votes = 56754;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 10;
        $s->party_id = 9;
        $s->votes = 44461;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 10;
        $s->party_id = 7;
        $s->votes = 41975;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 10;
        $s->party_id = 10;
        $s->votes = 25042;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 10;
        $s->party_id = 12;
        $s->votes = 23554;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 10;
        $s->party_id = 11;
        $s->votes = 10707;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 10;
        $s->party_id = 13;
        $s->votes = 8222;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 10;
        $s->party_id = 18;
        $s->votes = 1496;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 10;
        $s->party_id = 19;
        $s->votes = 1103;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 10;
        $s->party_id = 15;
        $s->votes = 1071;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 10;
        $s->party_id = 14;
        $s->votes = 1032;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 10;
        $s->party_id = 17;
        $s->votes = 423;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 11;
        $s->party_id = 7;
        $s->votes = 66903;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 11;
        $s->party_id = 8;
        $s->votes = 29050;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 11;
        $s->party_id = 9;
        $s->votes = 25414;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 11;
        $s->party_id = 10;
        $s->votes = 23096;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 11;
        $s->party_id = 12;
        $s->votes = 10946;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 11;
        $s->party_id = 11;
        $s->votes = 7137;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 11;
        $s->party_id = 13;
        $s->votes = 4420;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 11;
        $s->party_id = 15;
        $s->votes = 1106;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 11;
        $s->party_id = 20;
        $s->votes = 686;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 11;
        $s->party_id = 17;
        $s->votes = 431;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 12;
        $s->party_id = 7;
        $s->votes = 78366;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 12;
        $s->party_id = 8;
        $s->votes = 48357;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 12;
        $s->party_id = 9;
        $s->votes = 42185;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 12;
        $s->party_id = 10;
        $s->votes = 23958;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 12;
        $s->party_id = 12;
        $s->votes = 14875;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 12;
        $s->party_id = 11;
        $s->votes = 9163;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 12;
        $s->party_id = 13;
        $s->votes = 7949;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 12;
        $s->party_id = 21;
        $s->votes = 2807;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 12;
        $s->party_id = 15;
        $s->votes = 1096;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 12;
        $s->party_id = 20;
        $s->votes = 736;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 12;
        $s->party_id = 16;
        $s->votes = 651;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 12;
        $s->party_id = 22;
        $s->votes = 520;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 12;
        $s->party_id = 23;
        $s->votes = 470;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 13;
        $s->party_id = 7;
        $s->votes = 74424;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 13;
        $s->party_id = 10;
        $s->votes = 34524;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 13;
        $s->party_id = 9;
        $s->votes = 33318;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 13;
        $s->party_id = 8;
        $s->votes = 29686;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 13;
        $s->party_id = 11;
        $s->votes = 7870;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 13;
        $s->party_id = 12;
        $s->votes = 6784;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 13;
        $s->party_id = 13;
        $s->votes = 4831;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 13;
        $s->party_id = 15;
        $s->votes = 1115;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 13;
        $s->party_id = 20;
        $s->votes = 618;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 13;
        $s->party_id = 17;
        $s->votes = 492;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 13;
        $s->party_id = 24;
        $s->votes = 429;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 48;
        $s->party_id = 9;
        $s->votes = 7646;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 48;
        $s->party_id = 8;
        $s->votes = 6892;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 48;
        $s->party_id = 7;
        $s->votes = 6039;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 48;
        $s->party_id = 12;
        $s->votes = 781;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 48;
        $s->party_id = 13;
        $s->votes = 680;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 49;
        $s->party_id = 7;
        $s->votes = 9922;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 49;
        $s->party_id = 9;
        $s->votes = 4558;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 49;
        $s->party_id = 10;
        $s->votes = 3765;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 49;
        $s->party_id = 8;
        $s->votes = 1944;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 49;
        $s->party_id = 12;
        $s->votes = 980;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 49;
        $s->party_id = 13;
        $s->votes = 527;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 50;
        $s->party_id = 8;
        $s->votes = 10962;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 50;
        $s->party_id = 7;
        $s->votes = 6800;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 50;
        $s->party_id = 9;
        $s->votes = 1655;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 50;
        $s->party_id = 12;
        $s->votes = 577;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 51;
        $s->party_id = 7;
        $s->votes = 7862;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 51;
        $s->party_id = 9;
        $s->votes = 4846;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 51;
        $s->party_id = 8;
        $s->votes = 3861;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 51;
        $s->party_id = 10;
        $s->votes = 2827;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 51;
        $s->party_id = 12;
        $s->votes = 2289;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 51;
        $s->party_id = 13;
        $s->votes = 474;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 52;
        $s->party_id = 9;
        $s->votes = 10831;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 52;
        $s->party_id = 8;
        $s->votes = 5768;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 52;
        $s->party_id = 7;
        $s->votes = 5246;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 52;
        $s->party_id = 10;
        $s->votes = 2985;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 52;
        $s->party_id = 12;
        $s->votes = 831;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 52;
        $s->party_id = 13;
        $s->votes = 565;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 53;
        $s->party_id = 7;
        $s->votes = 9480;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 53;
        $s->party_id = 9;
        $s->votes = 5898;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 53;
        $s->party_id = 10;
        $s->votes = 3794;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 53;
        $s->party_id = 8;
        $s->votes = 2269;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 53;
        $s->party_id = 12;
        $s->votes = 1718;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 54;
        $s->party_id = 7;
        $s->votes = 9560;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 54;
        $s->party_id = 9;
        $s->votes = 8792;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 54;
        $s->party_id = 10;
        $s->votes = 2975;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 54;
        $s->party_id = 8;
        $s->votes = 2096;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 54;
        $s->party_id = 12;
        $s->votes = 758;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 55;
        $s->party_id = 7;
        $s->votes = 7552;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 55;
        $s->party_id = 9;
        $s->votes = 6227;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 55;
        $s->party_id = 8;
        $s->votes = 2631;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 55;
        $s->party_id = 10;
        $s->votes = 2393;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 55;
        $s->party_id = 12;
        $s->votes = 1140;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 55;
        $s->party_id = 13;
        $s->votes = 411;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 56;
        $s->party_id = 8;
        $s->votes = 13788;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 56;
        $s->party_id = 7;
        $s->votes = 4278;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 56;
        $s->party_id = 10;
        $s->votes = 3212;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 56;
        $s->party_id = 9;
        $s->votes = 2904;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 56;
        $s->party_id = 13;
        $s->votes = 389;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 56;
        $s->party_id = 12;
        $s->votes = 334;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 56;
        $s->party_id = 16;
        $s->votes = 262;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 57;
        $s->party_id = 12;
        $s->votes = 15898;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 57;
        $s->party_id = 9;
        $s->votes = 7728;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 57;
        $s->party_id = 7;
        $s->votes = 2703;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 57;
        $s->party_id = 10;
        $s->votes = 2161;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 57;
        $s->party_id = 8;
        $s->votes = 1180;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 57;
        $s->party_id = 13;
        $s->votes = 697;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 58;
        $s->party_id = 8;
        $s->votes = 14427;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 58;
        $s->party_id = 7;
        $s->votes = 5727;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 58;
        $s->party_id = 9;
        $s->votes = 4489;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 58;
        $s->party_id = 10;
        $s->votes = 3474;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 58;
        $s->party_id = 12;
        $s->votes = 837;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 58;
        $s->party_id = 13;
        $s->votes = 797;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 59;
        $s->party_id = 9;
        $s->votes = 10355;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 59;
        $s->party_id = 7;
        $s->votes = 6982;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 59;
        $s->party_id = 8;
        $s->votes = 5459;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 59;
        $s->party_id = 10;
        $s->votes = 3300;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 59;
        $s->party_id = 16;
        $s->votes = 1638;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 59;
        $s->party_id = 13;
        $s->votes = 804;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 59;
        $s->party_id = 12;
        $s->votes = 699;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 60;
        $s->party_id = 8;
        $s->votes = 12014;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 60;
        $s->party_id = 12;
        $s->votes = 9606;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 60;
        $s->party_id = 10;
        $s->votes = 2665;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 60;
        $s->party_id = 9;
        $s->votes = 2075;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 60;
        $s->party_id = 7;
        $s->votes = 1902;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 60;
        $s->party_id = 13;
        $s->votes = 1223;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 61;
        $s->party_id = 8;
        $s->votes = 9566;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 61;
        $s->party_id = 9;
        $s->votes = 3160;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 61;
        $s->party_id = 7;
        $s->votes = 2443;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 61;
        $s->party_id = 10;
        $s->votes = 2149;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 61;
        $s->party_id = 25;
        $s->votes = 1259;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 61;
        $s->party_id = 12;
        $s->votes = 916;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 61;
        $s->party_id = 13;
        $s->votes = 743;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 62;
        $s->party_id = 7;
        $s->votes = 10267;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 62;
        $s->party_id = 8;
        $s->votes = 9885;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 62;
        $s->party_id = 10;
        $s->votes = 4132;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 62;
        $s->party_id = 9;
        $s->votes = 1937;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 62;
        $s->party_id = 26;
        $s->votes = 1113;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 62;
        $s->party_id = 13;
        $s->votes = 427;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 62;
        $s->party_id = 12;
        $s->votes = 355;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 63;
        $s->party_id = 9;
        $s->votes = 9875;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 63;
        $s->party_id = 12;
        $s->votes = 6536;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 63;
        $s->party_id = 10;
        $s->votes = 2458;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 63;
        $s->party_id = 8;
        $s->votes = 2410;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 63;
        $s->party_id = 7;
        $s->votes = 1389;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 63;
        $s->party_id = 13;
        $s->votes = 932;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 64;
        $s->party_id = 9;
        $s->votes = 11123;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 64;
        $s->party_id = 7;
        $s->votes = 7193;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 64;
        $s->party_id = 8;
        $s->votes = 3957;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 64;
        $s->party_id = 10;
        $s->votes = 3286;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 64;
        $s->party_id = 12;
        $s->votes = 1677;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 64;
        $s->party_id = 13;
        $s->votes = 1161;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 65;
        $s->party_id = 7;
        $s->votes = 10578;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 65;
        $s->party_id = 8;
        $s->votes = 4176;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 65;
        $s->party_id = 10;
        $s->votes = 3119;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 65;
        $s->party_id = 9;
        $s->votes = 1342;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 65;
        $s->party_id = 12;
        $s->votes = 1248;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 65;
        $s->party_id = 13;
        $s->votes = 389;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 66;
        $s->party_id = 7;
        $s->votes = 12166;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 66;
        $s->party_id = 9;
        $s->votes = 6543;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 66;
        $s->party_id = 10;
        $s->votes = 3919;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 66;
        $s->party_id = 8;
        $s->votes = 2569;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 66;
        $s->party_id = 12;
        $s->votes = 1087;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 66;
        $s->party_id = 13;
        $s->votes = 567;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 67;
        $s->party_id = 7;
        $s->votes = 11982;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 67;
        $s->party_id = 9;
        $s->votes = 10153;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 67;
        $s->party_id = 10;
        $s->votes = 3300;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 67;
        $s->party_id = 8;
        $s->votes = 2982;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 67;
        $s->party_id = 12;
        $s->votes = 1033;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 67;
        $s->party_id = 13;
        $s->votes = 737;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 68;
        $s->party_id = 7;
        $s->votes = 9468;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 68;
        $s->party_id = 8;
        $s->votes = 6545;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 68;
        $s->party_id = 10;
        $s->votes = 3780;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 68;
        $s->party_id = 9;
        $s->votes = 2179;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 68;
        $s->party_id = 16;
        $s->votes = 2056;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 68;
        $s->party_id = 12;
        $s->votes = 746;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 68;
        $s->party_id = 13;
        $s->votes = 589;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 69;
        $s->party_id = 7;
        $s->votes = 12895;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 69;
        $s->party_id = 8;
        $s->votes = 3427;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 69;
        $s->party_id = 10;
        $s->votes = 3233;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 69;
        $s->party_id = 9;
        $s->votes = 2587;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 69;
        $s->party_id = 12;
        $s->votes = 698;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 69;
        $s->party_id = 13;
        $s->votes = 516;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 70;
        $s->party_id = 7;
        $s->votes = 10726;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 70;
        $s->party_id = 10;
        $s->votes = 3274;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 70;
        $s->party_id = 8;
        $s->votes = 2744;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 70;
        $s->party_id = 9;
        $s->votes = 1729;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 70;
        $s->party_id = 12;
        $s->votes = 1574;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 70;
        $s->party_id = 13;
        $s->votes = 529;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 71;
        $s->party_id = 7;
        $s->votes = 9014;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 71;
        $s->party_id = 9;
        $s->votes = 3934;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 71;
        $s->party_id = 8;
        $s->votes = 3225;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 71;
        $s->party_id = 10;
        $s->votes = 3058;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 71;
        $s->party_id = 12;
        $s->votes = 2012;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 71;
        $s->party_id = 13;
        $s->votes = 883;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 71;
        $s->party_id = 27;
        $s->votes = 76;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 72;
        $s->party_id = 7;
        $s->votes = 10016;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 72;
        $s->party_id = 12;
        $s->votes = 9199;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 72;
        $s->party_id = 9;
        $s->votes = 2317;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 72;
        $s->party_id = 8;
        $s->votes = 1951;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 72;
        $s->party_id = 10;
        $s->votes = 1223;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 72;
        $s->party_id = 13;
        $s->votes = 1150;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 72;
        $s->party_id = 16;
        $s->votes = 212;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 73;
        $s->party_id = 7;
        $s->votes = 16766;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 73;
        $s->party_id = 9;
        $s->votes = 13099;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 73;
        $s->party_id = 10;
        $s->votes = 2509;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 73;
        $s->party_id = 8;
        $s->votes = 2278;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 73;
        $s->party_id = 12;
        $s->votes = 1130;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 73;
        $s->party_id = 16;
        $s->votes = 846;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 73;
        $s->party_id = 13;
        $s->votes = 824;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 74;
        $s->party_id = 7;
        $s->votes = 13274;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 74;
        $s->party_id = 9;
        $s->votes = 6353;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 74;
        $s->party_id = 8;
        $s->votes = 4320;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 74;
        $s->party_id = 10;
        $s->votes = 3716;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 74;
        $s->party_id = 12;
        $s->votes = 1345;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 74;
        $s->party_id = 13;
        $s->votes = 1268;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 75;
        $s->party_id = 7;
        $s->votes = 11381;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 75;
        $s->party_id = 8;
        $s->votes = 10205;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 75;
        $s->party_id = 9;
        $s->votes = 5617;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 75;
        $s->party_id = 10;
        $s->votes = 2629;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 75;
        $s->party_id = 13;
        $s->votes = 1032;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 75;
        $s->party_id = 12;
        $s->votes = 868;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 75;
        $s->party_id = 16;
        $s->votes = 132;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 75;
        $s->party_id = 23;
        $s->votes = 96;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 76;
        $s->party_id = 7;
        $s->votes = 9830;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 76;
        $s->party_id = 8;
        $s->votes = 3836;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 76;
        $s->party_id = 10;
        $s->votes = 3460;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 76;
        $s->party_id = 9;
        $s->votes = 1177;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 76;
        $s->party_id = 13;
        $s->votes = 598;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 76;
        $s->party_id = 12;
        $s->votes = 335;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 77;
        $s->party_id = 7;
        $s->votes = 9986;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 77;
        $s->party_id = 8;
        $s->votes = 4659;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 77;
        $s->party_id = 9;
        $s->votes = 3884;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 77;
        $s->party_id = 10;
        $s->votes = 3322;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 77;
        $s->party_id = 12;
        $s->votes = 2979;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 77;
        $s->party_id = 13;
        $s->votes = 508;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 78;
        $s->party_id = 8;
        $s->votes = 11891;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 78;
        $s->party_id = 7;
        $s->votes = 8432;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 78;
        $s->party_id = 10;
        $s->votes = 2203;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 78;
        $s->party_id = 9;
        $s->votes = 528;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 78;
        $s->party_id = 13;
        $s->votes = 259;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 78;
        $s->party_id = 12;
        $s->votes = 173;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 79;
        $s->party_id = 7;
        $s->votes = 14655;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 79;
        $s->party_id = 9;
        $s->votes = 13878;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 79;
        $s->party_id = 8;
        $s->votes = 3871;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 79;
        $s->party_id = 10;
        $s->votes = 3662;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 79;
        $s->party_id = 12;
        $s->votes = 938;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 79;
        $s->party_id = 13;
        $s->votes = 794;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 80;
        $s->party_id = 7;
        $s->votes = 8442;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 80;
        $s->party_id = 8;
        $s->votes = 7792;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 80;
        $s->party_id = 10;
        $s->votes = 3423;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 80;
        $s->party_id = 9;
        $s->votes = 1334;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 80;
        $s->party_id = 12;
        $s->votes = 300;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 81;
        $s->party_id = 7;
        $s->votes = 9584;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 81;
        $s->party_id = 8;
        $s->votes = 8009;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 81;
        $s->party_id = 10;
        $s->votes = 5954;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 81;
        $s->party_id = 9;
        $s->votes = 2412;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 81;
        $s->party_id = 13;
        $s->votes = 770;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 81;
        $s->party_id = 12;
        $s->votes = 386;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 82;
        $s->party_id = 7;
        $s->votes = 10050;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 82;
        $s->party_id = 10;
        $s->votes = 4944;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 82;
        $s->party_id = 8;
        $s->votes = 4349;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 82;
        $s->party_id = 9;
        $s->votes = 1775;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 82;
        $s->party_id = 12;
        $s->votes = 597;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 82;
        $s->party_id = 13;
        $s->votes = 594;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 83;
        $s->party_id = 7;
        $s->votes = 9763;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 83;
        $s->party_id = 10;
        $s->votes = 4277;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 83;
        $s->party_id = 8;
        $s->votes = 3721;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 83;
        $s->party_id = 9;
        $s->votes = 1331;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 83;
        $s->party_id = 12;
        $s->votes = 1122;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 83;
        $s->party_id = 13;
        $s->votes = 469;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 84;
        $s->party_id = 9;
        $s->votes = 13585;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 84;
        $s->party_id = 7;
        $s->votes = 8438;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 84;
        $s->party_id = 10;
        $s->votes = 3092;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 84;
        $s->party_id = 16;
        $s->votes = 1932;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 84;
        $s->party_id = 8;
        $s->votes = 1824;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 84;
        $s->party_id = 12;
        $s->votes = 1474;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 84;
        $s->party_id = 13;
        $s->votes = 910;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 84;
        $s->party_id = 28;
        $s->votes = 146;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 85;
        $s->party_id = 7;
        $s->votes = 9229;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 85;
        $s->party_id = 10;
        $s->votes = 4333;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 85;
        $s->party_id = 9;
        $s->votes = 3768;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 85;
        $s->party_id = 12;
        $s->votes = 1481;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 85;
        $s->party_id = 8;
        $s->votes = 1386;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 85;
        $s->party_id = 13;
        $s->votes = 491;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 86;
        $s->party_id = 7;
        $s->votes = 12157;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 86;
        $s->party_id = 9;
        $s->votes = 8042;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 86;
        $s->party_id = 10;
        $s->votes = 3842;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 86;
        $s->party_id = 8;
        $s->votes = 1645;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 86;
        $s->party_id = 12;
        $s->votes = 880;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 86;
        $s->party_id = 13;
        $s->votes = 814;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 86;
        $s->party_id = 16;
        $s->votes = 333;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 86;
        $s->party_id = 29;
        $s->votes = 38;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 87;
        $s->party_id = 7;
        $s->votes = 9688;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 87;
        $s->party_id = 10;
        $s->votes = 5190;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 87;
        $s->party_id = 9;
        $s->votes = 3931;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 87;
        $s->party_id = 8;
        $s->votes = 2860;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 87;
        $s->party_id = 13;
        $s->votes = 681;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 87;
        $s->party_id = 12;
        $s->votes = 628;
        $s->save();
        
    }
    private function data2011(){
        $s = new Voter;
        $s->region_id = 14;
        $s->party_id = 30;
        $s->votes = 62677;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 14;
        $s->party_id = 32;
        $s->votes = 52201;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 14;
        $s->party_id = 31;
        $s->votes = 41701;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 14;
        $s->party_id = 34;
        $s->votes = 11507;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 14;
        $s->party_id = 33;
        $s->votes = 9608;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 14;
        $s->party_id = 45;
        $s->votes = 4895;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 14;
        $s->party_id = 44;
        $s->votes = 4785;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 14;
        $s->party_id = 35;
        $s->votes = 4406;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 14;
        $s->party_id = 39;
        $s->votes = 1401;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 14;
        $s->party_id = 37;
        $s->votes = 1094;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 14;
        $s->party_id = 38;
        $s->votes = 523;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 15;
        $s->party_id = 31;
        $s->votes = 56384;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 15;
        $s->party_id = 32;
        $s->votes = 52905;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 15;
        $s->party_id = 30;
        $s->votes = 47348;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 15;
        $s->party_id = 34;
        $s->votes = 26847;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 15;
        $s->party_id = 33;
        $s->votes = 9211;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 15;
        $s->party_id = 35;
        $s->votes = 8660;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 15;
        $s->party_id = 45;
        $s->votes = 3951;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 15;
        $s->party_id = 44;
        $s->votes = 2821;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 15;
        $s->party_id = 39;
        $s->votes = 1630;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 15;
        $s->party_id = 38;
        $s->votes = 595;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 16;
        $s->party_id = 30;
        $s->votes = 71766;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 16;
        $s->party_id = 32;
        $s->votes = 27457;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 16;
        $s->party_id = 31;
        $s->votes = 21258;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 16;
        $s->party_id = 34;
        $s->votes = 10683;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 16;
        $s->party_id = 33;
        $s->votes = 6619;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 16;
        $s->party_id = 45;
        $s->votes = 5057;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 16;
        $s->party_id = 44;
        $s->votes = 4714;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 16;
        $s->party_id = 35;
        $s->votes = 3952;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 16;
        $s->party_id = 39;
        $s->votes = 1602;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 16;
        $s->party_id = 40;
        $s->votes = 809;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 16;
        $s->party_id = 38;
        $s->votes = 464;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 17;
        $s->party_id = 30;
        $s->votes = 85445;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 17;
        $s->party_id = 32;
        $s->votes = 45751;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 17;
        $s->party_id = 31;
        $s->votes = 28606;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 17;
        $s->party_id = 34;
        $s->votes = 16514;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 17;
        $s->party_id = 35;
        $s->votes = 10774;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 17;
        $s->party_id = 33;
        $s->votes = 8292;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 17;
        $s->party_id = 45;
        $s->votes = 4690;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 17;
        $s->party_id = 44;
        $s->votes = 3805;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 17;
        $s->party_id = 39;
        $s->votes = 1873;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 17;
        $s->party_id = 36;
        $s->votes = 1237;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 17;
        $s->party_id = 46;
        $s->votes = 830;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 17;
        $s->party_id = 38;
        $s->votes = 516;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 18;
        $s->party_id = 30;
        $s->votes = 82699;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 18;
        $s->party_id = 32;
        $s->votes = 35459;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 18;
        $s->party_id = 31;
        $s->votes = 21850;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 18;
        $s->party_id = 34;
        $s->votes = 10798;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 18;
        $s->party_id = 33;
        $s->votes = 9526;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 18;
        $s->party_id = 44;
        $s->votes = 6485;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 18;
        $s->party_id = 35;
        $s->votes = 4857;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 18;
        $s->party_id = 45;
        $s->votes = 4427;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 18;
        $s->party_id = 39;
        $s->votes = 2441;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 18;
        $s->party_id = 43;
        $s->votes = 1904;
        $s->save();
        
        $s = new Voter;
        $s->region_id = 18;
        $s->party_id = 38;
        $s->votes = 578;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 88;
        $s->party_id = 32;
        $s->votes = 6888;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 88;
        $s->party_id = 31;
        $s->votes = 5321;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 88;
        $s->party_id = 30;
        $s->votes = 5206;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 88;
        $s->party_id = 34;
        $s->votes = 2873;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 89;
        $s->party_id = 30;
        $s->votes = 11978;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 89;
        $s->party_id = 32;
        $s->votes = 6397;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 89;
        $s->party_id = 34;
        $s->votes = 1725;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 89;
        $s->party_id = 31;
        $s->votes = 1710;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 89;
        $s->party_id = 44;
        $s->votes = 959;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 90;
        $s->party_id = 31;
        $s->votes = 10024;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 90;
        $s->party_id = 30;
        $s->votes = 4630;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 90;
        $s->party_id = 32;
        $s->votes = 2209;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 90;
        $s->party_id = 34;
        $s->votes = 801;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 91;
        $s->party_id = 30;
        $s->votes = 8500;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 91;
        $s->party_id = 32;
        $s->votes = 5841;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 91;
        $s->party_id = 31;
        $s->votes = 3719;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 91;
        $s->party_id = 34;
        $s->votes = 1977;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 92;
        $s->party_id = 32;
        $s->votes = 10890;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 92;
        $s->party_id = 30;
        $s->votes = 6642;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 92;
        $s->party_id = 31;
        $s->votes = 5775;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 92;
        $s->party_id = 34;
        $s->votes = 1846;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 93;
        $s->party_id = 30;
        $s->votes = 10695;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 93;
        $s->party_id = 32;
        $s->votes = 7814;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 93;
        $s->party_id = 31;
        $s->votes = 2918;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 93;
        $s->party_id = 34;
        $s->votes = 1767;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 94;
        $s->party_id = 30;
        $s->votes = 11691;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 94;
        $s->party_id = 32;
        $s->votes = 7680;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 94;
        $s->party_id = 31;
        $s->votes = 2597;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 94;
        $s->party_id = 34;
        $s->votes = 1088;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 95;
        $s->party_id = 30;
        $s->votes = 8368;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 95;
        $s->party_id = 32;
        $s->votes = 5031;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 95;
        $s->party_id = 34;
        $s->votes = 2692;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 95;
        $s->party_id = 31;
        $s->votes = 2596;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 96;
        $s->party_id = 31;
        $s->votes = 9969;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 96;
        $s->party_id = 32;
        $s->votes = 7032;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 96;
        $s->party_id = 30;
        $s->votes = 6307;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 96;
        $s->party_id = 34;
        $s->votes = 759;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 97;
        $s->party_id = 34;
        $s->votes = 12201;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 97;
        $s->party_id = 32;
        $s->votes = 9444;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 97;
        $s->party_id = 30;
        $s->votes = 4797;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 97;
        $s->party_id = 31;
        $s->votes = 1906;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 98;
        $s->party_id = 31;
        $s->votes = 12501;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 98;
        $s->party_id = 30;
        $s->votes = 8353;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 98;
        $s->party_id = 32;
        $s->votes = 5635;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 98;
        $s->party_id = 34;
        $s->votes = 1339;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 99;
        $s->party_id = 32;
        $s->votes = 10095;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 99;
        $s->party_id = 30;
        $s->votes = 8591;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 99;
        $s->party_id = 31;
        $s->votes = 8373;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 99;
        $s->party_id = 34;
        $s->votes = 1097;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 100;
        $s->party_id = 31;
        $s->votes = 12020;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 100;
        $s->party_id = 34;
        $s->votes = 10243;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 100;
        $s->party_id = 32;
        $s->votes = 2755;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 100;
        $s->party_id = 30;
        $s->votes = 2544;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 100;
        $s->party_id = 35;
        $s->votes = 1514;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 101;
        $s->party_id = 31;
        $s->votes = 9656;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 101;
        $s->party_id = 32;
        $s->votes = 4239;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 101;
        $s->party_id = 41;
        $s->votes = 3225;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 101;
        $s->party_id = 30;
        $s->votes = 2623;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 101;
        $s->party_id = 34;
        $s->votes = 1000;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 102;
        $s->party_id = 30;
        $s->votes = 10359;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 102;
        $s->party_id = 31;
        $s->votes = 10279;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 102;
        $s->party_id = 32;
        $s->votes = 2880;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 102;
        $s->party_id = 42;
        $s->votes = 2004;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 102;
        $s->party_id = 34;
        $s->votes = 548;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 103;
        $s->party_id = 32;
        $s->votes = 10026;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 103;
        $s->party_id = 34;
        $s->votes = 7702;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 103;
        $s->party_id = 30;
        $s->votes = 2609;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 103;
        $s->party_id = 31;
        $s->votes = 2596;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 104;
        $s->party_id = 32;
        $s->votes = 11541;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 104;
        $s->party_id = 30;
        $s->votes = 9366;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 104;
        $s->party_id = 31;
        $s->votes = 4226;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 104;
        $s->party_id = 34;
        $s->votes = 2085;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 105;
        $s->party_id = 30;
        $s->votes = 12104;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 105;
        $s->party_id = 31;
        $s->votes = 2793;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 105;
        $s->party_id = 32;
        $s->votes = 2704;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 105;
        $s->party_id = 34;
        $s->votes = 1278;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 106;
        $s->party_id = 30;
        $s->votes = 13499;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 106;
        $s->party_id = 32;
        $s->votes = 6724;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 106;
        $s->party_id = 31;
        $s->votes = 2076;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 106;
        $s->party_id = 34;
        $s->votes = 1736;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 107;
        $s->party_id = 30;
        $s->votes = 12866;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 107;
        $s->party_id = 32;
        $s->votes = 8002;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 107;
        $s->party_id = 31;
        $s->votes = 3249;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 107;
        $s->party_id = 34;
        $s->votes = 2656;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 108;
        $s->party_id = 30;
        $s->votes = 12736;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 108;
        $s->party_id = 31;
        $s->votes = 6346;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 108;
        $s->party_id = 32;
        $s->votes = 2780;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 108;
        $s->party_id = 44;
        $s->votes = 1004;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 108;
        $s->party_id = 34;
        $s->votes = 983;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 109;
        $s->party_id = 30;
        $s->votes = 12955;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 109;
        $s->party_id = 31;
        $s->votes = 3379;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 109;
        $s->party_id = 32;
        $s->votes = 2945;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 109;
        $s->party_id = 34;
        $s->votes = 985;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 110;
        $s->party_id = 30;
        $s->votes = 11035;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 110;
        $s->party_id = 32;
        $s->votes = 2754;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 110;
        $s->party_id = 31;
        $s->votes = 2346;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 110;
        $s->party_id = 34;
        $s->votes = 1673;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 110;
        $s->party_id = 44;
        $s->votes = 1102;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 111;
        $s->party_id = 30;
        $s->votes = 9885;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 111;
        $s->party_id = 32;
        $s->votes = 5231;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 111;
        $s->party_id = 34;
        $s->votes = 3654;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 111;
        $s->party_id = 31;
        $s->votes = 3035;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 112;
        $s->party_id = 30;
        $s->votes = 8954;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 112;
        $s->party_id = 34;
        $s->votes = 8916;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 112;
        $s->party_id = 32;
        $s->votes = 3559;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 112;
        $s->party_id = 31;
        $s->votes = 1690;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 112;
        $s->party_id = 37;
        $s->votes = 509;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 113;
        $s->party_id = 30;
        $s->votes = 16384;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 113;
        $s->party_id = 32;
        $s->votes = 14602;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 113;
        $s->party_id = 31;
        $s->votes = 1850;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 113;
        $s->party_id = 34;
        $s->votes = 1595;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 114;
        $s->party_id = 30;
        $s->votes = 13814;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 114;
        $s->party_id = 32;
        $s->votes = 7555;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 114;
        $s->party_id = 31;
        $s->votes = 3324;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 114;
        $s->party_id = 34;
        $s->votes = 2786;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 115;
        $s->party_id = 30;
        $s->votes = 13067;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 115;
        $s->party_id = 32;
        $s->votes = 7167;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 115;
        $s->party_id = 31;
        $s->votes = 5551;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 115;
        $s->party_id = 34;
        $s->votes = 1942;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 116;
        $s->party_id = 30;
        $s->votes = 11626;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 116;
        $s->party_id = 31;
        $s->votes = 5111;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 116;
        $s->party_id = 32;
        $s->votes = 1531;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 116;
        $s->party_id = 34;
        $s->votes = 492;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 117;
        $s->party_id = 30;
        $s->votes = 11864;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 117;
        $s->party_id = 34;
        $s->votes = 4170;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 117;
        $s->party_id = 32;
        $s->votes = 3659;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 117;
        $s->party_id = 31;
        $s->votes = 3139;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 117;
        $s->party_id = 37;
        $s->votes = 501;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 118;
        $s->party_id = 30;
        $s->votes = 12650;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 118;
        $s->party_id = 31;
        $s->votes = 5911;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 118;
        $s->party_id = 32;
        $s->votes = 969;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 118;
        $s->party_id = 34;
        $s->votes = 497;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 119;
        $s->party_id = 30;
        $s->votes = 15746;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 119;
        $s->party_id = 32;
        $s->votes = 11971;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 119;
        $s->party_id = 31;
        $s->votes = 4024;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 119;
        $s->party_id = 34;
        $s->votes = 1513;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 120;
        $s->party_id = 30;
        $s->votes = 12926;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 120;
        $s->party_id = 37;
        $s->votes = 3806;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 120;
        $s->party_id = 31;
        $s->votes = 1098;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 120;
        $s->party_id = 32;
        $s->votes = 1066;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 120;
        $s->party_id = 44;
        $s->votes = 948;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 120;
        $s->party_id = 34;
        $s->votes = 367;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 121;
        $s->party_id = 30;
        $s->votes = 12521;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 121;
        $s->party_id = 31;
        $s->votes = 7597;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 121;
        $s->party_id = 32;
        $s->votes = 3368;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 121;
        $s->party_id = 34;
        $s->votes = 1062;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 121;
        $s->party_id = 44;
        $s->votes = 1022;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 122;
        $s->party_id = 30;
        $s->votes = 12116;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 122;
        $s->party_id = 31;
        $s->votes = 4527;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 122;
        $s->party_id = 32;
        $s->votes = 2497;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 122;
        $s->party_id = 44;
        $s->votes = 1115;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 122;
        $s->party_id = 34;
        $s->votes = 653;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 123;
        $s->party_id = 30;
        $s->votes = 10483;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 123;
        $s->party_id = 37;
        $s->votes = 3432;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 123;
        $s->party_id = 34;
        $s->votes = 2480;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 123;
        $s->party_id = 31;
        $s->votes = 1701;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 123;
        $s->party_id = 32;
        $s->votes = 1224;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 124;
        $s->party_id = 32;
        $s->votes = 15087;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 124;
        $s->party_id = 30;
        $s->votes = 8970;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 124;
        $s->party_id = 34;
        $s->votes = 2937;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 124;
        $s->party_id = 31;
        $s->votes = 2263;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 124;
        $s->party_id = 43;
        $s->votes = 744;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 125;
        $s->party_id = 30;
        $s->votes = 9888;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 125;
        $s->party_id = 32;
        $s->votes = 4500;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 125;
        $s->party_id = 34;
        $s->votes = 3703;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 125;
        $s->party_id = 31;
        $s->votes = 1369;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 126;
        $s->party_id = 30;
        $s->votes = 12011;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 126;
        $s->party_id = 32;
        $s->votes = 7791;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 126;
        $s->party_id = 31;
        $s->votes = 1626;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 126;
        $s->party_id = 34;
        $s->votes = 1586;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 127;
        $s->party_id = 30;
        $s->votes = 10318;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 127;
        $s->party_id = 37;
        $s->votes = 4230;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 127;
        $s->party_id = 32;
        $s->votes = 3306;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 127;
        $s->party_id = 31;
        $s->votes = 2716;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 127;
        $s->party_id = 44;
        $s->votes = 906;
        $s->save();
        
        $s = new Voter;
        $s->constituency_id = 127;
        $s->party_id = 34;
        $s->votes = 852;
        $s->save();
        
        }
 

}
