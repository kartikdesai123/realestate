<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMapFiledToPropertyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('property_details', function (Blueprint $table) {
            //
            
            $table->string('address')->after("rooms");
            $table->string('friendly_address')->after("address");
            $table->string('city')->after("friendly_address");
            $table->string('state')->after("city");
            $table->string('country')->after("state");
            $table->string('postalcode')->after("country");
            $table->string('latitude')->after("postalcode");
            $table->string('longitude')->after("latitude");
            $table->integer('buliding_age')->after("longitude");
            $table->string('water')->after("sewer");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('property_details', function (Blueprint $table) {
            //
        });
    }
}
