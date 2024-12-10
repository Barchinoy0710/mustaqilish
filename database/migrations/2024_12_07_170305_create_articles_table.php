<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->foreignId('user_id')->constrained('users','id');
            $table->string('category');
            $table->boolean('status');
            $table->string('file');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
