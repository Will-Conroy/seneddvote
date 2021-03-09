<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voters', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('constituency_id')->unsigned();
            $table->BigInteger('constituency_represenatative_id')->unsigned();
            $table->BigInteger('region_represenatative_id')->unsigned();
            $table->timestamps();
            $table->foreign('constituency_id')->references('id')->on('constituencies')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('constituency_represenatative_id')->references('id')->on('representatives')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('region_represenatative_id')->references('id')->on('representatives')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voters');
    }
}
