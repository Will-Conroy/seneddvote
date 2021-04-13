<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoordinateRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordinate_region', function (Blueprint $table) {
            $table->primary(['coordinate_id', 'region_id']);
            $table->BigInteger('coordinate_id')->unsigned()->nullable();
            $table->BigInteger('region_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('coordinate_id')->references('id')->on('coordinates')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coordinate_region');
    }
}
