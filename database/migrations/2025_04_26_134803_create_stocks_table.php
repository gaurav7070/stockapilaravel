<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('item_code');
            $table->string('item_name');
            $table->integer('quantity');
            $table->string('location');
            $table->foreignId('store_id')->constrained('stores')->onDelete('cascade');
            $table->date('in_stock_date');
            $table->enum('status', ['Pending', 'In-Stock'])->default('Pending');
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
        Schema::dropIfExists('stocks');
    }
}
