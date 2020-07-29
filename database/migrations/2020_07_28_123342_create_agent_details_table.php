<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agentDetails', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string("designation");
            $table->string("facebook")->nullable();
            $table->string("twitter")->nullable();
            $table->string("linkedin")->nullable();
            $table->string("website")->nullable();
            $table->string("licenses")->nullable();
            $table->string("phoneNo");
            $table->string("officeno");
            $table->text("overview");
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
        Schema::dropIfExists('agentDetails');
    }
}
