<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            // $table->string('facility_id');
            $table->timestamp('createdate');
            $table->string('event_title')->nullable();
            $table->string('event_detail')->nullable();
            $table->dateTime('deadline')->nullable();
            $table->string('city')->nullable();
            $table->dateTime('date_of_event')->nullable();
            $table->string('url')->nullable();
            $table->timestamp('updatedate')->nullable();
            $table->dateTime('end_time')->nullable();
            $table->string('event_image')->nullable();
            $table->integer('publish_flag')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
