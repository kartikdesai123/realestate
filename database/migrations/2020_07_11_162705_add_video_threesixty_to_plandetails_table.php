<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVideoThreesixtyToPlandetailsTable extends Migration
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
            $table->integer("noofvideo")->after('planagent')->default(0)->nullable();
            $table->enum("angleview",["Y","N"])->comment("Y for Yes, N for No")->default("N")->after('noofvideo');
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
