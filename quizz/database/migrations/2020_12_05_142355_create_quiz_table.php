<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->char('questionqategory', 3);
                    $table->longText('question');
                    $table->longText('answera');
                    $table->longText('answerb');
                    $table->longText('answerc');
                    $table->longText('answerd');
            $table->timestamps();
        });
//        {
//            if(!Schema::hasTable('questions')){
//                Schema::create('questions', function (Blueprint $table) {
//                    $table->increments('id');
//                    $table->char('questionqategory', 3);
//                    $table->longText('question');
//                    $table->longText('answera');
//                    $table->longText('answerb');
//                    $table->longText('answerc');
//                    $table->longText('answerd');
//                    $table->timestamps();
//                });
//            }
//        }
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
