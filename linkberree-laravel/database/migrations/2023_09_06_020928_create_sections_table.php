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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->enum('section_type', ['Image', 'Video', 'Text']);
            $table->string('hero_copy_line_1')->nullable();
            $table->string('hero_copy_line_2')->nullable();
            $table->string('link_cta_copy')->nullable();
            $table->string('link_url')->nullable();
            $table->string('media_url')->nullable();
            $table->integer('order');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
