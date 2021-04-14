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
    }
}
