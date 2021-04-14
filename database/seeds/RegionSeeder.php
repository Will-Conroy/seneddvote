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
        self::default(2);
        $r = new Region;
        $r->name = "North Wales";
        $r->year_id = 3;
        $r->save();
    }
    private function testData(){
        $yearID = 1;
        
        $r = new Region;
        $r->name = "North Region";
        $r->year_id = $yearID;
        $r->save();

        $r = new Region;
        $r->name = "Middle Region";
        $r->year_id = $yearID;
        $r->save();

        $r = new Region;
        $r->name = "South Region";
        $r->year_id = $yearID;
        $r->save();

    }

    private function default(int $yearID){
        $r = new Region;
        $r->name = "North Wales";
        $r->year_id = $yearID;
        $r->save();

        $r = new Region;
        $r->name = "Mid and West Wales";
        $r->year_id = $yearID;
        $r->save();

        $r = new Region;
        $r->name = "South Wales West";
        $r->year_id = $yearID;
        $r->save();

        $r = new Region;
        $r->name = "South Wales Central";
        $r->year_id = $yearID;
        $r->save();

        $r = new Region;
        $r->name = "South Wales East";
        $r->year_id = $yearID;
        $r->save();

    }
}
