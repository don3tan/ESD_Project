<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemPromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql3')->create('item_promotions', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('inventory_id')->unsigned();
            $table->foreign('inventory_id')->references('id')->on('inventories')->onDelete('cascade');
            $table->float('discount',6,2);
            $table->timestamps();
        });

        DB::connection('mysql3')->unprepared('ALTER TABLE `item_promotions` DROP PRIMARY KEY, ADD PRIMARY KEY (  `id` ,  `inventory_id` )');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql3')->dropIfExists('item_promotions');
    }
}
