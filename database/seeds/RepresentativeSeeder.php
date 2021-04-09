<?php

use Illuminate\Database\Seeder;
use App\Representative;
class RepresentativeSeeder extends Seeder
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

    private function testData()
    {
        for ($seat = 1; $seat <= 10; $seat++) 
        {
            for ($parties = 1; $parties <= 3; $parties++)
            {
                $r = new Representative;
                $r->name = "R" . $seat . $parties;
                $r->seat_id =  $seat;
                $r->party_id = $parties;
                $r->save();
            }
        }  
    }
}
