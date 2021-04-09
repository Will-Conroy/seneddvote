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
        for ($region = 1; $region <= 3; $region++) 
        {
            for ($parties = 1; $parties <= 3; $parties++)
            {
                $r = new Representative;
                $r->name = "R" . $region . $parties;
                $r->region_id =  $region;
                $r->party_id = $parties;
                $r->save();
            }
        }
        for ($constituency = 1; $constituency <= 7; $constituency++) 
        {
            for ($parties = 1; $parties <= 3; $parties++)
            {
                $r = new Representative;
                $r->name = "R" . $constituency . $parties;
                $r->constituency_id =  $constituency;
                $r->party_id = $parties;
                $r->save();
            }
        } 
    }
}
