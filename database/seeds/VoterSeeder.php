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
        self::massMakeVoters(10,1,1,1);
        self::massMakeVoters(5,2,2,3);
    

    }


    private function massMakeVoters(int $amount, int $constituency_id,int $constituency_rep_id,int $region_rep_id )
    {
        for ($x = 0; $x <= $amount; $x+=1) {
            $s = new Voter;
            $s->constituency_id =$constituency_id;
            $s->constituency_represenatative_id =$constituency_rep_id;
            $s->region_represenatative_id =$region_rep_id;
            $s->save();
          } 
    }
}
