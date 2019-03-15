<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('order_items', function (Blueprint $table) {
            $table->integer('id',true,true);
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->integer('item_id');
            $table->integer('quantity');
            $table->timestamps();
        });

        DB::connection('mysql2')->unprepared('ALTER TABLE `order_items` DROP PRIMARY KEY, ADD PRIMARY KEY (  `id` ,  `order_id` )');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->dropIfExists('order_items');
    }
}
