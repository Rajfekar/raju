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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('collegeid',50);
            $table->string('libid',50);
            $table->string('name',100);
            $table->string('mobile',100)->nullable();
            $table->string('email',100)->nullable();
            $table->integer('gender',2)->nullable();
            $table->integer('type',2)->nullable();
            $table->integer('course',2)->nullable();
            $table->string('branch',100)->nullable();
            $table->string('sem',100)->nullable();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->int('attendence',1)->nullable();
            $table->string('enrolmentid')->nullable();
            $table->bigInteger('rollno')->nullable();
            $table->string('admissiondate')->nullable();
            $table->integer('status',1)->nullable();
            $table->string('r1')->nullable();
            $table->string('r2')->nullable();
            $table->string('r3')->nullable();
            $table->string('r4')->nullable();
            $table->string('r5')->nullable();
            $table->string('r6')->nullable();
            $table->string('r7')->nullable();
            $table->string('r8')->nullable();
            $table->string('r9')->nullable();
            $table->string('r10')->nullable();
            $table->string('r11')->nullable();
            $table->string('r12')->nullable();
            $table->string('r13')->nullable();
            $table->string('r14')->nullable();
            $table->string('r15')->nullable();
            $table->string('r16')->nullable();
            $table->string('password',200)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
