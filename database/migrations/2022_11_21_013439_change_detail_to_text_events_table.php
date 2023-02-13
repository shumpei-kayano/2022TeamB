<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDetailToTextEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->string('user_id')->change();
            // $table->string('facility_id')->change();
            $table->text('event_detail')->change();
            //stringでmaigrateしたらvarchar(191)になったのでtext型に変更
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->text('user_id')->change();
            // $table->text('facility_id')->change();
            $table->string('event_detail')->change();
        });
    }
}
