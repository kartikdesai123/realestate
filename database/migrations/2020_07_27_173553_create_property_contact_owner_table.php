<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyContactOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_contact_owner', function (Blueprint $table) {
            $table->id();
            $table->integer('property_id');
            $table->string('name');
            $table->string('email');
            $table->string('phoneno');
            $table->text('message');
            $table->enum('message',['0','1'])->default('0')->comment('0 for not agree , 1 for agree');
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
        Schema::dropIfExists('property_contact_owner');
    }
}
