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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->foreignId('sub_category_id')->nullable()->references('id')->on('sub_categories');
            $table->string('file_type')->nullable();
            $table->string('image')->nullable();
            $table->string('pdf')->nullable();
            $table->string('color')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
