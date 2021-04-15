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
        self::data2016();
        self::data2011();
        
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
    private function data2016(){
        $r = new Region;
        $r->name = "North Wales";
        $r->votes_cast = 204490;
        $r->electorate = 470492;
        $r->year_id = 3;
        $r->save();
        
        $r = new Region;
        $r->name = "Mid and West Wales";
        $r->votes_cast = 215840;
        $r->electorate = 425355;
        $r->year_id = 3;
        $r->save();
        
        $r = new Region;
        $r->name = "South Wales West";
        $r->votes_cast = 169189;
        $r->electorate = 391979;
        $r->year_id = 3;
        $r->save();
        
        $r = new Region;
        $r->name = "South Wales Central";
        $r->votes_cast = 231133;
        $r->electorate = 494758;
        $r->year_id = 3;
        $r->save();
        
        $r = new Region;
        $r->name = "South Wales East";
        $r->votes_cast = 194091;
        $r->electorate = 463353;
        $r->year_id = 3;
        $r->save();
        
    }
    
    private function data2011(){
        $r = new Region;
        $r->name = "North Wales";
        $r->votes_cast = 194798;
        $r->electorate = 473476;
        $r->year_id = 4;
        $r->save();
        
        $r = new Region;
        $r->name = "Mid and West Wales";
        $r->votes_cast = 433147;
        $r->electorate = 1563;
        $r->year_id = 4;
        $r->save();
        
        $r = new Region;
        $r->name = "South Wales West";
        $r->votes_cast = 407333;
        $r->electorate = 1156;
        $r->year_id = 4;
        $r->save();
        
        $r = new Region;
        $r->name = "South Wales Central";
        $r->votes_cast = 506293;
        $r->electorate = 1413;
        $r->year_id = 4;
        $r->save();
        
        $r = new Region;
        $r->name = "South Wales East";
        $r->votes_cast = 469486;
        $r->electorate = 1391;
        $r->year_id = 4;
        $r->save();
        
    }


}
