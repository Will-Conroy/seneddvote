<?php

use Illuminate\Database\Seeder;
use App\year;


class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default = new Year;
        $default->name = "default";
        $default->save();
    }
}
