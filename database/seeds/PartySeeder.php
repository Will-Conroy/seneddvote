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
        #self::data2011();
        #self::data2007();
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
        $p->constituencies()->attach(48);
        $p->constituencies()->attach(49);
        $p->constituencies()->attach(50);
        $p->constituencies()->attach(51);
        $p->constituencies()->attach(52);
        $p->constituencies()->attach(53);
        $p->constituencies()->attach(54);
        $p->constituencies()->attach(55);
        $p->constituencies()->attach(56);
        $p->constituencies()->attach(57);
        $p->constituencies()->attach(58);
        $p->constituencies()->attach(59);
        $p->constituencies()->attach(60);
        $p->constituencies()->attach(61);
        $p->constituencies()->attach(62);
        $p->constituencies()->attach(63);
        $p->constituencies()->attach(64);
        $p->constituencies()->attach(65);
        $p->constituencies()->attach(66);
        $p->constituencies()->attach(67);
        $p->constituencies()->attach(68);
        $p->constituencies()->attach(69);
        $p->constituencies()->attach(70);
        $p->constituencies()->attach(71);
        $p->constituencies()->attach(72);
        $p->constituencies()->attach(73);
        $p->constituencies()->attach(74);
        $p->constituencies()->attach(75);
        $p->constituencies()->attach(76);
        $p->constituencies()->attach(77);
        $p->constituencies()->attach(78);
        $p->constituencies()->attach(79);
        $p->constituencies()->attach(80);
        $p->constituencies()->attach(81);
        $p->constituencies()->attach(82);
        $p->constituencies()->attach(83);
        $p->constituencies()->attach(84);
        $p->constituencies()->attach(85);
        $p->constituencies()->attach(86);
        $p->constituencies()->attach(87);

        
        /*8*/
        $p = new Party;
        $p->name = "Plaid Cymru";
        $p->image = "/PartyImages/PlaidCymru.png";
        $p->colour = "#006400";
        $p->save();
        $p->regions()->attach(9);
        $p->regions()->attach(10);
        $p->regions()->attach(11);
        $p->regions()->attach(12);
        $p->regions()->attach(13);
        $p->constituencies()->attach(48);
        $p->constituencies()->attach(49);
        $p->constituencies()->attach(50);
        $p->constituencies()->attach(51);
        $p->constituencies()->attach(52);
        $p->constituencies()->attach(53);
        $p->constituencies()->attach(54);
        $p->constituencies()->attach(55);
        $p->constituencies()->attach(56);
        $p->constituencies()->attach(57);
        $p->constituencies()->attach(58);
        $p->constituencies()->attach(59);
        $p->constituencies()->attach(60);
        $p->constituencies()->attach(61);
        $p->constituencies()->attach(62);
        $p->constituencies()->attach(63);
        $p->constituencies()->attach(64);
        $p->constituencies()->attach(65);
        $p->constituencies()->attach(66);
        $p->constituencies()->attach(67);
        $p->constituencies()->attach(68);
        $p->constituencies()->attach(69);
        $p->constituencies()->attach(70);
        $p->constituencies()->attach(71);
        $p->constituencies()->attach(72);
        $p->constituencies()->attach(73);
        $p->constituencies()->attach(74);
        $p->constituencies()->attach(75);
        $p->constituencies()->attach(76);
        $p->constituencies()->attach(77);
        $p->constituencies()->attach(78);
        $p->constituencies()->attach(79);
        $p->constituencies()->attach(80);
        $p->constituencies()->attach(81);
        $p->constituencies()->attach(82);
        $p->constituencies()->attach(83);
        $p->constituencies()->attach(84);
        $p->constituencies()->attach(85);
        $p->constituencies()->attach(86);
        $p->constituencies()->attach(87);

        
        

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
        $p->constituencies()->attach(48);
        $p->constituencies()->attach(49);
        $p->constituencies()->attach(50);
        $p->constituencies()->attach(51);
        $p->constituencies()->attach(52);
        $p->constituencies()->attach(53);
        $p->constituencies()->attach(54);
        $p->constituencies()->attach(55);
        $p->constituencies()->attach(56);
        $p->constituencies()->attach(57);
        $p->constituencies()->attach(58);
        $p->constituencies()->attach(59);
        $p->constituencies()->attach(60);
        $p->constituencies()->attach(61);
        $p->constituencies()->attach(62);
        $p->constituencies()->attach(63);
        $p->constituencies()->attach(64);
        $p->constituencies()->attach(65);
        $p->constituencies()->attach(66);
        $p->constituencies()->attach(67);
        $p->constituencies()->attach(68);
        $p->constituencies()->attach(69);
        $p->constituencies()->attach(70);
        $p->constituencies()->attach(71);
        $p->constituencies()->attach(72);
        $p->constituencies()->attach(73);
        $p->constituencies()->attach(74);
        $p->constituencies()->attach(75);
        $p->constituencies()->attach(76);
        $p->constituencies()->attach(77);
        $p->constituencies()->attach(78);
        $p->constituencies()->attach(79);
        $p->constituencies()->attach(80);
        $p->constituencies()->attach(81);
        $p->constituencies()->attach(82);
        $p->constituencies()->attach(83);
        $p->constituencies()->attach(84);
        $p->constituencies()->attach(85);
        $p->constituencies()->attach(86);
        $p->constituencies()->attach(87);
        


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
        $p->constituencies()->attach(49);
        $p->constituencies()->attach(51);
        $p->constituencies()->attach(52);
        $p->constituencies()->attach(53);
        $p->constituencies()->attach(54);
        $p->constituencies()->attach(55);
        $p->constituencies()->attach(56);
        $p->constituencies()->attach(57);
        $p->constituencies()->attach(58);
        $p->constituencies()->attach(59);
        $p->constituencies()->attach(60);
        $p->constituencies()->attach(61);
        $p->constituencies()->attach(62);
        $p->constituencies()->attach(63);
        $p->constituencies()->attach(64);
        $p->constituencies()->attach(65);
        $p->constituencies()->attach(66);
        $p->constituencies()->attach(67);
        $p->constituencies()->attach(68);
        $p->constituencies()->attach(69);
        $p->constituencies()->attach(70);
        $p->constituencies()->attach(71);
        $p->constituencies()->attach(72);
        $p->constituencies()->attach(73);
        $p->constituencies()->attach(74);
        $p->constituencies()->attach(75);
        $p->constituencies()->attach(76);
        $p->constituencies()->attach(77);
        $p->constituencies()->attach(78);
        $p->constituencies()->attach(79);
        $p->constituencies()->attach(80);
        $p->constituencies()->attach(81);
        $p->constituencies()->attach(82);
        $p->constituencies()->attach(83);
        $p->constituencies()->attach(84);
        $p->constituencies()->attach(85);
        $p->constituencies()->attach(86);
        $p->constituencies()->attach(87);
        

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
        $p->constituencies()->attach(48);
        $p->constituencies()->attach(49);
        $p->constituencies()->attach(50);
        $p->constituencies()->attach(51);
        $p->constituencies()->attach(52);
        $p->constituencies()->attach(53);
        $p->constituencies()->attach(54);
        $p->constituencies()->attach(55);
        $p->constituencies()->attach(56);
        $p->constituencies()->attach(57);
        $p->constituencies()->attach(58);
        $p->constituencies()->attach(59);
        $p->constituencies()->attach(60);
        $p->constituencies()->attach(61);
        $p->constituencies()->attach(62);
        $p->constituencies()->attach(63);
        $p->constituencies()->attach(64);
        $p->constituencies()->attach(65);
        $p->constituencies()->attach(66);
        $p->constituencies()->attach(67);
        $p->constituencies()->attach(68);
        $p->constituencies()->attach(69);
        $p->constituencies()->attach(70);
        $p->constituencies()->attach(71);
        $p->constituencies()->attach(72);
        $p->constituencies()->attach(73);
        $p->constituencies()->attach(74);
        $p->constituencies()->attach(75);
        $p->constituencies()->attach(76);
        $p->constituencies()->attach(77);
        $p->constituencies()->attach(78);
        $p->constituencies()->attach(79);
        $p->constituencies()->attach(80);
        $p->constituencies()->attach(81);
        $p->constituencies()->attach(82);
        $p->constituencies()->attach(83);
        $p->constituencies()->attach(84);
        $p->constituencies()->attach(85);
        $p->constituencies()->attach(86);
        $p->constituencies()->attach(87);
        
    
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
        $p->constituencies()->attach(48);
        $p->constituencies()->attach(49);
        $p->constituencies()->attach(51);
        $p->constituencies()->attach(52);
        $p->constituencies()->attach(55);
        $p->constituencies()->attach(56);
        $p->constituencies()->attach(57);
        $p->constituencies()->attach(58);
        $p->constituencies()->attach(59);
        $p->constituencies()->attach(60);
        $p->constituencies()->attach(61);
        $p->constituencies()->attach(62);
        $p->constituencies()->attach(63);
        $p->constituencies()->attach(64);
        $p->constituencies()->attach(65);
        $p->constituencies()->attach(66);
        $p->constituencies()->attach(67);
        $p->constituencies()->attach(68);
        $p->constituencies()->attach(69);
        $p->constituencies()->attach(70);
        $p->constituencies()->attach(71);
        $p->constituencies()->attach(72);
        $p->constituencies()->attach(73);
        $p->constituencies()->attach(74);
        $p->constituencies()->attach(75);
        $p->constituencies()->attach(76);
        $p->constituencies()->attach(77);
        $p->constituencies()->attach(78);
        $p->constituencies()->attach(79);
        $p->constituencies()->attach(81);
        $p->constituencies()->attach(82);
        $p->constituencies()->attach(83);
        $p->constituencies()->attach(84);
        $p->constituencies()->attach(85);
        $p->constituencies()->attach(86);
        $p->constituencies()->attach(87);
       

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
        $p->constituencies()->attach(56);
        $p->constituencies()->attach(59);
        $p->constituencies()->attach(68);
        $p->constituencies()->attach(72);
        $p->constituencies()->attach(73);
        $p->constituencies()->attach(75);
        $p->constituencies()->attach(84);
        $p->constituencies()->attach(86);
     


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
         $p->constituencies()->attach(75);

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
         $p->constituencies()->attach(61);
         

         /*26*/
         $p = new Party;
         $p->name = "Putting Llanelli First";
         $p->image = "/PartyImages/Wales.bmp";
         $p->colour = "#D3D3D3";
         $p->save();
         $p->constituencies()->attach(62);
      

         /*27*/
         $p = new Party;
         $p->name = "Socialist Party of Great Britain";
         $p->image = "/PartyImages/SPOGB.png";
         $p->colour = "#D3D3D3";
         $p->save();
         $p->constituencies()->attach(71);
         

         /*28*/
         $p = new Party;
         $p->name = "English Democrats";
         $p->image = "/PartyImages/ED.png";
         $p->colour = "#D3D3D3";
         $p->save();
         $p->constituencies()->attach(84);
        

         /*28*/
         $p = new Party;
         $p->name = "Welsh Sovereignty";
         $p->image = "/PartyImages/Wales.bmp";
         $p->colour = "#D3D3D3";
         $p->save();
         $p->constituencies()->attach(86);
         
    }

    private function data2011(){
        $p = new Party;
        $p->name = "Welsh Labour";
        $p->image = "/PartyImages/WelshLabour.jpg";
        $p->colour = "#FF0000";
        $p->save();


        $p = new Party;
        $p->name = "Plaid Cymru";
        $p->image = "/PartyImages/PlaidCymru.png";
        $p->colour = "#006400";
        $p->save();
      

        $p = new Party;
        $p->name = "Welsh Conservative Party";
        $p->image = "/PartyImages/Conservative.bmp";
        $p->colour = "#0087DC";
        $p->save();
       

        $p = new Party;
        $p->name = "United Kingdom Independence Party (UKIP)";
        $p->image = "/PartyImages/UKIP.png";
        $p->colour = "#70147A";
        $p->save();


        /*12*/
        $p = new Party;
        $p->name = "Welsh Liberal Democrats";
        $p->image = "/PartyImages/LD.jpg";
        $p->colour = "#FAA61A";
        $p->save();
  

        $p = new Party;
        $p->name = "Welsh Green Party";
        $p->image = "/PartyImages/Green.png";
        $p->colour = "#6AB023";
        $p->save();
     

        $p = new Party;
        $p->name = "The Official Monster Raving Loony Party";
        $p->image = "/PartyImages/WelshLabour.jpg";
        $p->colour = "#FFF000";
        $p->save();


        $p = new Party;
        $p->name = "Independent";
        $p->image = "/PartyImages/Wales.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
    

        $p = new Party;
        $p->name = "Welsh Communist Party";
        $p->image = "/PartyImages/Wales.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
  

     

        $p = new Party;
        $p->name = "Welsh Christian Party";
        $p->image = "/PartyImages/WCP.jpg";
        $p->colour = "#D3D3D3";
        $p->save();
 


        $p = new Party;
        $p->name = "Trade Unionist and Socialist Coalition";
        $p->image = "/PartyImages/TUSC.png";
        $p->colour = "#FFC0CB";
        $p->save();
        $p->regions()->attach(14);

        $p = new Party;
        $p->name = "Llais Gwynedd";
        $p->image = "/PartyImages/LGwy.jpg";
        $p->colour = "#FFFFFF";
        $p->save();
 

        $p = new Party;
        $p->name = "Putting Llanelli First";
        $p->image = "/PartyImages/Wales.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
        $p->constituencies()->attach(101);

        $p = new Party;
        $p->name = "English Democrats";
        $p->image = "/PartyImages/ED.png";
        $p->colour = "#D3D3D3";
        $p->save();
        

        $p = new Party;
        $p->name = "British National Party";
        $p->image = "/PartyImages/BNP.bmp";
        $p->colour = "#D3D3D3";
        $p->save();


        $p = new Party;
        $p->name = "Socialist Labour Party";
        $p->image = "/PartyImages/SLP.bmp";
        $p->colour = "#D3D3D3";
        $p->save();


        $p = new Party;
        $p->name = "Trade Unionists and Socialists Against Cuts";
        $p->image = "/PartyImages/TUASC.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
 
    }
    
    private function data2007(){
        $p = new Party;
        $p->name = "Welsh Labour";
        $p->image = "/PartyImages/WelshLabour.jpg";
        $p->colour = "#FF0000";
        $p->save();
 
        $p = new Party;
        $p->name = "Plaid Cymru";
        $p->image = "/PartyImages/PlaidCymru.png";
        $p->colour = "#006400";
        $p->save();
       


        /*9*/
        $p = new Party;
        $p->name = "Welsh Conservative Party";
        $p->image = "/PartyImages/Conservative.bmp";
        $p->colour = "#0087DC";
        $p->save();
     

        $p = new Party;
        $p->name = "United Kingdom Independence Party (UKIP)";
        $p->image = "/PartyImages/UKIP.png";
        $p->colour = "#70147A";
        $p->save();
 

        $p = new Party;
        $p->name = "Welsh Liberal Democrats";
        $p->image = "/PartyImages/LD.jpg";
        $p->colour = "#FAA61A";
        $p->save();
 


        $p = new Party;
        $p->name = "Welsh Green Party";
        $p->image = "/PartyImages/Green.png";
        $p->colour = "#6AB023";
        $p->save();
   
        $p = new Party;
        $p->name = "Independent";
        $p->image = "/PartyImages/Wales.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
     

        $p = new Party;
        $p->name = "Welsh Communist Party";
        $p->image = "/PartyImages/Wales.bmp";
        $p->colour = "#D3D3D3";
        $p->save();



        $p = new Party;
        $p->name = "Welsh Christian Party";
        $p->image = "/PartyImages/WCP.jpg";
        $p->colour = "#D3D3D3";
        $p->save();
  

        $p = new Party;
        $p->name = "English Democrats";
        $p->image = "/PartyImages/ED.png";
        $p->colour = "#D3D3D3";
        $p->save();
      

        $p = new Party;
        $p->name = "British National Party";
        $p->image = "/PartyImages/BNP.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
     

        $p = new Party;
        $p->name = "Socialist Labour Party";
        $p->image = "/PartyImages/SLP.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
      

        $p = new Party;
        $p->name = "Christian Peoples Alliance";
        $p->image = "/PartyImages/Wales.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
   

        $p = new Party;
        $p->name = "Veritas";
        $p->image = "/PartyImages/Wales.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
       

        $p = new Party;
        $p->name = "Socialist Alternative";
        $p->image = "/PartyImages/Wales.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
      

        $p = new Party;
        $p->name = "Respect";
        $p->image = "/PartyImages/Wales.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
        


        $p = new Party;
        $p->name = "Independent Conservative";
        $p->image = "/PartyImages/Wales.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
   


        $p = new Party;
        $p->name = "Socialist Equality";
        $p->image = "/PartyImages/Wales.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
 


        $p = new Party;
        $p->name = "John Marek Independent Party";
        $p->image = "/PartyImages/Wales.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
        


        $p = new Party;
        $p->name = "Neath Port Talbot Independent Party";
        $p->image = "/PartyImages/Wales.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
  


        $p = new Party;
        $p->name = "Millenium Bean Party";
        $p->image = "/PartyImages/Wales.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
       

        $p = new Party;
        $p->name = "People's Voice";
        $p->image = "/PartyImages/Wales.bmp";
        $p->colour = "#D3D3D3";
        $p->save();
      

    }
}
