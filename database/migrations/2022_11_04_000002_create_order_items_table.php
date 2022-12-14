<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->bigInteger("id")->unsigned()->autoIncrement();
            $table->bigInteger("order_id")->unsigned();
            $table->bigInteger("product_id")->unsigned();
            $table->integer("count");
            $table->float("discount")->default(0);
            $table->float("cost")->comment("стоимость товаров в позиции с учётом скидки");

            $table->foreign("order_id")->references("id")->on("orders");
            $table->foreign("product_id")->references("id")->on("products");
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
