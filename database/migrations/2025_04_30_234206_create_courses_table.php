<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('icon')->nullable();
            $table->enum('period', ['matutino', 'vespertino', 'noturno', 'integral', 'flexível'])->default('integral');
            $table->integer('total_workload');
            $table->integer('tcc_load')->nullable();
            $table->foreignId('modality_id')->constrained('modalities')->onDelete('cascade');
            $table->foreignId('technological_axi_id')->constrained('technological_axis')->onDelete('cascade');
            $table->foreignId('type_enablenment_id')->constrained('type_enablenment')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
