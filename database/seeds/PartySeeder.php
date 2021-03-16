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
    }

    private function testData()
    {
        $p = new Party;
        $p->name = "Red";
        $p->image = "/PartyImages/red.png";
        $p->colour = "#cc0000";
        $p->save();

        $p = new Party;
        $p->name = "Green";
        $p->colour = "#009933";
        $p->image = "/PartyImages/green.png";
        $p->save();

        $p = new Party;
        $p->name = "Blue";
        $p->colour = "#000099";
        $p->image = "/PartyImages/blue.png";
        $p->save();
    }
}
