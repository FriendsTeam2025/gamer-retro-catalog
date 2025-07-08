<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('accessories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->foreignUuid('manufacturer_id')->constrained();
            $table->year('release_year')->nullable();
            $table->foreignUuid('country_id')->constrained();
            $table->string('accessory_type')->nullable();
            $table->string('connectivity')->nullable();
            $table->boolean('is_official')->default(false);
            $table->text('official_note')->nullable();
            $table->string('barcode')->nullable();
            $table->string('image_url')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('accessories');
    }
}; 