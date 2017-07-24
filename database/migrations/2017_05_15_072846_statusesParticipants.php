<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StatusesParticipants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statusesParticipants', function (Blueprint $table) {
//            $table->engine = 'ARCHIVE';
            $table->increments('id');
            $table->integer('id_participant')->unsigned();
            $table->text('value')->nullable();
            $table->timestamps();
//            $table->foreign('id_participant')->references('id')->on('eventsParticipants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statusesParticipants');
    }
}
