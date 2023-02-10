<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMunicipalityFlagPublicUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('public_users', function (Blueprint $table) {
            $table->integer('municipality_flag');  //カラム追加
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('public_users', function (Blueprint $table) {
            $table->dropColumn('municipality_flag');  //カラムの削除
        });
    }
}
