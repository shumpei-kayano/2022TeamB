<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCreatedAtEventsTable extends Migration
{
    /**
     * Run the migrations.
     * laravel のデフォルトのcreated_at とupdated_atにしないとうまくいかないので
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->renameColumn('createdate', 'created_at');
            $table->renameColumn('updatedate', 'updated_at');
        });
    }

    /**
     * Reverse the migrations.
     * 変更した内容の打消し処理（ロールバック）
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->renameColumn('created_at', 'createdate');
            $table->renameColumn('updated_at', 'updatedate');
        });
    }
}
