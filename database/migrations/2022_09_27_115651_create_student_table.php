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
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('name_student');
            $table->foreignId('course_id')->constrained('course')->onDelete('cascade');
            $table->string('phone');
            $table->string('cpf')->unique();
            $table->enum('sex',['M','F','I']);
            $table->date('birth_date')->nullable();
            $table->string('address')->nullable();
            $table->string('number');
            $table->string('district')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('cep')->nullable();
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
        Schema::dropIfExists('student');
    }
};
