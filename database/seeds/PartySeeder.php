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
        self::data2016();
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

    private function data2016(){
        /*7*/
        $p = new Party;
        $p->name = "Welsh Labour";
        $p->image = "/PartyImages/WelshLabour.jpg";
        $p->colour = "#FF0000";
        $p->save();
        $p->regions()->attach(9);

        /*8*/
        $p = new Party;
        $p->name = "Plaid Cymru";
        $p->image = "/PartyImages/PlaidCymru.png";
        $p->colour = "#006400";
        $p->save();
        $p->regions()->attach(9);

        /*9*/
        $p = new Party;
        $p->name = "Welsh Conservative Party";
        $p->image = "/PartyImages/Conservative.bmp";
        $p->colour = "#0087DC";
        $p->save();
        $p->regions()->attach(9);


        /*10*/
        $p = new Party;
        $p->name = "United Kingdom Independence Party (UKIP)";
        $p->image = "/PartyImages/UKIP.png";
        $p->colour = "#70147A";
        $p->save();
        $p->regions()->attach(9);

        /*11*/
        $p = new Party;
        $p->name = "Abolish the Welsh Assembly Party";
        $p->image = "/PartyImages/AtWAp.jpg";
        $p->colour = "#810000";
        $p->save();
        $p->regions()->attach(9);

        /*12*/
        $p = new Party;
        $p->name = "Welsh Liberal Democrats";
        $p->image = "/PartyImages/LD.jpg";
        $p->colour = "#FAA61A";
        $p->save();
        $p->regions()->attach(9);

        /*13*/
        $p = new Party;
        $p->name = "Welsh Green Party";
        $p->image = "/PartyImages/Green.png";
        $p->colour = "#6AB023";
        $p->save();
        $p->regions()->attach(9);

        /*14*/
        $p = new Party;
        $p->name = "Association of Welsh Local Independents";
        $p->image = "/PartyImages/WelshLabour.jpg";
        $p->colour = "#D3D3D3";
        $p->save();
        $p->regions()->attach(9);

        /*15*/
        $p = new Party;
        $p->name = "The Official Monster Raving Loony Party";
        $p->image = "/PartyImages/WelshLabour.jpg";
        $p->colour = "#FFF000";
        $p->save();
        $p->regions()->attach(9);

        /*16*/
        $p = new Party;
        $p->name = "Independent";
        $p->image = "/PartyImages/Wales.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
        $p->regions()->attach(9);

        /*17*/
        $p = new Party;
        $p->name = "Welsh Communist Party";
        $p->image = "/PartyImages/Wales.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
        $p->regions()->attach(9);
    }
}
