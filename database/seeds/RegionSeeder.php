<?php

use Illuminate\Database\Seeder;
use App\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::default(1);
    }

    private function default(int $str){
        $r1 = new Region;
        $r1->name = "North Wales";
        $r1->seat_id = $str +1;
        $r1->save();

        $r2 = new Region;
        $r2->name = "Mid and West Wales";
        $r2->seat_id = $str +2;
        $r2->save();

        $r2 = new Region;
        $r2->name = "South Wales West";
        $r2->seat_id = $str +3;
        $r2->save();

        $r2 = new Region;
        $r2->name = "South Wales Central";
        $r2->seat_id = $str +4;
        $r2->save();

        $r2 = new Region;
        $r2->name = "South Wales East";
        $r2->seat_id = $str + 5;
        $r2->save();

    }
}
