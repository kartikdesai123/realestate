<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRolesAndAddedbyToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->enum("roles",['A','U','AG','AY','CC'])->default("U")->comment('A for Admin,U for User , AG for Agent, AY for Agancy , CC for Construction Company ')->after('userimage');
            $table->integer("addby")->after('roles')->nullable();
            $table->enum("isDeleted",['0','1'])->default("0")->comment('0 for not deleted , 1 for deleted')->after('addby');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
