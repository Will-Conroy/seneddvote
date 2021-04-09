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
        self::makeSeats();
    }

    private function makeTestSeats()
    {
        self::makeRegionalSeats(3);
        self::makeConstituencySeats(7);
    }

    private function makeSeats()
    {
        self::makeTestSeats();
    }

    function makeRegionalSeats(int $max)
    {
        for ($x = 1; $x <= $max; $x++)
        {
            $s = new Seat;
            $s->regional = TRUE;
            $s->region_id = $x;
            $s->save();
        } 
    }

    function makeConstituencySeats(int $max)
    {
        for ($x = 1; $x <= $max; $x++)
        {
            $s = new Seat;
            $s->regional = FALSE;
            $s->constituency_id = $x;
            $s->save();
          } 
    }
    
}
