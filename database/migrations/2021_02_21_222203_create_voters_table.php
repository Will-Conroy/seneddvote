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
            $table->BigInteger('region_id')->unsigned()->nullable();
            $table->BigInteger('constituency_id')->unsigned()->nullable();
            $table->BigInteger('party_id')->unsigned();
            $table->BigInteger('votes');
            $table->timestamps();

            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('constituency_id')->references('id')->on('constituencies')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('party_id')->references('id')->on('parties')->onDelete('cascade')->onUpdate('cascade');
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
