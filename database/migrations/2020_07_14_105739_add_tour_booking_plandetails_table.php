<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTourBookingPlandetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plandetails', function (Blueprint $table) {
            //
            $table->enum("tourBooking",["Y","N"])->comment("Y for Yes, N for No")->default("N")->after('noofvideo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('plandetails', function (Blueprint $table) {
            //
        });
    }
}
