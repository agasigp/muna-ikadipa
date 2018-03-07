<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participant_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('participant_id');
            $table->string('name', 255);
            $table->unsignedTinyInteger('age');
            $table->unsignedTinyInteger('sex');
            $table->timestamps();

            $table->foreign('participant_id')
                ->references('id')
                ->on('participants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('participant_details', function (Blueprint $table) {
            $table->dropForeign(['participant_id']);
        });
        Schema::dropIfExists('participant_details');
    }
}
