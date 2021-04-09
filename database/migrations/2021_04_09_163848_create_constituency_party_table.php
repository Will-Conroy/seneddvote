<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstituencyPartyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constituency_party', function (Blueprint $table) {
            $table->primary(['constituency_id', 'party_id']);
            $table->BigInteger('constituency_id')->unsigned()->nullable();
            $table->BigInteger('party_id')->unsigned()->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('constituency_party');
    }
}
