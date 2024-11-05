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
        Schema::create('majors', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('name');
            $table->longText('description');
            $table->string('status');
            $table->string('logo');
            $table->string('banner');
            $table->longText('career');
            $table->longText('reason');
            $table->longText('curriculum');
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
        Schema::dropIfExists('majors');
    }
};
