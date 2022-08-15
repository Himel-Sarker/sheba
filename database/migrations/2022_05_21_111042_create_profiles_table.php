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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->date('dob')->nullable();
            $table->date('join_date')->nullable();
            $table->integer('nid')->length(45)->nullable();
            $table->string('degree')->nullable();
            $table->string('specialist')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->text('bio')->length(500)->nullable();
            $table->text('address')->length(500)->nullable();
            $table->string('image')->nullable();

            $table->longText('time_table')->nullable();

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
        Schema::dropIfExists('profiles');
    }
};
