<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            $table->integer('status_code_id')->unsigned();
            $table->decimal('weight', 8, 2);
            $table->decimal('full_price', 8, 2);
            $table->integer('user_id')->unsigned();
            $table->integer('address_id')->unsigned();
            $table->integer('payment_method_id')->unsigned();

            $table->string('stripeToken')->nullable();
            
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
        Schema::drop('orders');
    }
}
