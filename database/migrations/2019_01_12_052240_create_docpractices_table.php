<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocpracticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('docpractices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address_one');
            $table->string('address_two');
            $table->string('neighborhood');
            $table->integer('postalcode');
            $table->integer('city_id');
            $table->string('phone_no');
            $table->string('phone_portable');
            $table->string('cell_phone');
            $table->string('web_address');
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
        Schema::dropIfExists('docpractices');
    }
}
