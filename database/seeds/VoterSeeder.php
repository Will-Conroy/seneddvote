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
        self::testDataDefault();
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


    private function testDataDefault(){

        for ($region = 4; $region <= 8; $region++) {
            for ($party =4; $party <= 6; $party++){
     
                $s = new Voter;
                $s->region_id = $region;
                $s->party_id = $party;
                $s->votes = rand(100, 1000);
                $s->save();
            }
        }/*
        for ($constituency = 1; $constituency <= 7; $constituency++) {
            for ($party = 1; $party <= 3; $party++){
    
                $s = new Voter;
                $s->constituency_id = $constituency;
                $s->party_id = $party;
                $s->votes = rand(100, 1000);
                $s->save();
            }
        }     */
    }
}
