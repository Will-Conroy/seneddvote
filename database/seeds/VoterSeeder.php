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
        for ($seat = 1; $seat <= 10; $seat++) {
            for ($rep = 1; $rep <= 3; $rep++){
                $count ++;
                $s = new Voter;
                $s->seat_id = $seat;
                $s->representative_id = $count;
                $s->votes = rand(100, 1000);
                $s->save();
            }
        }    
    } 
}
