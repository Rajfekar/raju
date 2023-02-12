<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->id();
            $table->string('collegeid');
            $table->string('sem');
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('total')->nullable();
            $table->string('paid')->nullable();
            $table->string('due')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('payment_date')->nullable();
            $table->string('invoice_id')->nullable();
            $table->string('cource')->nullable();
            $table->string('branch')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('discription')->nullable();
            $table->string('subtotal')->nullable();
            $table->string('d1')->nullable();
            $table->string('d2')->nullable();
            $table->string('d3')->nullable();
            $table->string('d4')->nullable();
            $table->string('d5')->nullable();
            $table->string('d6')->nullable();
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
        Schema::dropIfExists('fees');
    }
};
