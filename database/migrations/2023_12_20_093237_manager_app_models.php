<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('manager_app_models', function (Blueprint $table) {
            $table->id('id');
            $table->string('first_title');
            $table->string('second_title');
            $table->string('slot');

            $table->string('first_title_education');
            $table->string('first_text_education');
            $table->string('technologies_title');

            $table->string('technologies_1');
            $table->string('technologies_2');
            $table->string('technologies_3');
            $table->string('technologies_4');
            $table->string('technologies_5');
            $table->string('technologies_6');
            $table->string('technologies_7');
            $table->string('technologies_8');
            $table->string('technologies_9');
            $table->string('technologies_10');

            $table->string('title_skills_1');
            $table->string('title_skills_2');
            $table->string('title_skills_3');
            $table->string('title_skills_4');
            $table->string('title_skills_5');
            $table->string('title_skills_6');
            $table->string('title_skills_7');
            $table->string('title_skills_8');
            $table->string('title_skills_9');
            $table->string('title_skills_10');
            $table->string('title_skills_11');
            $table->string('title_skills_12');
            $table->string('title_skills_13');
            $table->string('title_skills_14');
            $table->string('title_skills_15');
            $table->string('title_skills_16');
            $table->string('title_skills_17');
            $table->string('title_skills_18');



            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manager_app_models');

    }
};
