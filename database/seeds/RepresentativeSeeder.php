<?php

use Illuminate\Database\Seeder;
use App\Representative;
class RepresentativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r = new Representative;
        $r->name = "Scarlet";
        $r->seat_id = 1;
        $r->party_id = 1;
        $r->save();

        $r = new Representative;
        $r->name = "Rose";
        $r->seat_id = 4;
        $r->party_id = 1;
        $r->save();

        $r = new Representative;
        $r->name = "Oliva";
        $r->seat_id = 2;
        $r->party_id = 2;
        $r->save();

        $r = new Representative;
        $r->name = "Sapphire";
        $r->seat_id = 3;
        $r->party_id = 3;
        $r->save();
    }
}
