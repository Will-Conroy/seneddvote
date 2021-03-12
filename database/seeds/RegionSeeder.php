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
        self::testData();
        //self::default(1);
    }
    private function testData(){
        $r1 = new Region;
        $r1->name = "North West";
        $r1->seat_id = 1;
        $r1->save();

        $r2 = new Region;
        $r2->name = "North East";
        $r2->seat_id = 2;
        $r2->save();

        $r2 = new Region;
        $r2->name = "South";
        $r2->seat_id = 3;
        $r2->save();

    }

    private function default(int $startID){
        $r1 = new Region;
        $r1->name = "North Wales";
        $r1->seat_id = $startID +1;
        $r1->save();

        $r2 = new Region;
        $r2->name = "Mid and West Wales";
        $r2->seat_id = $startID +2;
        $r2->save();

        $r2 = new Region;
        $r2->name = "South Wales West";
        $r2->seat_id = $startID +3;
        $r2->save();

        $r2 = new Region;
        $r2->name = "South Wales Central";
        $r2->seat_id = $startID +4;
        $r2->save();

        $r2 = new Region;
        $r2->name = "South Wales East";
        $r2->seat_id = $startID + 5;
        $r2->save();

    }
}
