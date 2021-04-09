<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartyRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('party_region', function (Blueprint $table) {
            $table->primary(['party_id', 'region_id']);
            $table->BigInteger('party_id')->unsigned()->nullable();
            $table->BigInteger('region_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('party_region');
    }
}
