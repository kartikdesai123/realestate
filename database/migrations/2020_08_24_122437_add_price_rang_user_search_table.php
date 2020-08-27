<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPriceRangUserSearchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_search', function (Blueprint $table) {
            //
            $table->string('max_price')->after('property_maxarea')->nullable();
            $table->string('min_price')->after('max_price')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_search', function (Blueprint $table) {
            //
        });
    }
}
