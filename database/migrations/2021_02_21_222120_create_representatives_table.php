<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representatives', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->BigInteger('seat_id')->unsigned();
            $table->BigInteger('party_id')->unsigned();

            $table->timestamps();
            $table->foreign('seat_id')->references('id')->on('seats')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('representatives');
    }
}
