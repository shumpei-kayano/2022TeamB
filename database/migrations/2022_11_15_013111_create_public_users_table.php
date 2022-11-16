<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('facility_name');
            $table->string('password');
            $table->string('email');
            $table->string('public_email');
            $table->string('phone_number')->nullable();
            $table->string('postalcode')->nullable();
            $table->string('city')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->integer('auth_code');
            $table->timestamp('createdate');
            $table->timestamp('updatedate')->nullable();
            $table->string('self_introduction')->nullable();
            $table->string('icon')->nullable();
            $table->integer('evaluation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('public_users');
    }
}
