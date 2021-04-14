<?php

use Illuminate\Database\Seeder;
use App\Party;
class PartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::testData();
        self::testDataDefault(4,8, 8, 47);
    }

    private function testData()
    {
        $p = new Party;
        $p->name = "Red";
        $p->image = "/PartyImages/red.png";
        $p->colour = "#cc0000";
        $p->save();
        
        for($constituencies = 1; $constituencies <= 7; $constituencies++)
            $p->constituencies()->attach($constituencies);

        for($regions = 1; $regions <= 3; $regions++)
            $p->regions()->attach($regions);
       
        $p = new Party;
        $p->name = "Green";
        $p->colour = "#009933";
        $p->image = "/PartyImages/green.png";
        $p->save();

        for($constituencies = 1; $constituencies <= 7; $constituencies++)
            $p->constituencies()->attach($constituencies);

        for($regions = 1; $regions <= 3; $regions++)
            $p->regions()->attach($regions);
       
        $p = new Party;
        $p->name = "Blue";
        $p->colour = "#000099";
        $p->image = "/PartyImages/blue.png";
        $p->save();

        for($constituencies = 1; $constituencies <= 7; $constituencies++)
            $p->constituencies()->attach($constituencies);

        for($regions = 1; $regions <= 3; $regions++)
            $p->regions()->attach($regions);
    }



    private function testDataDefault(int $regionStart, int $regionEnd, int $constStart, int $constEnd)
    {
        $p = new Party;
        $p->name = "Red";
        $p->image = "/PartyImages/red.png";
        $p->colour = "#cc0000";
        $p->save();

        for($regions = $regionStart; $regions <= $regionEnd; $regions++)
            $p->regions()->attach($regions);

        for($constituencies = $constStart; $constituencies <= $constEnd; $constituencies++)
            $p->constituencies()->attach($constituencies);
       
        $p = new Party;
        $p->name = "Green";
        $p->colour = "#009933";
        $p->image = "/PartyImages/green.png";
        $p->save();

        for($regions = $regionStart; $regions <= $regionEnd; $regions++)
            $p->regions()->attach($regions);

        for($constituencies = $constStart; $constituencies <= $constEnd; $constituencies++)
            $p->constituencies()->attach($constituencies);  
       
        $p = new Party;
        $p->name = "Blue";
        $p->colour = "#000099";
        $p->image = "/PartyImages/blue.png";
        $p->save();

        for($regions = $regionStart; $regions <= $regionEnd; $regions++)
            $p->regions()->attach($regions);

        for($constituencies = $constStart; $constituencies <= $constEnd; $constituencies++)
            $p->constituencies()->attach($constituencies);
    }
}
