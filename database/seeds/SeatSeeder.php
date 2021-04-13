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

    }

    private function makeTestSeats()
    {
        self::makeRegionalSeats(1,3,2);
        self::makeConstituencySeats(1, 7);
    }

    private function makeTestSeatsDefault()
    {
        self::makeRegionalSeats(4,8,3);
        self::makeConstituencySeats(8, 24);
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
