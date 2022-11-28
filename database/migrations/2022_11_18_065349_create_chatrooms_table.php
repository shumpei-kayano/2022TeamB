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
            $table->string('title')->nullable();
            // $table->timestamps('created_at');
            // $table->timestamps('update_at');
            $table->string('room_detail', 1000)->nullable();
            // $table->integer('category_id');
            // $table->boolean('publish_flag'); これは一旦消してます。またあとで使います
            $table->string('chat_image')->nullable();
            $table->integer('developer_id')->nullable();
            $table->integer('delet_flag')->nullable();
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
