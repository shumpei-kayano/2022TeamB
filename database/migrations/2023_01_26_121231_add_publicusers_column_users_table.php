<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPublicusersColumnUsersTable extends Migration
{
    /**
     * Run the migrations.
     * カラムの追加
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('public_email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('postalcode')->nullable();
            $table->string('city')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->integer('auth_code')->nullable();
            $table->integer('evaluation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     * カラムの削除
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('public_email');
            $table->dropColumn('phone_number');
            $table->dropColumn('postalcode');
            $table->dropColumn('city');
            $table->dropColumn('address1');
            $table->dropColumn('address2');
            $table->dropColumn('auth_code');
            $table->dropColumn('evaluation');
        });
    }
}
