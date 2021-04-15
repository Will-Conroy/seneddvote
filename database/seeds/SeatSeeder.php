<?php

use Illuminate\Database\Seeder;
use App\Seat;

class SeatSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::makeTestSeats();
        self::makeTestSeatsDefault();
        self::data2016();
        self::data2011();
        #self::data2007();
    }

    private function makeTestSeats()
    {
        self::makeRegionalSeats(1,3,2);
        self::makeConstituencySeats(1, 7);
    }

    private function makeTestSeatsDefault()
    {
        self::makeRegionalSeats(4,8,3);
        self::makeConstituencySeats(8, 47);
    }

    private function data2016()
    {
        self::makeRegionalSeats(9,13,4);
        self::makeConstituencySeats(48, 87);
    }

    private function data2011()
    {
        self::makeRegionalSeats(14,18,4);
        self::makeConstituencySeats(88, 127);
    }

    private function data2007()
    {
        self::makeRegionalSeats(19,24,4);
        self::makeConstituencySeats(128, 167);
    }

    function makeRegionalSeats(int $start, int $max, int $seatPerRegion)
    {
        for($i = 0; $i < $seatPerRegion; $i++){
            for ($x = $start; $x <= $max; $x++)
            {
                $s = new Seat;
                $s->regional = TRUE;
                $s->region_id = $x;
                $s->save();
            } 
        }   
    }

    function makeConstituencySeats(int $start, int $max)
    {
        for ($x = $start; $x <= $max; $x++)
        {
            $s = new Seat;
            $s->regional = FALSE;
            $s->constituency_id = $x;
            $s->save();
          } 
    }
    
}
