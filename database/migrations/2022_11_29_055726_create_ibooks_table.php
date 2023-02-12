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
    // issued books record db
    public function up()
    {
        Schema::create('ibooks', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('mname');
            $table->string('branch');
            $table->string('mtype');
            $table->string('ibook');
            $table->string('author')->nullable();
            $table->string('ibookid');
            $table->string('idays');
            $table->string('idate')->nullable();
            $table->string('rdate')->nullable();
            $table->string('fine')->nullable();
            $table->string('demo1')->nullable();
            $table->string('demo2')->nullable();
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
        Schema::dropIfExists('ibooks');
    }
};
