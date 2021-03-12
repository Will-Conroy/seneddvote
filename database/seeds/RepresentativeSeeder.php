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
        self::testData();
    }

    private function testData()
    {
        $r = new Representative;
        $r->name = "R1";
        $r->seat_id = 1;
        $r->party_id = 1;
        $r->save();

        $r = new Representative;
        $r->name = "R2";
        $r->seat_id = 2;
        $r->party_id = 1;
        $r->save();

        $r = new Representative;
        $r->name = "R3";
        $r->seat_id = 3;
        $r->party_id = 2;
        $r->save();

        $r = new Representative;
        $r->name = "R4";
        $r->seat_id = 4;
        $r->party_id = 2;
        $r->save();

        $r = new Representative;
        $r->name = "R5";
        $r->seat_id = 5;
        $r->party_id = 1;
        $r->save();

        $r = new Representative;
        $r->name = "R6";
        $r->seat_id = 6;
        $r->party_id = 1;
        $r->save();

        $r = new Representative;
        $r->name = "R7";
        $r->seat_id = 7;
        $r->party_id = 2;
        $r->save();

        $r = new Representative;
        $r->name = "R8";
        $r->seat_id = 8;
        $r->party_id = 2;
        $r->save();

        $r = new Representative;
        $r->name = "R9";
        $r->seat_id = 9;
        $r->party_id = 3;
        $r->save();

        $r = new Representative;
        $r->name = "R10";
        $r->seat_id = 10;
        $r->party_id = 1;
        $r->save();

        $r = new Representative;
        $r->name = "R11";
        $r->seat_id = 11;
        $r->party_id = 2;
        $r->save();
    }
}
