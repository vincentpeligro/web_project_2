<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Student', function (Blueprint $table) {
            $table->id();
            $table->string('firstname',25)->nullable();
            $table->string('lastname',25)->nullable();
            $table->integer('age')->nullable();
            $table->string('address',50)->nullable();
            $table->string('relegion',20)->nullable();
            $table->string('teacher',25)->nullable();
            $table->string('subject',20)->nullable();
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
        Schema::dropIfExists('Student');
    }
}
