<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul')->default('Ulangan Materi Batik');
            $table->string('soal');
            $table->string('answer_a');
            $table->string('answer_b');
            $table->string('answer_c');
            $table->string('right_answer');
            $table->string('user_answer')->default('');
            $table->decimal('result')->default(0.0);
            $table->boolean('correct')->default(false);
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
        Schema::dropIfExists('quiz');
    }
}

