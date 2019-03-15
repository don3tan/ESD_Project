<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql4')->create('memberships', function (Blueprint $table) {
            $table->integer('id',true,true);
            $table->string('memberID',32)->default('NULL');
            $table->string('name',64);
            $table->string('address',128);
            $table->string('email',32);
            $table->timestamps();
        });

        DB::connection('mysql4')->statement('ALTER TABLE memberships CHANGE id id INT(6) UNSIGNED ZEROFILL NOT NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql4')->dropIfExists('memberships');
    }
}
