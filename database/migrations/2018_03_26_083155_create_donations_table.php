<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->increments('id');
            $table->char('registration_no', 15);
            $table->unsignedTinyInteger('region')->description('1 = Barat, 2 = Tengah, 3 = Timur');
            $table->string('name', 50);
            $table->string('address', 255);
            $table->string('telephone', 15);
            $table->string('email', 30);
            $table->unsignedMediumInteger('amount');
            $table->date('transfered_on');
            $table->boolean('status');
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
        Schema::dropIfExists('donations');
    }
}
