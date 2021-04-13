<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstituencyCoordinateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constituency_coordinate', function (Blueprint $table) {
            $table->primary(['constituency_id', 'coordinate_id']);
            $table->BigInteger('constituency_id')->unsigned()->nullable();
            $table->BigInteger('coordinate_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('constituency_id')->references('id')->on('constituencies')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('constituency_coordinate');
    }
}
