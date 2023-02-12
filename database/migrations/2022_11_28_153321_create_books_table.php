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
    //books database schema
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('bookid');
            $table->string('detail')->nullable();
            $table->string('author');
            $table->string('publication');
            $table->string('branch',90);
            $table->string('price',90);
            $table->string('quantity',90);
            $table->string('rent',90)->nullable();
            $table->string('available',90)->nullable();
            $table->string('image')->nullable();
            $table->string('demo1')->nullable();
            $table->string('demo2')->nullable();
            $table->string('demo3')->nullable();
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
        Schema::dropIfExists('books');
    }
};
