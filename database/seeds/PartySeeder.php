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
        $p = new Party;
        $p->name = "Red";
        $p->save();

        $p = new Party;
        $p->name = "Green";
        $p->save();

        $p = new Party;
        $p->name = "Blue";
        $p->save();
    }
}
