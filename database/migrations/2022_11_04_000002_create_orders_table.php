<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigInteger("id");
            $table->primary("id");
            $table->string("costumer", 255);
            $table->string("phone", 255);
            $table->timestamp('created_at');
            $table->timestamp('completed_at');
            $table->bigInteger("user_id");
            $table->foreign("user_id")->references("id")->on("users");
            $table->enum("type",["online", "offline"]);
            $table->enum("status",["active", "completed", "canceled"]);
        });
    }

//    $table->enum('difficulty', ['easy', 'hard']);

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
