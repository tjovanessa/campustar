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
        Schema::create('top_campuses', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('campus_id');
            $table->integer('major_id');
            $table->foreign('campus_id')->references('id')->on('campuses');
            $table->foreign('major_id')->references('id')->on('majors');
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
        Schema::dropIfExists('top_campuses');
    }
};
