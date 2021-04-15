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
        self::testDataDefault(4,8, 8, 47);
        self::data2016();
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
    private function data2016(){
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  9; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Llyr Gruffydd";
        $r->region_id =  9; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Mark Isherwood";
        $r->region_id =  9; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Michelle Brown";
        $r->region_id =  9; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Nathan Gill";
        $r->region_id =  9; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  9; 
        $r->party_id = 11;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  9; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  9; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  9; 
        $r->party_id = 14;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  9; 
        $r->party_id = 15;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  9; 
        $r->party_id = 16;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  9; 
        $r->party_id = 17;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Simon Thomas";
        $r->region_id =  10; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  10; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Eluned Morgan";
        $r->region_id =  10; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Joyce Watson";
        $r->region_id =  10; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Neil Hamilton";
        $r->region_id =  10; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  10; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  10; 
        $r->party_id = 11;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  10; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  10; 
        $r->party_id = 18;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  10; 
        $r->party_id = 19;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  10; 
        $r->party_id = 15;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  10; 
        $r->party_id = 14;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  10; 
        $r->party_id = 17;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  11; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "David Rhys Lloyd";
        $r->region_id =  11; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Bethan Jenkins";
        $r->region_id =  11; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Suzy Davies";
        $r->region_id =  11; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Caroline Jones";
        $r->region_id =  11; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  11; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  11; 
        $r->party_id = 11;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  11; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  11; 
        $r->party_id = 15;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  11; 
        $r->party_id = 20;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  11; 
        $r->party_id = 17;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  12; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Neil John McEvoy";
        $r->region_id =  12; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Andrew RT Davies";
        $r->region_id =  12; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "David Melding";
        $r->region_id =  12; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Gareth Bennett";
        $r->region_id =  12; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  12; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  12; 
        $r->party_id = 11;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  12; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  12; 
        $r->party_id = 21;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  12; 
        $r->party_id = 15;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  12; 
        $r->party_id = 20;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  12; 
        $r->party_id = 16;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  12; 
        $r->party_id = 22;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  12; 
        $r->party_id = 23;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  13; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Mark Reckless";
        $r->region_id =  13; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "David W Rowlands";
        $r->region_id =  13; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Mohammad Asghar";
        $r->region_id =  13; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Steffan Lewis";
        $r->region_id =  13; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  13; 
        $r->party_id = 11;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  13; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  13; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  13; 
        $r->party_id = 15;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  13; 
        $r->party_id = 20;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  13; 
        $r->party_id = 17;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Unknown";
        $r->region_id =  13; 
        $r->party_id = 24;
        $r->priority = 0;
        $r->save();
      
    }
}
