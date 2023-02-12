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
        Schema::create('feepaids', function (Blueprint $table) {
            $table->id();
            $table->string('upi_ref_no')->nullable();
            $table->string('trasaction_id')->nullable();
            $table->string('transaction_date')->nullable();
            $table->string('transaction_time')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('q1')->nullable();
            $table->string('q2')->nullable();
            $table->string('q3')->nullable();
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
        Schema::dropIfExists('feepaids');
    }
};
