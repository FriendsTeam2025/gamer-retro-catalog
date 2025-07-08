<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('catalog_items', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('type');
            $table->foreignUuid('platform_id')->constrained();
            $table->foreignUuid('manufacturer_id')->constrained();
            $table->year('release_year')->nullable();
            $table->string('region')->nullable();
            $table->string('media_type')->nullable();
            $table->string('barcode')->nullable();
            $table->string('image_url')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->default('active');
            $table->boolean('is_retro_compatible')->default(false);
            $table->string('retro_with')->nullable();
            $table->string('console_type')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('catalog_items');
    }
}; 