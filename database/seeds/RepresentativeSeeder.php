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
        self::testDataDefault();
    }

    private function testData()
    {
        for($seatsPerRegion = 0; $seatsPerRegion < 2; $seatsPerRegion++)
        {
            for ($region = 1; $region <= 3; $region++) 
            {
                for ($parties = 1; $parties <= 3; $parties++)
                {
                    $r = new Representative;
                    $r->name = "R" . $region . $parties;
                    $r->region_id =  $region;
                    $r->party_id = $parties;
                    $r->priority = $seatsPerRegion;
                    $r->save();
                }
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
                $r->priority = 0;
                $r->save();
            }
        } 
    }



    private function testDataDefault()
    {
        for($seatsPerRegion = 0; $seatsPerRegion < 3; $seatsPerRegion++)
        {
            for ($region = 4; $region <= 8; $region++) 
            {
                for ($parties = 4; $parties <= 6; $parties++)
                {
                    $r = new Representative;
                    $r->name = "R" . $region . $parties;
                    $r->region_id =  $region;
                    $r->party_id = $parties;
                    $r->priority = $seatsPerRegion;
                    $r->save();
                }
            }
        }    
        /*
        for ($constituency = 8; $constituency <= 48; $constituency++) 
        {
            for ($parties = 1; $parties <= 3; $parties++)
            {
                $r = new Representative;
                $r->name = "R" . $constituency . $parties;
                $r->constituency_id =  $constituency;
                $r->party_id = $parties;
                $r->priority = 0;
                $r->save();
            }
        } 
        */
    }
}
