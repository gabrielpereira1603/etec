<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('course_infos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('course_id')->constrained()->onDelete('cascade');

            $table->string('headline')->nullable();
            $table->text('intro')->nullable();
            $table->text('objectives')->nullable();
            $table->text('profile')->nullable();
            $table->text('certifications')->nullable();
            $table->text('job_areas')->nullable();
            $table->text('differentials')->nullable();
            $table->text('enrollment_info')->nullable();

            $table->string('cover_image')->nullable();
            $table->string('promo_video_url')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_infos');
    }
};
