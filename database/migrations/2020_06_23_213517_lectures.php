<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lectures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecture', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->string('title2')->nullable();
            $table->string('video')->nullable();
            $table->string('videoName')->nullable();
            $table->string('description')->nullable();
            $table->string('attachment1')->nullable();
            $table->string('attachment2')->nullable();
            $table->rememberToken();
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
        //
    }
}
