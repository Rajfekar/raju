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
    //book requested by member db
    public function up()
    {
        Schema::create('rbooks', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('username');
            $table->string('bookid');
            $table->string('bookname');
            $table->string('count1')->nullable();
            $table->string('count2')->nullable();
            $table->string('count3')->nullable();
            $table->string('count4')->nullable();
           
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
        Schema::dropIfExists('rbooks');
    }
};
