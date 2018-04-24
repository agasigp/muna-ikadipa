<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->char('registration_no', 15);
            $table->unsignedTinyInteger('region')->description('1 = Barat, 2 = Tengah, 3 = Timur');
            $table->string('name', 50);
            $table->string('address', 255);
            $table->string('telephone', 15);
            $table->string('email', 30);
            $table->string('parent_name', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
