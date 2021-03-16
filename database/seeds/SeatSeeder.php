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
        self::makeRegionalSeats(3,1);
        self::makeConstituencySeats(7,1);
    }

    private function makeSeats()
    {
        self::makeTestSeats();
        self::makeDafaultSeats(2);
    }

    private function makeDafaultSeats(int $yearID)
    {
        self::makeRegionalSeats(5,$yearID);
        self::makeConstituencySeats(40,$yearID);
    }


    function makeRegionalSeats(int $max,int $year)
    {
        for ($x = 0; $x < $max; $x++)
        {
            $s = new Seat;
            $s->regional = TRUE;
            $s->year_id = $year;
            $s->save();
        } 
    }

    function makeConstituencySeats(int $max,int $year)
    {
        for ($x = 0; $x < $max; $x++)
        {
            $s = new Seat;
            $s->regional = FALSE;
            $s->year_id =$year;
            $s->save();
          } 
    }
    
}
