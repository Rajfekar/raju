<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    /**
     * Run the migrations.
     *
     *    @return void
     */
    // all subject wise attendance of students
    public function up()
    {
        Schema::create('ritattendances', function (Blueprint $table) {
            $table->id();
            $table->string('collegeid');
            $table->string('name');
            $table->string('intime');
            $table->string('outtime');
            $table->string('date');
            $table->string('rollno')->nullable();
            $table->string('subject')->nullable();
            $table->string('r1')->nullable();
            $table->string('r2')->nullable();
            $table->string('r3')->nullable();
            $table->string('r4')->nullable();
            $table->string('r5')->nullable();
            $table->string('r6')->nullable();
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
        Schema::dropIfExists('ritattendances');
    }
};
