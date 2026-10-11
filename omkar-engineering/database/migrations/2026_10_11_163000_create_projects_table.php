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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('location')->nullable();
            $table->string('category')->nullable();
            $table->string('client')->nullable();
            $table->string('project_date')->nullable();
            $table->string('icon')->default('norc-factory');
            $table->string('image')->nullable();
            $table->text('sort_description')->nullable();
            $table->longText('description')->nullable();
            $table->json('included_items')->nullable();
            $table->json('slider_images')->nullable();
            $table->json('gallery_images')->nullable();
            $table->string('website_url')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
