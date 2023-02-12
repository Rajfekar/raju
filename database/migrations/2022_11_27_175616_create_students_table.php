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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('libid',50);
            $table->string('name',100);
            $table->string('mobile',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('type',100)->nullable();
            $table->string('branch',100)->nullable();
            $table->string('sem',100)->nullable();
            $table->string('password',100);
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->string('attendence')->nullable();
            $table->string('enrolmentid')->nullable();
            $table->string('rollno')->nullable();
            $table->string('status')->nullable();
            $table->string('demo1')->nullable();
            $table->string('demo2')->nullable();
            $table->string('demo3')->nullable();
            $table->string('demo4')->nullable();
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
        Schema::dropIfExists('students');
    }
};
