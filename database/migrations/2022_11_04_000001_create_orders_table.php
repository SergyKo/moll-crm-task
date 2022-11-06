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
            $table->bigInteger("id")->unsigned()->autoIncrement();
            $table->string("costumer", 255)->comment("имя клиента");
            $table->string("phone", 255)->comment("телефон клиента");
            $table->timestamp('created_at');
            $table->timestamp('completed_at');
            $table->bigInteger("user_id")->unsigned();
            $table->string("type", 255); // ["online", "offline"]
            $table->string("status", 255); // ["active", "completed", "canceled"]

            $table->foreign("user_id")->references("id")->on("users");
        });
    }


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
