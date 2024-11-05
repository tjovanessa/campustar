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
        Schema::create('campuses', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('name');
            $table->longText('description');
            $table->string('status');
            $table->string('logo');
            $table->string('banner');
            $table->string('location');
            $table->string('accreditation');
            $table->string('web');
            $table->string('email');
            $table->string('phone');
            $table->longText('address');
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
        Schema::dropIfExists('campuses');
    }
};
