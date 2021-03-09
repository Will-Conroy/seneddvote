<?php

use Illuminate\Database\Seeder;
use App\Coordinate;

class CoordinateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r = new Coordinate;
        $r->constituency_id = 1;
        $r->long = 203;
        $r->lat = 204;
        $r->save();

        self::massMakeVotersRegional(1,[[52.898962, -2.796021],
        [52.912215, -2.774048],
        [52.920495, -2.743835],
        [52.940363, -2.727356],
        [52.973454, -2.727356],
        [53.003215, -2.826233],
        [53.011478, -2.848206],
        [53.042864, -2.900391],
        [53.128646, -2.927856],
        [53.135238, -2.960815],
        [53.255355, -3.051453],
        [53.253712, -3.081665],
        [53.279995, -3.177795],
        [53.337433, -3.317871],
        [53.35383, -3.315125],
        [53.35383, -3.386536],
        [53.342353, -3.430481],
        [53.316108, -3.529358],
        [53.30298, -3.581543],
        [53.294772, -3.630981],
        [53.293131, -3.716125],
        [53.307903, -3.749084],
        [53.329233, -3.80127],
        [53.335793, -3.842468],
        [53.337433, -3.88916],
        [53.330873, -3.88092]]);


        
    }

    private function massMakeVotersRegional(int $id, array $coordantes)
    {
        foreach ($coordantes as $coord){
            $r = new Coordinate;
            $r->region_id = $id;
            $r->long = $coord[0];
            $r->lat = $coord[1];
            $r->save();
        }

    }


}
