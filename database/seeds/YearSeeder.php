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
        $testYear = new Year;
        $testYear->name = "Test";
        $testYear->save();

        $default = new Year;
        $default->name = "default";
        $default->save();

        $default = new Year;
        $default->name = "2016";
        $default->save();

        $default = new Year;
        $default->name = "2011";
        $default->save();

        $default = new Year;
        $default->name = "2007";
        $default->save();
    }
}
