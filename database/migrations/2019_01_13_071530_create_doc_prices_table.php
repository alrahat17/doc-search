<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('procedure_name');
            $table->tinyInteger('price_type')->nullable(0);
            $table->integer('fixed_price');
            $table->integer('variable_price')->nullable(0);
            $table->tinyInteger('status');
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
        Schema::dropIfExists('doc_prices');
    }
}
