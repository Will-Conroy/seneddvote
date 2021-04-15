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
        $p->regions()->attach(10);
        $p->regions()->attach(11);
        $p->regions()->attach(12);
        $p->regions()->attach(13);
        $p->constituencies()->attach(9);
        $p->constituencies()->attach(10);
        $p->constituencies()->attach(11);
        $p->constituencies()->attach(12);
        $p->constituencies()->attach(13);
        $p->constituencies()->attach(14);
        $p->constituencies()->attach(15);
        $p->constituencies()->attach(16);
        $p->constituencies()->attach(17);
        $p->constituencies()->attach(18);
        $p->constituencies()->attach(19);
        $p->constituencies()->attach(20);
        $p->constituencies()->attach(21);
        $p->constituencies()->attach(22);
        $p->constituencies()->attach(23);
        $p->constituencies()->attach(24);
        $p->constituencies()->attach(25);
        $p->constituencies()->attach(26);
        $p->constituencies()->attach(27);
        $p->constituencies()->attach(28);
        $p->constituencies()->attach(29);
        $p->constituencies()->attach(30);
        $p->constituencies()->attach(31);
        $p->constituencies()->attach(32);
        $p->constituencies()->attach(33);
        $p->constituencies()->attach(34);
        $p->constituencies()->attach(35);
        $p->constituencies()->attach(36);
        $p->constituencies()->attach(37);
        $p->constituencies()->attach(38);
        $p->constituencies()->attach(39);
        $p->constituencies()->attach(40);
        $p->constituencies()->attach(41);
        $p->constituencies()->attach(42);
        $p->constituencies()->attach(43);
        $p->constituencies()->attach(44);
        $p->constituencies()->attach(45);
        $p->constituencies()->attach(46);
        $p->constituencies()->attach(47);
        $p->constituencies()->attach(48);
        
        

        /*8*/
        $p = new Party;
        $p->name = "Plaid Cymru";
        $p->image = "/PartyImages/PlaidCymru.png";
        $p->colour = "#006400";
        $p->save();
        $p->constituencies()->attach(9);
        $p->constituencies()->attach(10);
        $p->constituencies()->attach(11);
        $p->constituencies()->attach(12);
        $p->constituencies()->attach(13);
        $p->constituencies()->attach(14);
        $p->constituencies()->attach(15);
        $p->constituencies()->attach(16);
        $p->constituencies()->attach(17);
        $p->constituencies()->attach(18);
        $p->constituencies()->attach(19);
        $p->constituencies()->attach(20);
        $p->constituencies()->attach(21);
        $p->constituencies()->attach(22);
        $p->constituencies()->attach(23);
        $p->constituencies()->attach(24);
        $p->constituencies()->attach(25);
        $p->constituencies()->attach(26);
        $p->constituencies()->attach(27);
        $p->constituencies()->attach(28);
        $p->constituencies()->attach(29);
        $p->constituencies()->attach(30);
        $p->constituencies()->attach(31);
        $p->constituencies()->attach(32);
        $p->constituencies()->attach(33);
        $p->constituencies()->attach(34);
        $p->constituencies()->attach(35);
        $p->constituencies()->attach(36);
        $p->constituencies()->attach(37);
        $p->constituencies()->attach(38);
        $p->constituencies()->attach(39);
        $p->constituencies()->attach(40);
        $p->constituencies()->attach(41);
        $p->constituencies()->attach(42);
        $p->constituencies()->attach(43);
        $p->constituencies()->attach(44);
        $p->constituencies()->attach(45);
        $p->constituencies()->attach(46);
        $p->constituencies()->attach(47);
        $p->constituencies()->attach(48);
        $p->regions()->attach(9);
        $p->regions()->attach(10);
        $p->regions()->attach(11);
        $p->regions()->attach(12);
        $p->regions()->attach(13);
        

        /*9*/
        $p = new Party;
        $p->name = "Welsh Conservative Party";
        $p->image = "/PartyImages/Conservative.bmp";
        $p->colour = "#0087DC";
        $p->save();
        $p->regions()->attach(9);
        $p->regions()->attach(10);
        $p->regions()->attach(11);
        $p->regions()->attach(12);
        $p->regions()->attach(13);
        $p->constituencies()->attach(9);
        $p->constituencies()->attach(10);
        $p->constituencies()->attach(11);
        $p->constituencies()->attach(12);
        $p->constituencies()->attach(13);
        $p->constituencies()->attach(14);
        $p->constituencies()->attach(15);
        $p->constituencies()->attach(16);
        $p->constituencies()->attach(17);
        $p->constituencies()->attach(18);
        $p->constituencies()->attach(19);
        $p->constituencies()->attach(20);
        $p->constituencies()->attach(21);
        $p->constituencies()->attach(22);
        $p->constituencies()->attach(23);
        $p->constituencies()->attach(24);
        $p->constituencies()->attach(25);
        $p->constituencies()->attach(26);
        $p->constituencies()->attach(27);
        $p->constituencies()->attach(28);
        $p->constituencies()->attach(29);
        $p->constituencies()->attach(30);
        $p->constituencies()->attach(31);
        $p->constituencies()->attach(32);
        $p->constituencies()->attach(33);
        $p->constituencies()->attach(34);
        $p->constituencies()->attach(35);
        $p->constituencies()->attach(36);
        $p->constituencies()->attach(37);
        $p->constituencies()->attach(38);
        $p->constituencies()->attach(39);
        $p->constituencies()->attach(40);
        $p->constituencies()->attach(41);
        $p->constituencies()->attach(42);
        $p->constituencies()->attach(43);
        $p->constituencies()->attach(44);
        $p->constituencies()->attach(45);
        $p->constituencies()->attach(46);
        $p->constituencies()->attach(47);
        $p->constituencies()->attach(48);


        /*10*/
        $p = new Party;
        $p->name = "United Kingdom Independence Party (UKIP)";
        $p->image = "/PartyImages/UKIP.png";
        $p->colour = "#70147A";
        $p->save();
        $p->regions()->attach(9);
        $p->regions()->attach(10);
        $p->regions()->attach(11);
        $p->regions()->attach(12);
        $p->regions()->attach(13);
        $p->constituencies()->attach(10);
        $p->constituencies()->attach(12);
        $p->constituencies()->attach(13);
        $p->constituencies()->attach(14);
        $p->constituencies()->attach(15);
        $p->constituencies()->attach(16);
        $p->constituencies()->attach(17);
        $p->constituencies()->attach(18);
        $p->constituencies()->attach(19);
        $p->constituencies()->attach(20);
        $p->constituencies()->attach(21);
        $p->constituencies()->attach(22);
        $p->constituencies()->attach(23);
        $p->constituencies()->attach(24);
        $p->constituencies()->attach(25);
        $p->constituencies()->attach(26);
        $p->constituencies()->attach(27);
        $p->constituencies()->attach(28);
        $p->constituencies()->attach(29);
        $p->constituencies()->attach(30);
        $p->constituencies()->attach(31);
        $p->constituencies()->attach(32);
        $p->constituencies()->attach(33);
        $p->constituencies()->attach(34);
        $p->constituencies()->attach(35);
        $p->constituencies()->attach(36);
        $p->constituencies()->attach(37);
        $p->constituencies()->attach(38);
        $p->constituencies()->attach(39);
        $p->constituencies()->attach(40);
        $p->constituencies()->attach(41);
        $p->constituencies()->attach(42);
        $p->constituencies()->attach(43);
        $p->constituencies()->attach(44);
        $p->constituencies()->attach(45);
        $p->constituencies()->attach(46);
        $p->constituencies()->attach(47);
        $p->constituencies()->attach(48);
        

        /*11*/
        $p = new Party;
        $p->name = "Abolish the Welsh Assembly Party";
        $p->image = "/PartyImages/AtWAp.jpg";
        $p->colour = "#810000";
        $p->save();
        $p->regions()->attach(9);
        $p->regions()->attach(10);
        $p->regions()->attach(11);
        $p->regions()->attach(12);
        $p->regions()->attach(13);
        

        /*12*/
        $p = new Party;
        $p->name = "Welsh Liberal Democrats";
        $p->image = "/PartyImages/LD.jpg";
        $p->colour = "#FAA61A";
        $p->save();
        $p->regions()->attach(9);
        $p->regions()->attach(10);
        $p->regions()->attach(11);
        $p->regions()->attach(12);
        $p->regions()->attach(13);
        $p->constituencies()->attach(9);
        $p->constituencies()->attach(10);
        $p->constituencies()->attach(11);
        $p->constituencies()->attach(12);
        $p->constituencies()->attach(13);
        $p->constituencies()->attach(14);
        $p->constituencies()->attach(15);
        $p->constituencies()->attach(16);
        $p->constituencies()->attach(17);
        $p->constituencies()->attach(18);
        $p->constituencies()->attach(19);
        $p->constituencies()->attach(20);
        $p->constituencies()->attach(21);
        $p->constituencies()->attach(22);
        $p->constituencies()->attach(23);
        $p->constituencies()->attach(24);
        $p->constituencies()->attach(25);
        $p->constituencies()->attach(26);
        $p->constituencies()->attach(27);
        $p->constituencies()->attach(28);
        $p->constituencies()->attach(29);
        $p->constituencies()->attach(30);
        $p->constituencies()->attach(31);
        $p->constituencies()->attach(32);
        $p->constituencies()->attach(33);
        $p->constituencies()->attach(34);
        $p->constituencies()->attach(35);
        $p->constituencies()->attach(36);
        $p->constituencies()->attach(37);
        $p->constituencies()->attach(38);
        $p->constituencies()->attach(39);
        $p->constituencies()->attach(40);
        $p->constituencies()->attach(41);
        $p->constituencies()->attach(42);
        $p->constituencies()->attach(43);
        $p->constituencies()->attach(44);
        $p->constituencies()->attach(45);
        $p->constituencies()->attach(46);
        $p->constituencies()->attach(47);
        $p->constituencies()->attach(48);
        

        /*13*/
        $p = new Party;
        $p->name = "Welsh Green Party";
        $p->image = "/PartyImages/Green.png";
        $p->colour = "#6AB023";
        $p->save();
        $p->regions()->attach(9);
        $p->regions()->attach(10);
        $p->regions()->attach(11);
        $p->regions()->attach(12);
        $p->regions()->attach(13);
        $p->constituencies()->attach(9);
        $p->constituencies()->attach(10);
        $p->constituencies()->attach(12);
        $p->constituencies()->attach(13);
        $p->constituencies()->attach(16);
        $p->constituencies()->attach(17);
        $p->constituencies()->attach(18);
        $p->constituencies()->attach(19);
        $p->constituencies()->attach(20);
        $p->constituencies()->attach(21);
        $p->constituencies()->attach(22);
        $p->constituencies()->attach(23);
        $p->constituencies()->attach(24);
        $p->constituencies()->attach(25);
        $p->constituencies()->attach(26);
        $p->constituencies()->attach(27);
        $p->constituencies()->attach(28);
        $p->constituencies()->attach(29);
        $p->constituencies()->attach(30);
        $p->constituencies()->attach(31);
        $p->constituencies()->attach(32);
        $p->constituencies()->attach(33);
        $p->constituencies()->attach(34);
        $p->constituencies()->attach(35);
        $p->constituencies()->attach(36);
        $p->constituencies()->attach(37);
        $p->constituencies()->attach(38);
        $p->constituencies()->attach(39);
        $p->constituencies()->attach(40);
        $p->constituencies()->attach(42);
        $p->constituencies()->attach(43);
        $p->constituencies()->attach(44);
        $p->constituencies()->attach(45);
        $p->constituencies()->attach(46);
        $p->constituencies()->attach(47);
        $p->constituencies()->attach(48);
        

        /*14*/
        $p = new Party;
        $p->name = "Association of Welsh Local Independents";
        $p->image = "/PartyImages/WelshLabour.jpg";
        $p->colour = "#D3D3D3";
        $p->save();
        $p->regions()->attach(9);
        $p->regions()->attach(10);
       

        /*15*/
        $p = new Party;
        $p->name = "The Official Monster Raving Loony Party";
        $p->image = "/PartyImages/WelshLabour.jpg";
        $p->colour = "#FFF000";
        $p->save();
        $p->regions()->attach(9);
        $p->regions()->attach(10);
        $p->regions()->attach(11);
        $p->regions()->attach(12);
        $p->regions()->attach(13);
        


        /*16*/
        $p = new Party;
        $p->name = "Independent";
        $p->image = "/PartyImages/Wales.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
        $p->regions()->attach(9);
        $p->regions()->attach(12);
        $p->constituencies()->attach(17);
        $p->constituencies()->attach(20);
        $p->constituencies()->attach(29);
        $p->constituencies()->attach(33);
        $p->constituencies()->attach(34);
        $p->constituencies()->attach(36);
        $p->constituencies()->attach(45);
        $p->constituencies()->attach(47);


        /*17*/
        $p = new Party;
        $p->name = "Welsh Communist Party";
        $p->image = "/PartyImages/Wales.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
        $p->regions()->attach(9);
        $p->regions()->attach(10);
        $p->regions()->attach(11);
        $p->regions()->attach(13);
        

        /*18*/
        $p = new Party;
        $p->name = "People First";
        $p->image = "/PartyImages/People First.png";
        $p->colour = "#D3D3D3";
        $p->save();
        $p->regions()->attach(10);

        

         /*19*/
         $p = new Party;
         $p->name = "Welsh Christian Party";
         $p->image = "/PartyImages/WCP.jpg";
         $p->colour = "#D3D3D3";
         $p->save();
         $p->regions()->attach(10);
         

         /*20*/
         $p = new Party;
         $p->name = "Trade Unionist and Socialist Coalition";
         $p->image = "/PartyImages/TUSC.png";
         $p->colour = "#FFC0CB";
         $p->save();
         $p->regions()->attach(11);
$p->regions()->attach(12);
$p->regions()->attach(13);
        


         /*21*/
         $p = new Party;
         $p->name = "Women's Equality Party";
         $p->image = "/PartyImages/WEP.jpg";
         $p->colour = "#432360";
         $p->save();
         $p->regions()->attach(12);
         

         /*22*/
         $p = new Party;
         $p->name = "Communist Party of Britain";
         $p->image = "/PartyImages/CPB.jpg";
         $p->colour = "#FF0000";
         $p->save();
         $p->regions()->attach(12);
         

         /*23*/
         $p = new Party;
         $p->name = "Freedom to choose";
         $p->image = "/PartyImages/Wales.bmp";
         $p->colour = "#D3D3D3";
         $p->save();
         $p->regions()->attach(12);
         $p->constituencies()->attach(36);
         

         /*24*/
         $p = new Party;
         $p->name = "National Front";
         $p->image = "/PartyImages/NationalFront.png";
         $p->colour = "#000080";
         $p->save();
         $p->regions()->attach(13);

         /*25*/
         $p = new Party;
         $p->name = "Llais Gwynedd";
         $p->image = "/PartyImages/LGwy.jpg";
         $p->colour = "#FFFFFF";
         $p->save();
         $p->constituencies()->attach(22);

         /*26*/
         $p = new Party;
         $p->name = "Putting Llanelli First";
         $p->image = "/PartyImages/Wales.bmp";
         $p->colour = "#D3D3D3";
         $p->save();
         $p->constituencies()->attach(23);

         /*27*/
         $p = new Party;
         $p->name = "Socialist Party of Great Britain";
         $p->image = "/PartyImages/SPOGB.png";
         $p->colour = "#D3D3D3";
         $p->save();
         $p->constituencies()->attach(32);

         /*28*/
         $p = new Party;
         $p->name = "English Democrats";
         $p->image = "/PartyImages/ED.png";
         $p->colour = "#D3D3D3";
         $p->save();
         $p->constituencies()->attach(45);

         /*28*/
         $p = new Party;
         $p->name = "Welsh Sovereignty";
         $p->image = "/PartyImages/Wales.bmp";
         $p->colour = "#D3D3D3";
         $p->save();
         $p->constituencies()->attach(47);


         
         
         

    }
}
