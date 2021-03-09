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
        self::makeRegionalSeats(2,1);
        self::makeConstituencySeats(3,1);
    }


    function makeRegionalSeats(int $int,int $year){

        for ($x = 0; $x <= $int; $x+=1) {
            $s = new Seat;
            $s->regional = TRUE;
            $s->year_id =$year;
            $s->save();
          } 
    }

    function makeConstituencySeats(int $int,int $year){

        for ($x = 0; $x <= $int; $x+=1) {
            $s = new Seat;
            $s->regional = FALSE;
            $s->year_id =$year;
            $s->save();
          } 
    }

     
}
