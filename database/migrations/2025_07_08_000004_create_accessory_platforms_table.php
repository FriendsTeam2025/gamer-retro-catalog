<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('accessory_platforms', function (Blueprint $table) {
            $table->uuid('accessory_id');
            $table->uuid('platform_id');
            $table->primary(['accessory_id', 'platform_id']);
            $table->foreign('accessory_id')->references('id')->on('accessories')->onDelete('cascade');
            $table->foreign('platform_id')->references('id')->on('platforms')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('accessory_platforms');
    }
}; 