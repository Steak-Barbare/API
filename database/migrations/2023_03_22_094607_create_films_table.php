<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id()->onDelete('cascade');
            $table->string('title');
            $table->string('content');
            $table->date('release_date');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};