<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('initial_news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable(false);
            $table->string('redirect_link')->nullable(false);
            $table->string('banner')->nullable(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('initial_news');
    }
};
