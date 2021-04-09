<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(YearSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(ConstituencySeeder::class);
        $this->call(SeatSeeder::class);
        $this->call(PartySeeder::class);
        $this->call(RepresentativeSeeder::class);
        $this->call(VoterSeeder::class);
        $this->call(CoordinateSeeder::class);
        
        
    }
}
