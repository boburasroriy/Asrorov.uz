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
        Schema::create('post_controllers', function (Blueprint $table) {
            $table->id('id');
            $table->text('Create_photo');
            $table->string('Create_title');
            $table->text('Create_text');
            $table->text('Create_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_controllers');
    }
};