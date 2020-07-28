<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_request', function (Blueprint $table) {
            $table->id();
            $table->integer('property_id');
            $table->string('name');
            $table->string('email');
            $table->string('phoneno');
            $table->string('date');
            $table->string('time');
            $table->text('message');
            $table->enum('request_type',['0','1'])->default('0')->comment("0 for Video Call , 1 for Personal Visit");
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
        Schema::dropIfExists('property_request');
    }
}
