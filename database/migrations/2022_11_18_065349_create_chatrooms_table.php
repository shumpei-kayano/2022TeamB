<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatrooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->timestamps('created_at');
            $table->timestamps('update_at');
            $table->string('room_detail');
            $table->integer('category_id');
            $table->boolean('publish_flag');
            $table->string('chat_image');
            $table->integer('developer_id');
            $table->integer('delet_flag');
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
        Schema::dropIfExists('chatrooms');
    }
}
