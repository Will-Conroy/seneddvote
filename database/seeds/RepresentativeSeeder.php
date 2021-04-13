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
        self::testDataDefault(4,8, 8, 24);
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



    private function testDataDefault(int $regonStart, int $regionEnd, int $constituencyStart, int $constituencyEnd)
    {
        for($seatsPerRegion = 0; $seatsPerRegion < 3; $seatsPerRegion++)
        {
            for ($region = $regonStart; $region <= $regionEnd; $region++) 
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
        
        for ($constituency = $constituencyStart; $constituency <= $constituencyEnd; $constituency++) 
        {
            for ($parties = 4; $parties <= 6; $parties++)
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
}
