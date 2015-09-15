;<?php

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

            $table->integer('status_code_id')->unsigned()->default(1);
            $table->decimal('weight', 8, 2);
            $table->decimal('full_price', 8, 2);
            $table->integer('user_id')->unsigned();
            $table->integer('address_id')->unsigned();
            $table->integer('payment_method_id')->unsigned();

            $table->string('stripeToken')->nullable();
            
            $table->timestamps();

            /**
             * Indices
             */
            $table->foreign('status_code_id')
                ->references('id')->on('status_codes');

            $table->foreign('address_id')
                ->references('id')->on('addresses');

            $table->foreign('user_id')
                ->references('id')->on('users');

            $table->foreign('payment_method_id')
                ->references('id')->on('payment_methods');
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
