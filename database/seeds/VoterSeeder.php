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
        for ($constituncy = 1; $constituncy <= 7; $constituncy++) {
            for ($constituncyRep = 1; $constituncyRep <= 10; $constituncyRep++) {
                for ($regionalRep = 1; $regionalRep <= 10; $regionalRep++){
                    self::massMakeVoters(rand(5, 15), $constituncy, $constituncyRep, $regionalRep);
                }
            }    
        } 
    }

    private function massMakeVoters(int $amount, int $constituency_id,int $constituency_rep_id,int $region_rep_id )
    {
        for ($x = 0; $x < $amount; $x++) {
            $s = new Voter;
            $s->constituency_id =$constituency_id;
            $s->constituency_represenatative_id =$constituency_rep_id;
            $s->region_represenatative_id =$region_rep_id;
            $s->save();
          } 
    }
}
