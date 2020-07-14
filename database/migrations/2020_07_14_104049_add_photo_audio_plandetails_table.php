<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhotoAudioPlandetailsTable extends Migration
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
            $table->integer("photos")->after('planagent')->default(0)->nullable();
            $table->integer("audiobook")->after('photos')->default(0)->nullable();
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
