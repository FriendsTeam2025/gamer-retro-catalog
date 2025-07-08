<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->foreignUuid('developer_id')->constrained();
            $table->foreignUuid('publisher_id')->constrained();
            $table->year('release_year')->nullable();
            $table->foreignUuid('platform_id')->constrained();
            $table->string('region')->nullable();
            $table->string('media_type')->nullable();
            $table->string('edition')->nullable();
            $table->string('modes')->nullable();
            $table->string('languages')->nullable();
            $table->boolean('has_fan_patch')->default(false);
            $table->text('fan_patch_note')->nullable();
            $table->string('barcode')->nullable();
            $table->string('image_url')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('games');
    }
}; 