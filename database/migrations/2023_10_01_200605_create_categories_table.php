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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->constrained('categories')->cascadeOnDelete();
            $table->string('ar_name');
            $table->string('en_name');
            $table->string('ar_url');
            $table->string('en_url');
            $table->string('image');
            $table->integer('rank');
            $table->integer('shown_in_top_menu');
            $table->integer('shown_in_main_page');
            $table->integer('visible');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
