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
        
    }
}
