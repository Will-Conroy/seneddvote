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
        #self::data2011();
        #self::data2007();
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
        $r->name = "David Rhys Lloyd &#40;Dai Lloyd&#41;";
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
        $r->name = "Mohammad Asghar &#40;Oscar&#41;";
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
        
        $r = new Representative; 
        $r->name = "Janet Finch-Saunders";
        $r->constituency_id =  48; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Trystan Lewis";
        $r->constituency_id =  48; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Mike Priestley";
        $r->constituency_id =  48; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Sarah Lesiter-Burgess";
        $r->constituency_id =  48; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Petra Haig";
        $r->constituency_id =  48; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Carl Sargeant";
        $r->constituency_id =  49; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Mike Gibbs";
        $r->constituency_id =  49; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Michelle Brown";
        $r->constituency_id =  49; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Jacqui Hurst";
        $r->constituency_id =  49; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Peter Williams";
        $r->constituency_id =  49; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Martin Bennewith";
        $r->constituency_id =  49; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Sian Gwenllian";
        $r->constituency_id =  50; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Sion Jones";
        $r->constituency_id =  50; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Martin Peet";
        $r->constituency_id =  50; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Sara Lloyd Williams";
        $r->constituency_id =  50; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Ken Skates";
        $r->constituency_id =  51; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Simon Baynes";
        $r->constituency_id =  51; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Mabon ap Gwynfor";
        $r->constituency_id =  51; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Mandy Jones";
        $r->constituency_id =  51; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Aled Roberts";
        $r->constituency_id =  51; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Duncan Rees";
        $r->constituency_id =  51; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Darren Millar";
        $r->constituency_id =  52; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Llyr Gruffydd";
        $r->constituency_id =  52; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Jo Thomas";
        $r->constituency_id =  52; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " David Edwards";
        $r->constituency_id =  52; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Victor Babu";
        $r->constituency_id =  52; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Julian Mahy";
        $r->constituency_id =  52; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Hannah Blythyn";
        $r->constituency_id =  53; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Huw Williams";
        $r->constituency_id =  53; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Nigel Williams";
        $r->constituency_id =  53; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Paul Rowlinson";
        $r->constituency_id =  53; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Tom Rippeth";
        $r->constituency_id =  53; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Ann Jones";
        $r->constituency_id =  54; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Sam Rowlands";
        $r->constituency_id =  54; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Paul Daviers-Cooke";
        $r->constituency_id =  54; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Mair Rowlands";
        $r->constituency_id =  54; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Gwyn Williams";
        $r->constituency_id =  54; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Lesley Griffiths";
        $r->constituency_id =  55; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Andrew Atkinson";
        $r->constituency_id =  55; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Carrie Harper";
        $r->constituency_id =  55; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Jeanette Bassford-Barton";
        $r->constituency_id =  55; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Beryl Blackmore";
        $r->constituency_id =  55; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Alan Butterworth";
        $r->constituency_id =  55; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Rhun ap Iorwerth";
        $r->constituency_id =  56; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Julia Dobson";
        $r->constituency_id =  56; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Simon Wall";
        $r->constituency_id =  56; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Clay Theakston";
        $r->constituency_id =  56; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Gerry Wolff";
        $r->constituency_id =  56; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Thomas Crofts";
        $r->constituency_id =  56; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Daniel ap Eifion Jones";
        $r->constituency_id =  56; 
        $r->party_id = 16;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Kirsty Williams";
        $r->constituency_id =  57; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Gary Price";
        $r->constituency_id =  57; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Alex Thomas";
        $r->constituency_id =  57; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Thomas Turton";
        $r->constituency_id =  57; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Freddy Greaves";
        $r->constituency_id =  57; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Grenville Ham";
        $r->constituency_id =  57; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Adam Price";
        $r->constituency_id =  58; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Stephen Jeacock";
        $r->constituency_id =  58; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Matthew Paul";
        $r->constituency_id =  58; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Neil Hamilton";
        $r->constituency_id =  58; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " William Powell";
        $r->constituency_id =  58; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Freya Amsbury";
        $r->constituency_id =  58; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Angela Burns";
        $r->constituency_id =  59; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Marc Tierney";
        $r->constituency_id =  59; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Simon Thomas";
        $r->constituency_id =  59; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Allan Brookes";
        $r->constituency_id =  59; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Chris Overton";
        $r->constituency_id =  59; 
        $r->party_id = 16;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Val Bradley";
        $r->constituency_id =  59; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Alistair Cameron";
        $r->constituency_id =  59; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Elin Jones";
        $r->constituency_id =  60; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Elizabeth Evans";
        $r->constituency_id =  60; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Gethin James";
        $r->constituency_id =  60; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Dr Felix Aubel";
        $r->constituency_id =  60; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Iwan Wyn Jones";
        $r->constituency_id =  60; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Brian Williams";
        $r->constituency_id =  60; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Dafydd Elis-Thomas";
        $r->constituency_id =  61; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Neil Fairlamb";
        $r->constituency_id =  61; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Ian Macintyre";
        $r->constituency_id =  61; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Frank Wykes";
        $r->constituency_id =  61; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Louise Hughes";
        $r->constituency_id =  61; 
        $r->party_id = 25;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Steven William Churchman";
        $r->constituency_id =  61; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Alice Hooker-Stroud";
        $r->constituency_id =  61; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Lee Waters";
        $r->constituency_id =  62; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Helen Mary Jones";
        $r->constituency_id =  62; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Ken Rees";
        $r->constituency_id =  62; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Stefan Ryszewski";
        $r->constituency_id =  62; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Sian Caiach";
        $r->constituency_id =  62; 
        $r->party_id = 26;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Guy Smith";
        $r->constituency_id =  62; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Gemma Bowker";
        $r->constituency_id =  62; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Russell George";
        $r->constituency_id =  63; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Jane Dodds";
        $r->constituency_id =  63; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Des Parkinson";
        $r->constituency_id =  63; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Aled Morgan Hughes";
        $r->constituency_id =  63; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Martyn Stuart Singleton";
        $r->constituency_id =  63; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Richard Chaloner";
        $r->constituency_id =  63; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Paul Davies";
        $r->constituency_id =  64; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Dan Lodge";
        $r->constituency_id =  64; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " John Osmond";
        $r->constituency_id =  64; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Howard Lillyman";
        $r->constituency_id =  64; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Bob Kilmister";
        $r->constituency_id =  64; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Frances Bryant";
        $r->constituency_id =  64; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "David Rees";
        $r->constituency_id =  65; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Bethan Jenkins";
        $r->constituency_id =  65; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Glenda Davies";
        $r->constituency_id =  65; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " David Jenkins";
        $r->constituency_id =  65; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Helen Ceri Clarke";
        $r->constituency_id =  65; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Jonathan Tier";
        $r->constituency_id =  65; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Carwyn Jones";
        $r->constituency_id =  66; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " George Jabbour";
        $r->constituency_id =  66; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Caroline Jones";
        $r->constituency_id =  66; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " James Radcliffe";
        $r->constituency_id =  66; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Jonathan Pratt";
        $r->constituency_id =  66; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Charlie Barlow";
        $r->constituency_id =  66; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Rebecca Evans";
        $r->constituency_id =  67; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Lyndon Jones";
        $r->constituency_id =  67; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Colin Beckett";
        $r->constituency_id =  67; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Harri Roberts";
        $r->constituency_id =  67; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Sheila Kingston-Jones";
        $r->constituency_id =  67; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Abi Cherry-Hamer";
        $r->constituency_id =  67; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Jeremy Miles";
        $r->constituency_id =  68; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Alun Llewelyn";
        $r->constituency_id =  68; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Richard Pritchard";
        $r->constituency_id =  68; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Peter Crocker-Jaques";
        $r->constituency_id =  68; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Steve Hunt";
        $r->constituency_id =  68; 
        $r->party_id = 16;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Frank Little";
        $r->constituency_id =  68; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Lisa Rapado";
        $r->constituency_id =  68; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Huw Irranca-Davies";
        $r->constituency_id =  69; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Tim Thomas";
        $r->constituency_id =  69; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Elizabeth Kendall";
        $r->constituency_id =  69; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Jamie Wallis";
        $r->constituency_id =  69; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Anita Davies";
        $r->constituency_id =  69; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Laurie Brophy";
        $r->constituency_id =  69; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Mike Hedges";
        $r->constituency_id =  70; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Clifford Johnson";
        $r->constituency_id =  70; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Dic Jones";
        $r->constituency_id =  70; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Sadie Vidal";
        $r->constituency_id =  70; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Charlene Webster";
        $r->constituency_id =  70; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Tony Young";
        $r->constituency_id =  70; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Julie James";
        $r->constituency_id =  71; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Craig Lawton";
        $r->constituency_id =  71; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "David Rhys Lloyd &#40;Dai Lloyd&#41;";
        $r->constituency_id =  71; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Rosie Irwin";
        $r->constituency_id =  71; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Chris Holley";
        $r->constituency_id =  71; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Gareth Tucker";
        $r->constituency_id =  71; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Brian Johnson";
        $r->constituency_id =  71; 
        $r->party_id = 27;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Jenny Rathbone";
        $r->constituency_id =  72; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Eluned Parrott";
        $r->constituency_id =  72; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Joel Williams";
        $r->constituency_id =  72; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Glyn Wise";
        $r->constituency_id =  72; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Mohammed Islam";
        $r->constituency_id =  72; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Amelia Womack";
        $r->constituency_id =  72; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Jane Croad";
        $r->constituency_id =  72; 
        $r->party_id = 16;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Julie Morgan";
        $r->constituency_id =  73; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Jayne Louise Cowan";
        $r->constituency_id =  73; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Haydn Rushworth";
        $r->constituency_id =  73; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Elin Walker Jones";
        $r->constituency_id =  73; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " John Dixon";
        $r->constituency_id =  73; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Fiona Burt";
        $r->constituency_id =  73; 
        $r->party_id = 16;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Chris von Ruhland";
        $r->constituency_id =  73; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Vaughan Gething";
        $r->constituency_id =  74; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Ben Gray";
        $r->constituency_id =  74; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Dafydd Davies";
        $r->constituency_id =  74; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Hugh Moelwyn Hughes";
        $r->constituency_id =  74; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Nigel Howells";
        $r->constituency_id =  74; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Anthony Slaughter";
        $r->constituency_id =  74; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Mark Drakeford";
        $r->constituency_id =  75; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Neil John McEvoy";
        $r->constituency_id =  75; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Sean Driscoll";
        $r->constituency_id =  75; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Gareth Bennett";
        $r->constituency_id =  75; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Hannah Pudner";
        $r->constituency_id =  75; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Cadan ap Tomos";
        $r->constituency_id =  75; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Eliot Freedman";
        $r->constituency_id =  75; 
        $r->party_id = 16;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Lee Woolls";
        $r->constituency_id =  75; 
        $r->party_id = 23;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Vikki Howells";
        $r->constituency_id =  76; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Cerith Griffiths";
        $r->constituency_id =  76; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Liz Wilks";
        $r->constituency_id =  76; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Lyn Hudson";
        $r->constituency_id =  76; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " John Matthews";
        $r->constituency_id =  76; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Michael Wallace";
        $r->constituency_id =  76; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Mick Antoniw";
        $r->constituency_id =  77; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Chad Rickard";
        $r->constituency_id =  77; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Joel Stephen James";
        $r->constituency_id =  77; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Edwin Allen";
        $r->constituency_id =  77; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Mike Powell";
        $r->constituency_id =  77; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Ken Barker";
        $r->constituency_id =  77; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Leanne Wood";
        $r->constituency_id =  78; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Leighton Andrews";
        $r->constituency_id =  78; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Stephen Clee";
        $r->constituency_id =  78; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Maria Hill";
        $r->constituency_id =  78; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Pat Matthews";
        $r->constituency_id =  78; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Rhys Taylor";
        $r->constituency_id =  78; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Jane Hutt";
        $r->constituency_id =  79; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Ross England";
        $r->constituency_id =  79; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Ian Johnson";
        $r->constituency_id =  79; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Lawrence Andrews";
        $r->constituency_id =  79; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Denis Campbell";
        $r->constituency_id =  79; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Alison Haden";
        $r->constituency_id =  79; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Alun Davies";
        $r->constituency_id =  80; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Nigel Copner";
        $r->constituency_id =  80; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Kevin Boucher";
        $r->constituency_id =  80; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Tracey West";
        $r->constituency_id =  80; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Brendan D&#39;Cruz";
        $r->constituency_id =  80; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Hefin David";
        $r->constituency_id =  81; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Lindsay Whittle";
        $r->constituency_id =  81; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Sam Gould";
        $r->constituency_id =  81; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Jane Pratt";
        $r->constituency_id =  81; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Andrew Creak";
        $r->constituency_id =  81; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Aladdin Ayesh";
        $r->constituency_id =  81; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Rhianon Passmore";
        $r->constituency_id =  82; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Joe Smyth";
        $r->constituency_id =  82; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Lyn Ackerman";
        $r->constituency_id =  82; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Paul Williams";
        $r->constituency_id =  82; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Matthew Kidner";
        $r->constituency_id =  82; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Katy Beddoe";
        $r->constituency_id =  82; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Dawn Bowden";
        $r->constituency_id =  83; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "David J Rowlands";
        $r->constituency_id =  83; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Brian Thomas";
        $r->constituency_id =  83; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Elizabeth Simon";
        $r->constituency_id =  83; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Bob Griffin";
        $r->constituency_id =  83; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Julie Colbran";
        $r->constituency_id =  83; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Nick Ramsay";
        $r->constituency_id =  84; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Catherine Fookes";
        $r->constituency_id =  84; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Tim Price";
        $r->constituency_id =  84; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Debby Blakebrough";
        $r->constituency_id =  84; 
        $r->party_id = 16;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Jonathan Clark";
        $r->constituency_id =  84; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Veronica German";
        $r->constituency_id =  84; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Christopher Were";
        $r->constituency_id =  84; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Stephen Morris";
        $r->constituency_id =  84; 
        $r->party_id = 28;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "John Griffiths";
        $r->constituency_id =  85; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " James Peterson";
        $r->constituency_id =  85; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Munawar Mughal";
        $r->constituency_id =  85; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Paul Halliday";
        $r->constituency_id =  85; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Anthony Michael Salkeld";
        $r->constituency_id =  85; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Peter Varley";
        $r->constituency_id =  85; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Jayne Bryant";
        $r->constituency_id =  86; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Matthew Robert Hatton Evans";
        $r->constituency_id =  86; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Michael Ford";
        $r->constituency_id =  86; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Simon Coopey";
        $r->constituency_id =  86; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Liz Newton";
        $r->constituency_id =  86; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Pippa Bartolotti";
        $r->constituency_id =  86; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Bill Fearnley-Whittingstall";
        $r->constituency_id =  86; 
        $r->party_id = 16;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Gruff Meredith";
        $r->constituency_id =  86; 
        $r->party_id = 29;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = "Lynne Neagle";
        $r->constituency_id =  87; 
        $r->party_id = 7;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Susan Boucher";
        $r->constituency_id =  87; 
        $r->party_id = 10;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Graham Smith";
        $r->constituency_id =  87; 
        $r->party_id = 9;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Matthew Woolfall-Jones";
        $r->constituency_id =  87; 
        $r->party_id = 8;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Steve Jenkins";
        $r->constituency_id =  87; 
        $r->party_id = 13;
        $r->priority = 0;
        $r->save();
        
        $r = new Representative; 
        $r->name = " Alison Willott";
        $r->constituency_id =  87; 
        $r->party_id = 12;
        $r->priority = 0;
        $r->save();
        
    }

}
