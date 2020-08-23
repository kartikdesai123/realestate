<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersSearchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_search', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string("property_type")->nullable();
            $table->string("property_status")->nullable();
            $table->string("property_location")->nullable();
            $table->string("property_distance")->nullable();
            $table->string("property_badroom")->nullable();
            $table->string("property_sortby")->nullable();
            $table->string("property_floorarea")->nullable();
            $table->integer("property_agent")->nullable();
            $table->integer("property_agency")->nullable();
            $table->integer("property_company")->nullable();
            $table->string("property_minarea")->nullable();
            $table->string("property_maxarea")->nullable();
            $table->string("property_price_area")->nullable();
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
        Schema::dropIfExists('user_search');
    }
}
