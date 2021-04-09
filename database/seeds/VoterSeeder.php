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
    }
    private function testData(){
        $count = 0;
        for ($region = 1; $region <= 3; $region++) {
            for ($rep = 1; $rep <= 3; $rep++){
                $count ++;
                $s = new Voter;
                $s->region_id = $region;
                $s->representative_id = $count;
                $s->votes = rand(100, 1000);
                $s->save();
            }
        }
        for ($constituency = 1; $constituency <= 7; $constituency++) {
            for ($rep = 1; $rep <= 3; $rep++){
                $count ++;
                $s = new Voter;
                $s->constituency_id = $constituency;
                $s->representative_id = $count;
                $s->votes = rand(100, 1000);
                $s->save();
            }
        }     
    } 
}
