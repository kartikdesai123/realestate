<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_details', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->integer('offer');
            $table->integer("period")->nullable();
            $table->integer("type");
            $table->integer("price");
            $table->string("area");
            $table->integer("rooms");
            $table->text("map_address");
            $table->text("friendly_address");
            $table->string("longitude");
            $table->string("latitude");
            $table->string("regions");
            $table->integer("badroom");
            $table->integer("bathroom");
            $table->string("parking");
            $table->string("cooling");
            $table->string("heating");
            $table->string("sewer");
            $table->string("exercise_room");
            $table->string("storage_room");
            $table->integer("others");
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
        Schema::dropIfExists('property_details');
    }
}
