<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_items', function (Blueprint $table) {
            $table->bigInteger("id");
            $table->primary("id");
            $table->bigInteger("order_id");
            $table->foreign("order_id")->references("id")->on("orders");
            $table->bigInteger("product_id");
            $table->foreign("product_id")->references("id")->on("products");
            $table->bigInteger("count");
            $table->float("discount")->default(0);
            $table->float("cost");

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_items');
    }
}
