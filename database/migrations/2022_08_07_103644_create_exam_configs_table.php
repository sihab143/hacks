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
        Schema::create('exam_configs', function (Blueprint $table) {
            $table->id();
            $table->integer('Ay_ID');
            $table->integer('Exam_Name_ID');
            $table->integer('Class_ID');
            $table->integer('Section_ID');
            $table->integer('Subject_ID');
            $table->integer('Subjective_Status')->default('0');
            $table->integer('Objective_Status')->default('0');
            $table->integer('Practical_Status')->default('0');
            $table->integer('Subjective_Mark');
            $table->integer('Objective_Mark');
            $table->integer('Practical_Mark');
            $table->integer('Weighted_Mark');
            $table->integer('Status')->default('0');
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
        Schema::dropIfExists('exam_configs');
    }
};
