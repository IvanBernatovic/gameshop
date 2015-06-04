<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('active');
			$table->string('name', 500)->unique()->index();
			$table->integer('category_id')->unsigned()->nullable();
			$table->text('description');
			$table->decimal('price', 8, 2);
			$table->string('sku', 500);
			$table->integer('quantity')->nullable();
			$table->decimal('weight', 8, 2);
			$table->string('image', 500);

			$table->timestamps();

			/**
			 * Indexes and keys
			 */
			$table->foreign('category_id')
				->references('id')->on('categories')
				->onDelete('set null')
				->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
